<?php
/**
 * Project: academy.zeesaa.com
 * Author:  Chukwuemeka Nwobodo (jcnwobodo@gmail.com)
 * Date:    9/16/2016
 * Time:    2:53 PM
 **/
namespace App\Models;

use App\Models\Traits\SoftDeletes;

/**
 * Class Rating
 * @package App\Models
 */
class Rating extends Model
{
    use SoftDeletes;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * Item that is rated: Author, Entry, Institution, Department
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function ratable()
    {
        return $this->morphTo();
    }

    public static function validator()
    {
        return null;
    }
}