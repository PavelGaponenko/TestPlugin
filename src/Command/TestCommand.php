<?php

namespace Pavelgaponenko\TestPlugin\Command;

use Composer\Command\BaseCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class TestCommand extends BaseCommand
{
    protected function configure(): void
    {
        $this->setName('custom-plugin-command');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln('Executing');
        return 0;
    }
}