<?php
namespace App\PatternVisitor;

class VisiteeA implements Visitable, Describable
{
    /**
     * @return string
     */
    public function __toString(): string
    {
        return 'Hello, I am an A';
    }

    /**
     * @param Visitor $visitor
     * @return string
     */
    public function accept(Visitor $visitor): string
    {
        return $visitor->visitA($this);
    }
}
