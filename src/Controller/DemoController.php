<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Model\Booking;

/**
 * Class DemoController
 * @package App\Controller
 * @Route("/", name="_index")
 */
class DemoController extends AbstractController
{
    /**
     * @Route("/observer", name="_observer")
     */
    public function index(Request $request): Response
    {
        $booking = new Booking();
        $booking->setId(1);
        $booking->setTitle('Booking Has Been Created');
        $booking->setDescription('You have Booked Room 15 Islamabad successfully.');
        $booking->setTimestamp(new \DateTime('now'));

        return $this->json($booking, Response::HTTP_OK, []);
    }
}
