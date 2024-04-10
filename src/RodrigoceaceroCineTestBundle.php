<?php

namespace Rodrigoceacero\CineTestBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class RodrigoceaceroCineTestBundle extends Bundle 
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}