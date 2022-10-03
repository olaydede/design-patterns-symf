<?php
namespace App\PatternFactory;

class SubjectSorter
{
    /**
     * @param AbstractFactory $factory
     */
    public function __construct(public AbstractFactory $factory)
    {
    }

    /**
     * @return string
     */
    public function sort(): string
    {
        return 'Not actually going to sort but rather showing that I am agnostic of what subject I will be creating: ' .
            $this->factory->differentOperation();
    }
}
