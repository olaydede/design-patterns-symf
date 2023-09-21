<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 *
 */
class PagesController extends AbstractController
{
    /**
     * @return Response
     */
    #[Route("/", name:'home')]
    public function indexAction(): Response
    {
        return $this->render("index.html.twig");
    }
}
