<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Entity\AreaCalculator;

class AreaCalculatorTest extends TestCase
{
    public function testAireTriangle(): void
    {
        $longueurTriangle = 7;
        $largeurTriangle = 5;
        $triangleObjet = new AreaCalculator;
        $aireTriangle = $triangleObjet->aireTriangle($longueurTriangle, $largeurTriangle, null);
        $this->assertEquals(17.5, $aireTriangle);
    }

    public function testAireParallelogramme():void
    {
        $longueurParallelogramme = 6;
        $largeurParallelogramme = 6;
        $parallelogrammeObjet = new AreaCalculator;
        $aireParallelogramme = $parallelogrammeObjet->aireParallelogramme($longueurParallelogramme, $largeurParallelogramme, null);
        $this->assertEquals(36, $aireParallelogramme);
    }

    public function testAireDisqueTest():void
    {
        $rayonDisque = 5;
        $disqueObjet = new AreaCalculator;
        $aireDisque = $disqueObjet->aireDisque($rayonDisque, null);
        $this->assertEquals(25*pi(), $aireDisque);
    }
}
