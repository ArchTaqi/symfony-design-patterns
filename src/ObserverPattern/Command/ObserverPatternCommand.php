<?php

namespace App\ObserverPattern\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputInterface;
use App\ObserverPattern\Observer\EmailObserver;
use App\ObserverPattern\Observer\LoggerObserver;
use App\ObserverPattern\Observer\GoogleSyncObserver;
use App\Model\Booking;

/**
 * Class ObserverPatternCommand
 * @package App\ObserverPattern\Command
 */
class ObserverPatternCommand extends ContainerAwareCommand
{
    use ContainerAwareTrait;

    /**
     * Configure the command parameters
     */
    protected function configure()
    {
        $this->setName('project:ObserverPattern')
            ->setDescription('Demo of Symfony Observer Pattern');
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @throws \Exception
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $booking = new Booking();
        $booking->setId(1);
        $booking->setTitle('Booking Has Been Created');
        $booking->setDescription('You have Booked Room 15 Islamabad successfully.');
        $booking->setTimestamp(new \DateTime('now'));

        $bookingProvider = $this->getContainer()->get('app.observer.provider.booking');

        $bookingProvider->attach(new EmailObserver($bookingProvider));
        $bookingProvider->attach(new LoggerObserver($bookingProvider));
        $bookingProvider->attach(new GoogleSyncObserver($bookingProvider));

        $bookingProvider->generate($booking);
    }
}
