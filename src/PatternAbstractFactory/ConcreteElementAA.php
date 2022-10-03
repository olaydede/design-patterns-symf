<?php
namespace App\PatternAbstractFactory;

class ConcreteElementAA implements AbstractElementA
{
    /**
     * @return string
     */
    public function recordAudio(): string
    {
        return 'I am a ' . get_class($this) . ' recording audio in a certain way';
    }

    /**
     * @return string
     */
    public function outputAudio(): string
    {
        return 'I am a ' . get_class($this) . ' outputting audio in a certain way';
    }
}
