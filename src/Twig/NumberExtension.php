<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class NumberExtension extends AbstractExtension {

    public function getFilters() {
        
        return [
            new TwigFilter('multiply', [$this, 'multiply']),
        ];
    }

    public function multiply($number, $multiplicator) {
        
        return $number * $multiplicator;
    }
}