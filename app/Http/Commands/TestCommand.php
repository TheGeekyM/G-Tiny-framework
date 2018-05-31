<?php

namespace App\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use App\Traits\BashColors;

class TestCommand extends Command
{
    use BashColors;

    protected function configure()
    {
        $this
            ->setName('command:functionality')
            ->setDescription('Description')
            ->setHelp('Help')
            ->addArgument('name', InputArgument::REQUIRED, 'description');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {

    }
}
