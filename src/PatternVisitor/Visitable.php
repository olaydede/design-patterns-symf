<?php
namespace App\PatternVisitor;

interface Visitable
{
    public function accept(Visitor $visitor);
}