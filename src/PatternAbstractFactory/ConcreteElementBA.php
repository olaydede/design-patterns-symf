<?php
namespace App\PatternAbstractFactory;

class ConcreteElementBA implements AbstractElementB
{
    /**
     * @return string
     */
    public function recordVideo(): string
    {
        return 'I am a ' . get_class($this) . ' recording audio in a certain way';
    }

    /**
     * @return string
     */
    public function outputVideo(): string
    {
        return 'I am a ' . get_class($this) . ' outputting audio in a certain way';
    }
}
