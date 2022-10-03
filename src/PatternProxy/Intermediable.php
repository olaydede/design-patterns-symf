<?php
namespace App\PatternProxy;

interface Intermediable
{
    public function prepare();
    public function execute();
    public function clean();
}