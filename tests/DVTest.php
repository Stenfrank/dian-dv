<?php

namespace Stenfrank\Tests;

use Stenfrank\DianDV\Facades\DV;
use Stenfrank\DianDV\DV as DianDV;

/**
 * DV test.
 */
class DVTest extends TestCase
{
    /** @test */
    public function get_digit()
    {
        $dv = new DianDV(901210113);
        
        $this->assertSame(3, $dv->getDV());
    }
    
    /** @test */
    public function get_digit_facade()
    {
        $this->assertSame(3, DV::getDV(901210113));
    }
    
    /** @test */
    public function check()
    {
        $this->assertSame(true, DV::check('9012101133'));
        $this->assertSame(true, DV::check('901210113-3'));
        $this->assertSame(false, DV::check('9012101138'));
        $this->assertSame(false, DV::check('901210113-8'));
        $this->assertSame(true, DV::check(' 9012101133 '));
        $this->assertSame(true, DV::check('901210113/3', '/'));
        $this->assertSame(false, DV::check('901210113*8', '*'));
    }
    
    /**
     * @test
     * @expectedException \PHPUnit\Framework\Error\Notice
    */
    public function only_integers()
    {
        DV::getDV('901210113-3');
    }
    
    /**
     * @test
     * @expectedException \PHPUnit\Framework\Error\Notice
     */
    public function check_error()
    {
        $this->assertSame(false, DV::check('901210113*8', '-'));
    }
}
