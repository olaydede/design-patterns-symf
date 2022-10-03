<?php
namespace App\PatternFactory;

class SubjectB implements AbstractSubject
{
    /**
     * @return string
     */
    public function execute(): string
    {
        return 'I am a ' . get_class($this) . ' and I do something similar but I\'m actually different';
    }
}
