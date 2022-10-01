<?php
namespace App\PatternAbstractFactory;

class ConcreteElementAA implements AbstractElementA
{
    public function recordAudio()
    {
        return 'I am a ' . get_class($this) . ' recording audio in a certain way';
    }

    public function outputAudio()
    {
        return 'I am a ' . get_class($this) . ' outputting audio in a certain way';
    }

}