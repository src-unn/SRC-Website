<?php
/**
 * Project: srcng.com
 * Author:  Chukwuemeka Nwobodo (jcnwobodo@gmail.com)
 * Date:    10/1/2016
 * Time:    3:08 AM
 **/

namespace App\Models\Traits;

/**
 * Class NonValidating
 * @package App\Models\Traits
 */
trait NonValidating
{
    /**
     * @return null
     */
    protected function validator()
    {
        return null;
    }
}