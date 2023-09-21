<?php
namespace App\PatternBuilder;

interface Builder
{
    public function producePartA(): Builder;
    public function producePartB(): Builder;
    public function producePartC(): Builder;

    public function getProduct(): Buildable;
    public function reset(): void;
}