<?php

namespace App\SimpleFactory\Command;

use App\FactoryMethod\Factory\NYPizzaStore;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputInterface;

/**
 * Class ObserverPatternCommand
 * @package App\SimpleFactory\Command
 */
class FactoryMethodCommand extends ContainerAwareCommand
{
    use ContainerAwareTrait;

    /**
     * Configure the command parameters
     */
    protected function configure()
    {
        $this->setName('project:FactoryMethod')
            ->setDescription('Demo of Symfony Factory Method Pattern');
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @throws \Exception
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $store = new NYPizzaStore();
        $store->order('chees');
    }
}
