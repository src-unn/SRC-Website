<?php
/**
 * Project: academy.zeesaa.com
 * Author:  Chukwuemeka Nwobodo (jcnwobodo@gmail.com)
 * Date:    9/16/2016
 * Time:    2:49 PM
 **/
namespace App\Models;

use App\Models\Traits\Ratable;
use App\Models\Traits\SoftDeletes;
use App\Models\Traits\Viewable;

/**
 * Class Publisher
 * @package App\Models
 */
class Publisher extends Model
{
    use SoftDeletes, Viewable, Ratable;

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * @return Validator
     */
    public static function validator()
    {
        return null;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function entries()
    {
        return $this->hasMany('App\Models\Entry');
    }
}