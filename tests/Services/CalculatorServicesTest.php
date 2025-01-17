<?php

namespace App\Tests\Services;

use App\Services\CalculatorServices;
use PHPUnit\Framework\TestCase;

class CalculatorServicesTest extends TestCase
{

    public function testAdd():void
    {
        $calcul= new CalculatorServices();
        $this->assertEquals(3, $calcul->add(1,2));

    }
}
