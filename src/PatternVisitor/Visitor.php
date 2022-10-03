<?php
namespace App\PatternVisitor;

interface Visitor
{
    public function visitA(Visitable $a): string;
    public function visitB(Visitable $b): string;
}