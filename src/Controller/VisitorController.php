<?php
namespace App\Controller;

use App\PatternVisitor\FirstConcreteVisitor;
use App\PatternVisitor\SecondConcreteVisitor;
use App\PatternVisitor\ThirdConcreteVisitor;
use App\PatternVisitor\VisiteeA;
use App\PatternVisitor\VisiteeB;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class VisitorController extends AbstractController
{
    #[Route("/visitor", name:"visitor")]
    public function indexAction(Request $request)
    {
        // Generate visitors
        $visitorA = new FirstConcreteVisitor();
        $visitorB = new SecondConcreteVisitor();
        $visitorC = new ThirdConcreteVisitor();
        // Generate objects
        $visitees = [];
        for ($i = 0; $i < 5; $i++) {
            $visitees[] = new VisiteeA();
            $visitees[] = new VisiteeB();
        }
        // Render
        return $this->render(
            'visitor.html.twig',
            [
                'visitorA' => $visitorA,
                'visitorB' => $visitorB,
                'visitorC' => $visitorC,
                'visitees' => $visitees
            ]
        );
    }
}