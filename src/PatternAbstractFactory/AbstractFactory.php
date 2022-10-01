<?php
namespace App\PatternAbstractFactory;

interface AbstractFactory
{
    public function createA(): AbstractElementA;
    public function createB(): AbstractElementB;
}