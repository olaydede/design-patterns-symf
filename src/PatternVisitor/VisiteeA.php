<?php
namespace App\PatternVisitor;

class VisiteeA implements Visitable, Describable
{
    public function __toString()
    {
        return 'Hello, I am an A';
    }

    public function accept(Visitor $visitor)
    {
        return $visitor->visitA($this);
    }

}