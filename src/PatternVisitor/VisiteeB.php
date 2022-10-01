<?php
namespace App\PatternVisitor;

class VisiteeB implements Visitable, Describable
{
    public function __toString()
    {
        return 'Hello, I am a B';
    }

    public function accept(Visitor $visitor)
    {
        return $visitor->visitB($this);
    }

}