<?php
namespace App\PatternAbstractFactory;

class ConcreteElementBB implements AbstractElementB
{
    /**
     * @return string
     */
    public function recordVideo(): string
    {
        return 'I am a ' . get_class($this) . ' recording audio in a different way';
    }

    /**
     * @return string
     */
    public function outputVideo(): string
    {
        return 'I am a ' . get_class($this) . ' outputting audio in a different way';
    }
}
