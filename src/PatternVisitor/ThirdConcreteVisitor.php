<?php
namespace App\PatternVisitor;

class ThirdConcreteVisitor implements Visitor
{
    /**
     * @param Visitable $a
     * @return string
     */
    public function visitA(Visitable $a): string
    {
        return 'I am the latest addition and I perform action X on ' . get_class($a) . ' objects.';
    }

    /**
     * @param Visitable $b
     * @return string
     */
    public function visitB(Visitable $b): string
    {
        return 'I am the latest addition and I perform action X on ' . get_class($b) . ' objects.';
    }
}
