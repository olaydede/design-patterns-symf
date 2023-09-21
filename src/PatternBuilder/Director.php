<?php
namespace App\PatternBuilder;

class Director
{
    private Builder $builder;

    public function __construct(Builder $builder)
    {
        $this->builder = $builder;
    }

    public function produceMinimalProduct()
    {
        $this->builder->producePartA();
    }

    public function produceLightProduct()
    {
        $this->builder->producePartA()->producePartC();
    }

    public function producePremiumProduct()
    {
        $this->builder->producePartA()->producePartB()->producePartC();
    }
}