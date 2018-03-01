<?php namespace Bantenprov\RasioPusPoltu\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * The RasioPusPoltu facade.
 *
 * @package Bantenprov\RasioPusPoltu
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class RasioPusPoltu extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'rasio-puspoltu';
    }
}
