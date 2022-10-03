<?php
namespace App\PatternVisitor;

class VisiteeB implements Visitable, Describable
{
    /**
     * @return string
     */
    public function __toString(): string
    {
        return 'Hello, I am a B';
    }

    /**
     * @param Visitor $visitor
     * @return string
     */
    public function accept(Visitor $visitor): string
    {
        return $visitor->visitB($this);
    }
}
