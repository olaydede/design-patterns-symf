<?php
namespace App\Twig;

use JetBrains\PhpStorm\ArrayShape;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class ClassTwigExtension extends AbstractExtension
{
    /**
     * @return TwigFunction[]
     */
    #[ArrayShape(['getClass' => "\Twig\TwigFunction"])] public function getFunctions(): array
    {
        return [
            'getClass' => new TwigFunction('getClass', [$this, 'getClass'])
        ];
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return 'class_twig_extension';
    }

    /**
     * @param $object
     * @return string
     */
    public function getClass($object): string
    {
        return get_class($object);
    }
}
