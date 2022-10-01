<?php
namespace App\PatternFactory;

class SubjectA implements AbstractSubject
{
    public function execute()
    {
        return 'I am a ' . get_class($this) . ' and I do something';
    }

}