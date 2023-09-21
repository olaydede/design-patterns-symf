<?php
namespace App\PatternBuilder;

class ProductTypeA implements Buildable
{
    private array $parts;

    public function __set(string $name, string $value): void
    {
        $this->parts[$name] = $value;
    }

    public function __toString(): string
    {
        return implode("\n", $this->parts);
    }
}
