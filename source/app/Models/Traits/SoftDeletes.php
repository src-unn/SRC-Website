<?php
/**
 * Project: srcng.com
 * Author:  Chukwuemeka Nwobodo (jcnwobodo@gmail.com)
 * Date:    9/19/2016
 * Time:    4:38 AM
 **/

namespace App\Models\Traits;

use Illuminate\Database\Eloquent\SoftDeletes as EloquentSoftDeletes;

/**
 * Class SoftDeletes
 * @package App\Models\Traits
 */
trait SoftDeletes
{
    use EloquentSoftDeletes;

    /**
     * Set dates property to enable soft-deleting
     */
    protected $dates = ['deleted_at'];
}