<?php 

namespace App\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use App\Traits\BashColors;

include(__DIR__ . '/../Libs/Hodclient.php');
include(__DIR__ . '/../Libs/Fpdf.php');
include(__DIR__ . '/../Libs/FaceDetect.php');
include(__DIR__ . '/../Libs/betaFace/BetaFace.php');

class CVParser extends Command
{
	use BashColors;

	protected function configure()
	{
		$this
		->setName('cv:parse')
		->setDescription('Parsing CVS from images or files (pdf,word).')
		->setHelp('This command parse cvs. just put cvs in a folder and pass the folder pass as a parameter to console command...')
		->addArgument('cvs_folder_path', InputArgument::REQUIRED, 'The path of cvs folder.')
		;
	}

	protected function execute(InputInterface $input, OutputInterface $output)
	{

		$parsedDir = storage_path('parsed_cvs');
		$dir       = storage_path('cvs');
		
		$data = $this->unzipFile($input->getArgument('cvs_folder_path'), $dir);

        //check the unzipped file is not false
		if (!$data)
			return $this->error('Wrong zip file!! :(');

		foreach ($data as $key => $row) {
			$file     = $row[0];
			$industry = $row[1];
			$name     = $row[2];

			$percentage = ceil($key / count($data) * 100);
			$this->info(($key + 1) . '/' . count($data) . ' --' . $percentage . '% (' . $file . ')');

			$this->ocrImage($file, $industry);
		}

		$this->info('The end :D');
	}

	public function unzipFile($file, $dir)
	{
		$zip = new \ZipArchive;
		$res = $zip->open($file);

		if ($res === true) {
			$zip->extractTo($dir);
			$zip->close();
		} else {
			return false;
		}

        //list all folders inside the unzipped folder
		$industries = array_diff(scandir($dir), ['..', '.']);
		$cvs_arr    = [];
		foreach ($industries as $directory) {

			$path = $dir . '/' . $directory;
			if (!is_dir($path)) {
				continue;
			}

			$cvs = array_diff(scandir($path), ['..', '.']);

			foreach ($cvs as $cv) {
				$name = $cv;
				$name = strstr($name, '.', true);
				$cv   = $path . '/' . $cv;
				array_push($cvs_arr, [$cv, $directory, $name]);
			}
		}
		return $cvs_arr;
	}

	public function ocrImage($file, $industry)
	{
		$this->warn('Authinticating !! Pray to success');

		$hodClient = new \HODClient("8e8f5f6e-b111-434b-99a4-2591de8d239b");
		$jobID     = $hodClient->PostRequest([
			'file' => $file,
			'mode' => "document_photo"
		], \HODApps::OCR_DOCUMENT, \REQ_MODE::ASYNC);

		$this->warn('God responded ^ _ ^');
		$this->warn('Optical character recognition the image starts now !! Pray again');

		if ($jobID == null) {
			
			$errors = $hodClient->getLastError();
			$err    = $errors[0];
			
			$this->error($err->error . " / " . $err->reason . " / " . $err->detail);

		} else {

			$response = $hodClient->GetJobResult($jobID);

			if ($response == null) {
				$errors = $hodClient->getLastError();
				$err    = $errors[0];
				$this->error("Error code: " . $err->error . "</br>Error reason: " . $err->reason . "</br>Error detail: " . $err->detail . "JobID: " . $err->jobID);

			} else {

				$result     = "";
				$textBlocks = $response->text_block;

				$this->warn('Parsing proccess has been finished successfully ^ _ ^');
				$this->warn('Extract image from image');

				if (pathinfo($file)['extension'] == 'pdf') {
					$this->warn('The file is pdf. so it converts the first page to image right now');
					$image_path = $this->convertFirstPageToImage($file);
				}else
				{
					$image_path = $this->extractImage($file);
				}

				$this->warn('Create pdf file');
				$this->createPdfFile($image_path, $textBlocks, $industry);

			}

		}
	}

	public function extractImage($image)
	{
		$cvsImages = storage_path('cvs_images');
		if (!file_exists($cvsImages))
			mkdir($cvsImages);

		$api             = new \BetaFace();
		$api->log_level  = 2;

		$upload_response = $api->upload_face($image, "obama1@waltergammarota.com");

		if (!$upload_response) {
			$image_path = '';
			$this->warn('Cannot detect any faces in cv');
		} else {
			$this->warn('The face has been detected successfully');
			$matches      = $api->get_face_info($upload_response);
			$decodedImage = base64_decode($matches['face_info'][0]);
			$f            = finfo_open();
			$mime_type    = finfo_buffer($f, $decodedImage, FILEINFO_MIME_TYPE);

			$map_extensions = [
				"image/gif"  => "gif",
				"image/jpg"  => "jpg",
				"image/jpeg" => "jpeg",
				"image/png"  => "png",
				"image/swf"  => "swf",
				"image/psd"  => "psd",
				"image/bmp"  => "bmp",
				"image/tiff" => "tiff",
				"image/jpc"  => "jpc",
				"image/jp2"  => "jp2",
				"image/jpx"  => "jpx",
				"image/jb2"  => "jb2",
				"image/swc"  => "swc",
				"image/iff"  => "iff",
				"image/wbmp" => "wbmp",
				"image/xbm"  => "xbm",
			];
			$extention      = ($map_extensions[$mime_type]);
			$image_path     = $cvsImages . "/" . rand() . "." . $extention;
			file_put_contents($image_path, $decodedImage);
		}

		return $image_path;
	}

	public function createPdfFile($image_path, $textBlocks, $industry)
	{
		$finalDir = storage_path('finalParsedCvs/');

		if (!file_exists($finalDir))
			mkdir($finalDir);

		if (!file_exists($finalDir . $industry))
			mkdir($finalDir . $industry);


		$pdf = new \FPDF();

		$pdf->AliasNbPages();
		$pdf->AddPage();
		$pdf->SetFont('Times', '', 12);

        //image
		if ($image_path != '')
			$pdf->Image($image_path, 150, 10, 33);

        //Move to the right
		$pdf->Cell(80);
        //Line break
		$pdf->Ln(20);

		for ($i = 0; $i < count($textBlocks); $i++) {
			$block  = $textBlocks[$i];
			$result = preg_replace("/\n+/", "<br>", $block->text);

			$result = explode('<br>', $result);
			foreach ($result as $line)
				$pdf->Cell(0, 10, $line . $i, 0, 1);
		}

		$pdf->Output('F', $finalDir . $industry . '/' . rand() . ".pdf");
		$this->warn('Final pdf cv file has been created :D');
	}

	public function convertFirstPageToImage($file)
	{
		$pdfDir = storage_path('pdfFirstPage');

		if (!file_exists($pdfDir))
			mkdir($pdfDir);

		$file = $file . '[0]';

		$img = new \Imagick();
		$img->setResolution(300, 300);
		$img->readImage($file);

		$img->setImageFormat('jpg');
		$img->setImageCompression(\imagick::COMPRESSION_JPEG);
		$img->setImageCompressionQuality(100);

		$image_path = $pdfDir . time() . '.jpg';
		$img->writeImage($image_path);
		$img->clear();
		$img->destroy();
		return $this->extractImage($image_path);
	}
}
