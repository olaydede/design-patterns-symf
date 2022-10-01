<?php
namespace App\PatternVisitor;

class ThirdConcreteVisitor implements Visitor
{
    public function visitA(Visitable $a)
    {
        return 'I am the latest addition and I perform action X on ' . get_class($a) . ' objects.';
    }

    public function visitB(Visitable $b)
    {
        return 'I am the latest addition and I perform action X on ' . get_class($b) . ' objects.';
    }

}