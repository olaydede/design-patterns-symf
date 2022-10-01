<?php
namespace App\PatternAbstractFactory;

class ConcreteElementBA implements AbstractElementB
{
    public function recordVideo()
    {
        return 'I am a ' . get_class($this) . ' recording audio in a certain way';
    }

    public function outputVideo()
    {
        return 'I am a ' . get_class($this) . ' outputting audio in a certain way';
    }
}