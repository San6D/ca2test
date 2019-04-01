<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class SalariesController extends AbstractController
{
    /**
     * @Route("/salaries", name="salaries")
     * @IsGranted("ROLE_MANAGER")
     */
    public function index()
    {
        $template = 'salaries/index.html.twig';
        $args = [];

        return $this->render($template, $args);
    }
}
