<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class OffshoreController extends AbstractController
{
    /**
     * @Route("/offshore", name="offshore")
     * @IsGranted("ROLE_DIRECTOR")
     */
    public function index()
    {
        $template = 'offshore/index.html.twig';
        $args = [];

        return $this->render($template, $args);
    }
}
