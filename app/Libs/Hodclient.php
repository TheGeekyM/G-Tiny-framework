<?php

/**
 * Created by PhpStorm.
 * User: vuv
 * Date: 10/5/2015
 * Time: 3:53 PM
 */

interface REQ_MODE
{
    const ASYNC = "async";
    const SYNC = "sync";
}

class HODErrorObj
{
    public $error = 0;
    public $reason = "";
    public $detail = "";
    public $jobID = "";

    function __construct($code, $reason, $detail="", $jobID="") {
        $this->error = $code;
        $this->reason = $reason;
        $this->detail = $detail;
        $this->jobID = $jobID;
    }
}
interface ErrorCode
{
    const TIMEOUT = 1600;
    const IN_PROGRESS = 1610;
    const QUEUED = 1620;
    const HTTP_ERROR = 1630;
    const CONNECTION_ERROR = 1640;
    const IO_ERROR = 1650;
    const INVALID_PARAM = 1660;
    const INVALID_HOD_RESPONSE = 1680;
}
class HODClient
{
    const LOG_ERROR = false;
    private $apiKey = '';
    private $ver;
    private $hodAppBase = 'https://api.havenondemand.com/1/api/';
    private $hodJobResultBase = "https://api.havenondemand.com/1/job/result/";
    private $hodJobStatusBase = "https://api.havenondemand.com/1/job/status/";
    private $requestTimeout = 600;
    private $errorList = array();


    function __construct($apiKey, $version = "v1") {
        $this->apiKey = $apiKey;
        $this->ver = "/".$version;
    }

    public function getLastError() {
        return $this->errorList;
    }

