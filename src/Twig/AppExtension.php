<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class AppExtension extends AbstractExtension {

    public function getFilters() {
        
        return [
            new TwigFilter('double', [$this, 'double']),
            new TwigFilter('divide', [$this, 'divide']),
        ];
    }

    public function double($number) {
        
        return $number * 2;
    }

    public function divide($number) {

        return $number / 2;
    }
}