<?php
namespace App\PatternFactory;

class SubjectA implements AbstractSubject
{
    /**
     * @return string
     */
    public function execute(): string
    {
        return get_class($this);
    }
}
