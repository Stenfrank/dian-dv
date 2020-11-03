<?php

namespace Stenfrank\DianDV;

/**
 * Dian dv
 */
class DV
{
    /**
     * Multiplier
     * @var array
     */
    public $multiplier = [
        1 => 3,
        2 => 7,
        3 => 13,
        4 => 17,
        5 => 19,
        6 => 23,
        7 => 29,
        8 => 37,
        9 => 41,
        10 => 43,
        11 => 47,
        12 => 53,
        13 => 59,
        14 => 67,
        15 => 71,
    ];
    
    /**
     * NIT
     * @var int
     */
    private $nit;
    
    /**
     * Nit array
     * @var array
     */
    private $nitArray;
    
    /**
     * Length
     * @var int
     */
    private $length;
    
    /**
     * Construct
     */
    public function __construct(int $nit)
    {
        $this->nit = $nit;
        $this->nitArray = str_split($this->nit);
        $this->length = count($this->nitArray);
    }
    
    /**
     * Get dv
     * @return string
     */
    public function getDV()
    {
        $sum = 0;
        $mod = null;
        
        foreach ($this->nitArray as $key => $value) $sum += ($value * $this->multiplier[($this->length - $key)]);
        
        if (($mod = ($sum % 11)) > 1) return (11 - $mod);
        
        return (string) $mod;
    }
}