    public function GetJobResult($jobID, $callback="") {
        $this->errorList = array();
        $param = $this->hodJobResultBase;
        $param .= $jobID;
        $param .= "?apikey=" . $this->apiKey;
        try {
            $ch = curl_init($param);
            curl_setopt($ch, CURLOPT_HTTPGET, 1);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_TIMEOUT, $this->requestTimeout);

            //execute post
            $strResponse = curl_exec($ch);
           //Get the Error Code returned by Curl.
            $curlErrno = curl_errno($ch);
            if ($curlErrno) {
                $curlError = curl_error($ch);
                if (self::LOG_ERROR)
                    error_log("HODClient Error: " . $curlError);
                $error = new HODErrorObj($curlErrno, $curlError);
                array_push($this->errorList, $error);
                if ($callback == "")
                    return null;
                else
                    $callback(null);
            } else {
                curl_close($ch);
                $result = $this->_parseHODResponse($strResponse);
                if ($callback == "") {
                    return $result;
                } else
                    $callback($result);
            }
        } catch (Exception $e) {
            if (self::LOG_ERROR)
                error_log("HODClient Exception: " . $e->getMessage());
            $error = new HODErrorObj($e->getCode(), $e->getMessage());
            array_push($this->errorList, $error);
            if ($callback == "")
                return null;
            else
                $callback(null);
        }
    }
    public function GetJobStatus($jobID, $callback="") {
        $this->errorList = array();
        $param = $this->hodJobStatusBase;
        $param .= $jobID;
        $param .= "?apikey=" . $this->apiKey;
        try {
            $ch = curl_init($param);
            curl_setopt($ch, CURLOPT_HTTPGET, 1);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_TIMEOUT, $this->requestTimeout);

            //execute post
            $strResponse = curl_exec($ch);
            //Get the Error Code returned by Curl.
            $curlErrno = curl_errno($ch);
            if ($curlErrno) {
                $curlError = curl_error($ch);
                if (self::LOG_ERROR)
                    error_log("HODClient Error: " . $curlError);
                $error = new HODErrorObj($curlErrno, $curlError);
                array_push($this->errorList, $error);
                if ($callback == "")
                    return null;
                else
                    $callback(null);
            }
            else {
                curl_close($ch);
                $result = $this->_parseHODResponse($strResponse);
                if ($callback == "") {
                    return $result;
                } else
                    $callback($result);
            }
        } catch (Exception $e) {
            if (self::LOG_ERROR)
                error_log("HODClient Exception: " . $e->getMessage());
            $error = new HODErrorObj($e->getCode(), $e->getMessage());
            array_push($this->errorList, $error);
            if ($callback == "")
                return null;
            else
                $callback(null);
        }
    }

    public function GetRequest($paramArr, $hodApp, $mode=REQ_MODE::ASYNC, $callback="")
    {
        $this->errorList = array();
        $app = "";
        if ($mode == "sync") {
            $app .= $this->hodAppBase . "sync/" . $hodApp . $this->ver;
        } else {
            $app .= $this->hodAppBase . "async/" . $hodApp . $this->ver;
        }
        $param = $app;
        $param .= "?apikey=" . $this->apiKey;
        //
        foreach($paramArr as $key => $value) {
            if ($key == "file") {
                if (self::LOG_ERROR)
                    error_log("HODClient Error: File upload must be used with PostRequest method.");
                $error = new HODErrorObj(ErrorCode::INVALID_PARAM, "File upload must be used with PostRequest method.");
                array_push($this->errorList, $error);
                if ($callback == "")
                    return null;
                else {
                    $callback(null);
                    return;
                }
            }
            $type = gettype($value);
            if ($type == "array") {
                foreach($value as $kk => $vv) {
                    $param .= "&" . $key . "=" . rawurlencode($vv);
                }
            } else {
                $param .= "&". $key."=" . rawurlencode($value);
            }
        }
        try {
            $ch = curl_init($param);
            curl_setopt($ch, CURLOPT_HTTPGET, 1);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_TIMEOUT, $this->requestTimeout);

            //execute post
            $strResponse = curl_exec($ch);
            //Get the Error Code returned by Curl.
            $curlErrno = curl_errno($ch);
            if ($curlErrno) {
                $curlError = curl_error($ch);
                if (self::LOG_ERROR)
                    error_log("HODClient Error: " . $curlError);
                $error = new HODErrorObj($curlErrno, $curlError);
                array_push($this->errorList, $error);
                if ($callback == "")
                    return null;
                else
                    $callback(null);
            } else {
                curl_close($ch);
                if ($mode == "async")
                    $result = $this->_parseJobID($strResponse);
                else
                    $result = $this->_parseHODResponse($strResponse);

                if ($callback == "")
                    return $result;
                else
                    $callback($result);
            }
        } catch (Exception $e) {
            if (self::LOG_ERROR)
                error_log("HODClient Exception: " . $e->getMessage());
            $error = new HODErrorObj($e->getCode(), $e->getMessage());
            array_push($this->errorList, $error);
            if ($callback == "")
                return null;
            else
                $callback(null);
        }
    }

    public function PostRequest($paramArr, $hodApp, $mode=REQ_MODE::ASYNC, $callback="")
    {
        $this->errorList = array();
        $app = "";
        if ($mode == "sync") {
            $app .= $this->hodAppBase . "sync/" . $hodApp . $this->ver;
        } else {
            $app .= $this->hodAppBase . "async/" . $hodApp . $this->ver;
        }
        $mime_boundary = md5(time());
        $param = $this->packData($paramArr, $mime_boundary);
        if ($param == null)
        {
            if ($callback == "")
                return null;
            else {
                $callback(null);
                return;
            }
        }
        $header = array('Content-Type: multipart/form-data; boundary=' . $mime_boundary);
        try {
            $ch = curl_init($app);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
            curl_setopt($ch, CURLOPT_POST, TRUE);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_TIMEOUT, $this->requestTimeout);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $param);

            //execute post
            $strResponse = curl_exec($ch);
            //Get the Error Code returned by Curl.
            $curlErrno = curl_errno($ch);
            if ($curlErrno) {
                $curlError = curl_error($ch);
                if (self::LOG_ERROR)
                    error_log("HODClient Error: " . $curlError);
                $error = new HODErrorObj($curlErrno, $curlError);
                array_push($this->errorList, $error);
                if ($callback == "")
                    return null;
                else
                    $callback(null);
            }
            else {
                curl_close($ch);
                if ($mode == "async")
                    $result = $this->_parseJobID($strResponse);
                else
                    $result = $this->_parseHODResponse($strResponse);

                if ($callback == "")
                    return $result;
                else
                    $callback($result);
            }
        } catch (Exception $e) {
            if (self::LOG_ERROR)
                error_log("HODClient Exception: " . $e->getMessage());
            $error = new HODErrorObj($e->getCode(), $e->getMessage());
            array_push($this->errorList, $error);
            if ($callback == "")
                return null;
            else
                $callback(null);
        }
    }
    private function packData($paramArr, $mime_boundary) {
        $eol = "\r\n";
        $boundary = '--' . $mime_boundary;
        $data = $boundary . $eol;
        $data .= 'Content-Disposition: form-data; name="apikey"' . $eol . $eol;
        $data .= $this->apiKey . $eol;

        foreach($paramArr as $key => $value) {
            $type = gettype($value);
            if ($type == "array") {
                foreach($value as $kk => $vv) {
                    if ($key == "file") {
                        $fileName = $vv;
                        //$fileSize = filesize($fileName);
                        if(!file_exists($fileName)) {
                            if (self::LOG_ERROR)
                                error_log("HODClient Error: " . $fileName . " does not exist.");
                            $err = new HODErrorObj(UPLOAD_ERR_NO_FILE, "File not found");
                            array_push($this->errorList, $err);
                            return null;
                        }
                        $mime = mime_content_type($fileName);

                        $data .= $boundary . $eol;
                        $data .= 'Content-Disposition: form-data; name="'.$key.'"; filename="'.$value.'"' . $eol;
                        $data .= 'Content-Type: '. $mime . $eol . $eol;

                        //$handle = fopen($fileName, "rb");
                        //$contents = fread($handle, $fileSize);
                        $contents = file_get_contents($fileName);
                        $data .= $contents . $eol;
                        //fclose($handle);
                    } else {
                        $data .= $boundary . $eol;
                        $data .= 'Content-Disposition: form-data; name="'.$key.'"' . $eol . $eol;
                        $data .= $vv . $eol;
                    }
                }
            } else {
                if ($key == "file") {
                    $fileName = $value;
                    //$fileSize = filesize($fileName);
                    if(!file_exists($fileName)) {
                        if (self::LOG_ERROR)
                            error_log("HODClient Error: " . $fileName . " does not exist.");
                        $err = new HODErrorObj(UPLOAD_ERR_NO_FILE, "File not found");
                        array_push($this->errorList, $err);
                        return null;
                    }
                    $mime = mime_content_type($fileName);

                    $data .= $boundary . $eol;
                    $data .= 'Content-Disposition: form-data; name="'.$key.'"; filename="'.$value.'"' . $eol;
                    $data .= 'Content-Type: '. $mime . $eol . $eol;

                    //$handle = fopen($fileName, "rb");
                    //$contents = fread($handle, $fileSize);
                    $contents = file_get_contents($fileName);
                    $data .= $contents . $eol;
                    //fclose($handle);
                } else {
                    $data .= $boundary . $eol;
                    $data .= 'Content-Disposition: form-data; name="'.$key.'"' . $eol . $eol;
                    $data .= $value . $eol;
                }
            }
        }
        $data .= $boundary . $eol;
        return $data;
    }
    private function _parseJobID($jsonStr)
    {
        $this->errorList = array();
        $respObj = json_decode($jsonStr);
        if (isset($respObj->error)) {
            $err = new HODErrorObj($respObj->error, $respObj->reason);
            array_push($this->errorList, $err);
            return null;
        } else {
            return $respObj->jobID;
        }
    }
    private function _parseHODResponse($jsonStr)
    {
        $this->errorList = array();
        $respObj = json_decode($jsonStr);
        if (isset($respObj->actions)) {
            $action = $respObj->actions[0];
            if ($action->status == "failed") {
                //parse error
                $errors = $action->errors;
                foreach ($errors as $ke => $ve) {
                    $err = new HODErrorObj($ve->error, $ve->reason, $ve->detail);
                    array_push($this->errorList, $err);
                }
                return null;
            } else if ($action->status == "queued") {
                $err = new HODErrorObj(ErrorCode::QUEUED, "Task is queued", "", $respObj->jobID);
                array_push($this->errorList, $err);
                return null;
            } else if ($action->status == "in progress") {
                $err = new HODErrorObj(ErrorCode::IN_PROGRESS, "Task is in progress", "", $respObj->jobID);
                array_push($this->errorList, $err);
                return null;
            } else if ($action->status == "finished") {
                return $action->result;
            } else {
                $err = new HODErrorObj(ErrorCode::INVALID_HOD_RESPONSE, "unknown error");
                array_push($this->errorList, $err);
                return null;
            }
        } else {
            if (isset($respObj->error)) {
                $err = new HODErrorObj($respObj->error, $respObj->reason);
                array_push($this->errorList, $err);
                return null;
            } else {
                return $respObj;
            }
        }
        // { "error": 7000, "reason": "Request took too long" }
    }
}
interface HODApps
{
    const RECOGNIZE_SPEECH = "recognizespeech";

