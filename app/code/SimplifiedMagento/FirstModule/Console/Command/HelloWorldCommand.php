<?php

namespace SimplifiedMagento\FirstModule\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;


class HelloWorldCommand extends Command
{

    protected function configure()
    {
        $this->setName('training:hello_world')
            ->setDescription('Prints hello world to screen.')
            ->setAliases(array('hw'));
        $this->setDefinition([
            new InputArgument("name", InputArgument::OPTIONAL, 'the name of the person', null, null)
        ]);
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Hello World! ' . $input->getArgument("name"));
    }
}
