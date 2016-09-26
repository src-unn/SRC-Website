<?php
/**
 * Project: academy.zeesaa.com
 * Author:  Chukwuemeka Nwobodo (jcnwobodo@gmail.com)
 * Date:    9/16/2016
 * Time:    2:49 PM
 **/
namespace App\Models;

use App\Models\Traits\SoftDeletes;

/**
 * Class Language
 * @package App\Models
 */
class Language extends Model
{
    use SoftDeletes;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function entries()
    {
        return $this->hasMany('App\Models\Entry');
    }

    public static function validator()
    {
        return null;
    }
}