    const CANCEL_CONNECTOR_SCHEDULE = "cancelconnectorschedule";
    const CONNECTOR_HISTORY = "connectorhistory";
    const CONNECTOR_STATUS = "connectorstatus";
    const CREATE_CONNECTOR = "createconnector";
    const DELETE_CONNECTOR = "deleteconnector";
    const RETRIEVE_CONFIG = "retrieveconfig";
    const START_CONNECTOR = "startconnector";
    const STOP_CONNECTOR = "stopconnector";
    const UPDATE_CONNECTOR = "updateconnector";

    const EXPAND_CONTAINER = "expandcontainer";
    const STORE_OBJECT = "storeobject";
    const EXTRACT_TEXT = "extracttext";
    const VIEW_DOCUMENT = "viewdocument";

    const OCR_DOCUMENT = "ocrdocument";
    const RECOGNIZE_BARCODES = "recognizebarcodes";
    const DETECT_FACES = "detectfaces";
    const RECOGNIZE_IMAGES = "recognizeimages";

    const GET_COMMON_NEIGHBORS = "getcommonneighbors";
    const GET_NEIGHBORS = "getneighbors";
    const GET_NODES = "getnodes";
    const GET_SHORTEST_PATH = "getshortestpath";
    const GET_SUB_GRAPH = "getsubgraph";
    const SUGGEST_LINKS = "suggestlinks";
    const SUMMARIZE_GRAPH = "summarizegraph";

