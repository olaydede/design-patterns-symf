<?php
namespace App\PatternAbstractFactory;

class ConcreteElementAB implements AbstractElementA
{
    public function recordAudio()
    {
        return 'I am a ' . get_class($this) . ' recording audio in a different way';
    }

    public function outputAudio()
    {
        return 'I am a ' . get_class($this) . ' outputting audio in a different way';
    }

}