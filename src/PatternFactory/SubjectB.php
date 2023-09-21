<?php
namespace App\PatternFactory;

class SubjectB implements AbstractSubject
{
    /**
     * @return string
     */
    public function execute(): string
    {
        return get_class($this);
    }
}
