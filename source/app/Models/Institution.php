<?php
/**
 * Project: academy.zeesaa.com
 * Author:  Chukwuemeka Nwobodo (jcnwobodo@gmail.com)
 * Date:    9/16/2016
 * Time:    2:50 PM
 **/
namespace App\Models;

use App\Models\Traits\Ratable;
use App\Models\Traits\SoftDeletes;
use App\Models\Traits\Viewable;

/**
 * Class Institution
 * @package App\Models
 */
class Institution extends Model
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
    public function departments()
    {
        return $this->hasMany('App\Models\Department');
    }
}