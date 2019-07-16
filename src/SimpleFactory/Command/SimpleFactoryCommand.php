<?php

namespace App\SimpleFactory\Command;

use App\SimpleFactory\Factory\ProductFactory;
use App\SimpleFactory\Product\ProductInterface;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputInterface;

/**
 * Class ObserverPatternCommand
 * @package App\SimpleFactory\Command
 */
class SimpleFactoryCommand extends ContainerAwareCommand
{
    use ContainerAwareTrait;

    /**
     * Configure the command parameters
     */
    protected function configure()
    {
        $this->setName('project:SimpleFactory')
            ->setDescription('Demo of Symfony Simple Factory Pattern');
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @throws \Exception
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        /** @var ProductInterface[] $products */
        $products = [];
        $factory = new ProductFactory();

        $products[] = $factory->create('simple');
        $products[] = $factory->create('virtual');

        foreach ($products as $product) {
            echo $product->getName() . " with price=" . $product->getPrice() ."\xA";
        }
    }
}
