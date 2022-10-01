<?php
namespace App\PatternVisitor;

class SecondConcreteVisitor implements Visitor
{
    public function visitA(Visitable $a)
    {
        return 'I am applying second action on ' . get_class($a) . ': ' . $a;
    }

    public function visitB(Visitable $b)
    {
        return 'I am applying second action on ' . get_class($b) . ': ' . $b;
    }

}