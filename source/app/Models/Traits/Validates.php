<?php
/**
 * Project: srcng.com
 * Author:  Chukwuemeka Nwobodo (jcnwobodo@gmail.com)
 * Date:    9/19/2016
 * Time:    4:55 AM
 **/

namespace App\Models\Traits;

/**
 * Class Validates
 * @package App\Models\Traits
 */
trait Validates
{
    /**
     * @return mixed
     */
    abstract protected function validator();

    /**
     * @return bool
     */
    public static function validate()
    {
        return true;
    }
}