<?php

namespace Rodrigoceacero\CineTestBundle;

use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class RodrigoceaceroCineTestBundle extends AbstractBundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}