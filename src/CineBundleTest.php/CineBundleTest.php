<?php

namespace App\CineBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class CineBundleTest extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}