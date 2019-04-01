<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class SalesController extends AbstractController
{
    /**
     * @Route("/sales", name="sales")
     * @IsGranted("ROLE_CLERK")
     */
    public function index()
    {
        $template = 'sales/index.html.twig';
        $args = [];

        return $this->render($template,$args);
    }
}
