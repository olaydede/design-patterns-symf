<?php
namespace App\Controller;

use App\PatternFactory\ConcreteFactoryA;
use App\PatternFactory\ConcreteFactoryB;
use App\PatternFactory\SubjectSorter;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class FactoryController extends AbstractController
{
    #[Route("/factory", name:"factory")]
    public function indexAction(Request $request)
    {
        // Create Factories
        $factoryA = new ConcreteFactoryA();
        $factoryB = new ConcreteFactoryB();
        // Create Sorters
        $sorterA = new SubjectSorter($factoryA);
        $sorterB = new SubjectSorter($factoryB);
        // Render
        return $this->render(
            "factory.html.twig",
            [
                'sorterA' => $sorterA,
                'sorterB' => $sorterB
            ]
        );
    }
}