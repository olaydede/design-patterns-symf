<?php
namespace App\Controller;

use App\PatternAbstractFactory\ConcreteElementGenerator;
use App\PatternAbstractFactory\ConcreteFactoryA;
use App\PatternAbstractFactory\ConcreteFactoryB;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class  AbstractFactoryController extends AbstractController
{
    #[Route("/abstract-factory", name:"abstract-factory")]
    public function indexAction(Request $request)
    {
        $generatorOfTypeA = new ConcreteElementGenerator(new ConcreteFactoryA());
        $generatorOfTypeB = new ConcreteElementGenerator(new ConcreteFactoryB());
        return $this->render(
            'abstract-factory.html.twig',
            [
                'generatorA' => $generatorOfTypeA,
                'generatorB' => $generatorOfTypeB
            ]
        );
    }
}