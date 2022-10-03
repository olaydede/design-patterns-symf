<?php
namespace App\PatternVisitor;

class SecondConcreteVisitor implements Visitor
{
    /**
     * @param Visitable $a
     * @return string
     */
    public function visitA(Visitable $a): string
    {
        return 'I am applying second action on ' . get_class($a) . ': ' . $a;
    }

    /**
     * @param Visitable $b
     * @return string
     */
    public function visitB(Visitable $b): string
    {
        return 'I am applying second action on ' . get_class($b) . ': ' . $b;
    }
}
