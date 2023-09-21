<?php
namespace App\PatternBuilder;

class ClassicBuilder implements Builder
{
    private Buildable $product;

    public function __construct()
    {
        $this->reset();
    }

    public function producePartA(): Builder
    {
        $this->product->__set('PartA', 'A classic part A for you');
        return $this;
    }

    public function producePartB(): Builder
    {
        $this->product->__set('PartB', 'A classic part B for you');
        return $this;
    }

    public function producePartC(): Builder
    {
        $this->product->__set('PartC', 'A classic part C for you');
        return $this;
    }

    public function getProduct(): Buildable
    {
        return $this->product;
    }

    public function reset(): void
    {
        $this->product = new ProductTypeA();
    }
}
