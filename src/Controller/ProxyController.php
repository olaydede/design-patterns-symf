<?php
namespace App\Controller;

use App\PatternProxy\Client;
use App\PatternProxy\ProxyService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ProxyController extends AbstractController
{
    #[Route('/proxy', name:'proxy')]
    public function indexAction(Request $request)
    {
        $clientUsingProxy = new Client(new ProxyService());
        return $this->render(
            'proxy.html.twig',
            ['client' => $clientUsingProxy]
        );
    }
}