<?php
/**
 * Project: academy.zeesaa.com
 * Author:  Chukwuemeka Nwobodo (jcnwobodo@gmail.com)
 * Date:    9/19/2016
 * Time:    4:51 AM
 **/
namespace App\Models\Traits;

trait NonValidating
{
    public static function validator() { return null; }
}