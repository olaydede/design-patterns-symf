<?php
namespace App\PatternBuilder;

interface Buildable
{
    public function __set(string $name, string $value): void;
}