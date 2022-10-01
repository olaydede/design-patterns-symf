<?php
namespace App\PatternVisitor;

interface Visitor
{
    public function visitA(Visitable $a);
    public function visitB(Visitable $b);
}