    const CREATE_CLASSIFICATION_OBJECTS = "createclassificationobjects";
    const CREATE_POLICY_OBJECTS = "createpolicyobjects";
    const DELETE_CLASSIFICATION_OBJECTS = "deleteclassificationobjects";
    const DELETE_POLICY_OBJECTS = "deletepolicyobjects";
    const RETRIEVE_CLASSIFICATION_OBJECTS = "retrieveclassificationobjects";
    const RETRIEVE_POLICY_OBJECTS = "retrievepolicyobjects";
    const UPDATE_CLASSIFICATION_OBJECTS = "updateclassificationobjects";
    const UPDATE_POLICY_OBJECTS = "updatepolicyobjects";

    const PREDICT = "predict";
    const RECOMMEND = "recommend";
    const TRAIN_PREDICTOR = "trainpredictor";

    const CREATE_QUERY_PROFILE = "createqueryprofile";
    const DELETE_QUERY_PROFILE = "deletequeryprofile";
    const RETRIEVE_QUERY_PROFILE = "retrievequeryprofile";
    const UPDATE_QUERY_PROFILE = "updatequeryprofile";

    const FIND_RELATED_CONCEPTS = "findrelatedconcepts";
    const FIND_SIMILAR = "findsimilar";
    const GET_CONTENT = "getcontent";
    const GET_PARAMETRIC_VALUES = "getparametricvalues";
    const QUERY_TEXT_INDEX = "querytextindex";
    const RETRIEVE_INDEX_FIELDS = "retrieveindexfields";

    const AUTO_COMPLETE = "autocomplete";
    const CLASSIFY_DOCUMENT = "classifydocument";
    const EXTRACT_CONCEPTS = "extractconcepts";
    const CATEGORIZE_DOCUMENT = "categorizedocument";
    const ENTITY_EXTRACTION = "extractentities";
    const EXPAND_TERMS = "expandterms";
    const HIGHLIGHT_TEXT = "highlighttext";
    const IDENTIFY_LANGUAGE = "identifylanguage";
    const ANALYZE_SENTIMENT = "analyzesentiment";
    const TOKENIZE_TEXT = "tokenizetext";

    const ADD_TO_TEXT_INDEX = "addtotextindex";
    const CREATE_TEXT_INDEX = "createtextindex";
    const DELETE_TEXT_INDEX = "deletetextindex";
    const DELETE_FROM_TEXT_INDEX = "deletefromtextindex";
    const INDEX_STATUS = "indexstatus";
    //const LIST_INDEXES = "listindexes"; REMOVED
    const LIST_RESOURCES = "listresources";
    const RESTORE_TEXT_INDEX = "restoretextindex";
}
?>
