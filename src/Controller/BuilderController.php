<?php
namespace App\Controller;

use App\PatternBuilder\ClassicBuilder;
use App\PatternBuilder\Director;
use App\PatternBuilder\ModernBuilder;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BuilderController extends AbstractController
{
    #[Route("/builder", name:"builder")]
    public function indexAction(): Response
    {
        $builders = [
            new ModernBuilder(),
            new ClassicBuilder()
        ];
        $builder = $builders[array_rand($builders)];
        $director = new Director($builder);
        // Build products
        $director->producePremiumProduct();
        $premiumProduct = $builder->getProduct();
        $builder->reset();
        $director->produceLightProduct();
        $lightProduct = $builder->getProduct();
        $builder->reset();
        $director->produceMinimalProduct();
        $minimalProduct = $builder->getProduct();
        $builder->reset();
        // Render
        return $this->render(
            'builder.html.twig',
            [
                'builder' => get_class($builder),
                'premiumProduct' => $premiumProduct,
                'lightProduct' => $lightProduct,
                'minimalProduct' => $minimalProduct
            ]
        );
    }
}
