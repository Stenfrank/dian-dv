<?php

namespace Stenfrank\DianDV\Facades;

use Stenfrank\DianDV\DV as DianDV;

/**
 * DV
 */
class DV
{
    /**
     * Get dv
     * @param  int $nit
     * @return int
     */
    public static function getDv(int $nit)
    {
        return self::getInstance($nit)
            ->getDV();
    }
    
    /**
     * Get instance
     * @param  int $nit
     * @return \Stenfrank\DianDV\DV
     */
    public static function getInstance(int $nit)
    {
        return new DianDV($nit);
    }
    
    /**
     * Check
     * @param  mixed  $nit
     * @param  string $delimiter
     * @return boolean
     */
    public static function check($nit, $delimiter = null)
    {
        // Remove white space
        $nit = trim($nit);
        
        switch ($delimiter) {
            case null:
                $dv = (int) substr($nit, -1);
                $nit = (int) substr($nit, 0, -1);
                break;
            default:
                $explode = explode($delimiter, $nit);
                $dv = (int) $explode[1];
                $nit = (int) $explode[0];
                break;
        }
        
        $dvCheck = self::getInstance($nit)
            ->getDV();
        
        return ($dvCheck == $dv);
    }
}
