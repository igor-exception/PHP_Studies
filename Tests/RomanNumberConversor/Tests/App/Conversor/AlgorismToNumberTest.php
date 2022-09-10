<?php

namespace Tests\App\Conversor;

class AlgorismToNumberTest extends \PHPUnit\Framework\TestCase {

    private $conversor;

    protected function setUp(): void
    {
        $this->conversor = new \App\Conversor\AlgorismToNumber;
    }

    public function test_convert_x_lowercase_into_10()
    {
        $ret = $this->conversor->convertRomanToNumeral('x');

        $this->assertEquals(10, $ret);
    }

    public function test_convert_null_into_false()
    {
        $ret = $this->conversor->convertRomanToNumeral(null);

        $this->assertFalse($ret);
    }

    public function test_convert_W_into_false()
    {
        $ret = $this->conversor->convertRomanToNumeral('W');

        $this->assertFalse($ret);
    }

    public function test_convert_X_into_10()
    {
        $ret = $this->conversor->convertRomanToNumeral('X');

        $this->assertEquals(10, $ret);
    }

    public function test_convert_XXX_into_30()
    {
        $ret = $this->conversor->convertRomanToNumeral('XXX');

        $this->assertEquals(30, $ret);
    }

    public function test_convert_XXXX_into_false()
    {
        $ret = $this->conversor->convertRomanToNumeral('XXXX');

        $this->assertFalse($ret);
    }

    public function test_convert_VVV_into_false()
    {
        $ret = $this->conversor->convertRomanToNumeral('VVV');

        $this->assertFalse($ret);
    }

    public function test_convert_VV_into_false()
    {
        $ret = $this->conversor->convertRomanToNumeral('VV');

        $this->assertFalse($ret);
    }

    public function test_convert_XIX_into_19()
    {
        $ret = $this->conversor->convertRomanToNumeral('XIX');

        $this->assertEquals(19, $ret);
    }

    public function test_convert_IXX_into_false()
    {
        $ret = $this->conversor->convertRomanToNumeral('IXX');

        $this->assertFalse($ret);
    }

    public function test_convert_XXXIX_into_39()
    {
        $ret = $this->conversor->convertRomanToNumeral('XXXIX');

        $this->assertEquals(39, $ret);
    }

    public function test_convert_MCMXCIX_into_1999()
    {
        $ret = $this->conversor->convertRomanToNumeral('MCMXCIX');

        $this->assertEquals(1999, $ret);
    }

    public function test_convert_CMXCIX_into_999()
    {
        $ret = $this->conversor->convertRomanToNumeral('CMXCIX');

        $this->assertEquals(999, $ret);
    }

    public function test_convert_MMDCCCXCV_into_2895()
    {
        $ret = $this->conversor->convertRomanToNumeral('MMDCCCXCV');

        $this->assertEquals(2895, $ret);
    }

    public function test_convert_MMDCCCICV_into_false()
    {
        $ret = $this->conversor->convertRomanToNumeral('MMDCCCICV');

        $this->assertFalse($ret);
    }

    public function test_convert_XVII_into_17()
    {
        $ret = $this->conversor->convertRomanToNumeral('XVII');

        $this->assertEquals(17, $ret);
    }

    public function test_convert_MDCCXVII_into_1717()
    {
        $ret = $this->conversor->convertRomanToNumeral('MDCCXVII');

        $this->assertEquals(1717, $ret);
    }

    public function test_convert_MMXXII_into_2022()
    {
        $ret = $this->conversor->convertRomanToNumeral('MMXXII');

        $this->assertEquals(2022, $ret);
    }

    public function test_convert_MMMCMXCIX_into_3999()
    {
        $ret = $this->conversor->convertRomanToNumeral('MMMCMXCIX');

        $this->assertEquals(3999, $ret);
    }
    
    public function test_convert_XIXVI_into_false()
    {
        $ret = $this->conversor->convertRomanToNumeral('XIXVI');

        $this->assertFalse($ret);
    }

    public function test_convert_VX_into_false()
    {
        $ret = $this->conversor->convertRomanToNumeral('VX');

        $this->assertFalse($ret);
    }

    //==============================another methods=======

    public function test_validate_repeated_numbers()
    {
        $this->assertFalse(
            $this->conversor->validateRepeatedNumbers(
                [1, 1, 1, 1]
            )
        );

        $this->assertTrue(
            $this->conversor->validateRepeatedNumbers(
                [1, 1, 1]
            )
        );


        $this->assertTrue(
            $this->conversor->validateRepeatedNumbers(
                [1, 1]
            )
        );

        $this->assertTrue(
            $this->conversor->validateRepeatedNumbers(
                [10, 10, 10, 1, 10]
            )
        );

        $this->assertFalse(
            $this->conversor->validateRepeatedNumbers(
                []
            )
        );
    }
}