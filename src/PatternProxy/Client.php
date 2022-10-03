<?php
namespace App\PatternProxy;

class Client
{
    public function __construct(public Intermediable $service)
    {
        //
    }
}
