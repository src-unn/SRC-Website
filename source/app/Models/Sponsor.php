<?php
/**
 * Project: srcng.com
 * Author:  Chukwuemeka Nwobodo (jcnwobodo@gmail.com)
 * Date:    10/1/2016
 * Time:    2:30 AM
 **/

namespace App\Models;

use App\Models\Traits\SoftDeletes;

/**
 * Class Sponsor
 * @package App\Models
 */
class Sponsor extends Model
{
    use SoftDeletes;

    /**
     *
     */
    protected function validator()
    {
        // TODO: Implement validator() method.
    }
}