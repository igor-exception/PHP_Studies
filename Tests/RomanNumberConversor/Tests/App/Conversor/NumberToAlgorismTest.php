<?php

namespace Tests\App\Conversor;

class NumberToAlgorismTest extends \PHPUnit\Framework\TestCase{

    private $conversor;

    protected function setUp(): void
    {
        $this->conversor = new \App\Conversor\numberToAlgorism;
    }

    public function test_convert_10_to_X()
    {
        $ret = $this->conversor->convertNumeralToRoman(10);

        $this->assertEquals('X', $ret);
    }

    public function test_convert_50_to_L()
    {
        $ret = $this->conversor->convertNumeralToRoman(50);

        $this->assertEquals('L', $ret);
    }

    public function test_convert_null_to_false()
    {
        $ret = $this->conversor->convertNumeralToRoman(null);

        $this->assertFalse($ret);
    }

    public function test_convert_asd_to_false()
    {
        $ret = $this->conversor->convertNumeralToRoman('asd');

        $this->assertFalse($ret);
    }

    public function test_convert_10asd_to_false()
    {
        $ret = $this->conversor->convertNumeralToRoman('10asd');

        $this->assertFalse($ret);
    }

    public function test_convert_2_to_II()
    {
        $ret = $this->conversor->convertNumeralToRoman(2);

        $this->assertEquals('II', $ret);
    }

    public function test_convert_3_to_III()
    {
        $ret = $this->conversor->convertNumeralToRoman(3);

        $this->assertEquals('III', $ret);
    }

    public function test_convert_4_to_IV()
    {
        $ret = $this->conversor->convertNumeralToRoman(4);

        $this->assertEquals('IV', $ret);
    }

    public function test_convert_5_to_V()
    {
        $ret = $this->conversor->convertNumeralToRoman(5);

        $this->assertEquals('V', $ret);
    }

    public function test_convert_6_to_VI()
    {
        $ret = $this->conversor->convertNumeralToRoman(6);

        $this->assertEquals('VI', $ret);
    }

    public function test_convert_8_to_VIII()
    {
        $ret = $this->conversor->convertNumeralToRoman(8);

        $this->assertEquals('VIII', $ret);
    }

    public function test_convert_9_to_IX()
    {
        $ret = $this->conversor->convertNumeralToRoman(9);

        $this->assertEquals('IX', $ret);
    }

    public function test_convert_11_to_XI()
    {
        $ret = $this->conversor->convertNumeralToRoman(11);

        $this->assertEquals('XI', $ret);
    }

    public function test_convert_13_to_XIII()
    {
        $ret = $this->conversor->convertNumeralToRoman(13);

        $this->assertEquals('XIII', $ret);
    }

    public function test_convert_14_to_XIV()
    {
        $ret = $this->conversor->convertNumeralToRoman(14);

        $this->assertEquals('XIV', $ret);
    }

    public function test_convert_15_to_XV()
    {
        $ret = $this->conversor->convertNumeralToRoman(15);

        $this->assertEquals('XV', $ret);
    }

    public function test_convert_18_to_XV()
    {
        $ret = $this->conversor->convertNumeralToRoman(18);

        $this->assertEquals('XVIII', $ret);
    }

    public function test_convert_19_to_XIX()
    {
        $ret = $this->conversor->convertNumeralToRoman(19);

        $this->assertEquals('XIX', $ret);
    }

    public function test_convert_20_to_XX()
    {
        $ret = $this->conversor->convertNumeralToRoman(20);

        $this->assertEquals('XX', $ret);
    }

    public function test_convert_29_to_XXIX()
    {
        $ret = $this->conversor->convertNumeralToRoman(29);

        $this->assertEquals('XXIX', $ret);
    }

    public function test_convert_99_to_XCIX()
    {
        $ret = $this->conversor->convertNumeralToRoman(99);

        $this->assertEquals('XCIX', $ret);
    }

    public function test_convert_blank_to_false()
    {
        $ret = $this->conversor->convertNumeralToRoman(' ');

        $this->assertFalse($ret);
    }

    /*
    public function test_convert_3999_to_XCIX()
    {
        $ret = $this->conversor->convertNumeralToRoman(3999);

        $this->assertEquals('MMMCMXCIX', $ret);
    }
    */

    public function test_convert_1999_to_MCMXCIX()
    {
        $ret = $this->conversor->convertNumeralToRoman(1999);

        $this->assertEquals('MCMXCIX', $ret);
    }

    public function test_convert_2000_to_MM()
    {
        $ret = $this->conversor->convertNumeralToRoman(2000);

        $this->assertEquals('MM', $ret);
    }

    public function test_convert_3999_to_MMMCMXCIX()
    {
        $ret = $this->conversor->convertNumeralToRoman(3999);

        $this->assertEquals('MMMCMXCIX', $ret);
    }

    public function test_convert_4000_to_false()
    {
        $ret = $this->conversor->convertNumeralToRoman(4000);

        $this->assertFalse($ret);
    }

    public function test_convert_minus10_to_false()
    {
        $ret = $this->conversor->convertNumeralToRoman(-10);

        $this->assertFalse($ret);
    }
}