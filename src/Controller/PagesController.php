<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 *
 */
class PagesController extends AbstractController
{
    #[Route("/", name:'home')]
    public function indexAction(Request $request)
    {
        return $this->render("index.html.twig");
    }
}