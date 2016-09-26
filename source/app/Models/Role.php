<?php
/**
 * Project: flexbook.zeesaa.com
 * Author:  J. C. Nwobodo (Fibonacci)
 * Date:    8/8/2016
 * Time:    11:45 AM
 **/
namespace App\Models;

use App\Models\Traits\NonValidating;

/**
 * Class Role
 * @package App\Models
 */
class Role extends Model
{
    use NonValidating;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany('App\Models\User')->withTimestamps();
    }

    /**
     * @param $name
     *
     * @return mixed
     */
    public static function _findByName($name)
    {
        return self::where('name', $name)->first();
    }
}