<?php

namespace Tests\App\Conversor;

class ConversorTest extends \PHPUnit\Framework\TestCase{
    private $conversor;

    protected function setUp(): void
    {
        $this->conversor = new \App\Conversor\AlgorismToNumber;
    }

    //========================Helpers================

    public function test_breakDownNumbers_10()
    {
        $ret = $this->conversor->breakDownNumbers(10);

        $this->assertEquals([10], $ret);
    }

}