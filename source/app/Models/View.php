<?php
/**
 * Project: academy.zeesaa.com
 * Author:  Chukwuemeka Nwobodo (jcnwobodo@gmail.com)
 * Date:    9/16/2016
 * Time:    2:53 PM
 **/
namespace App\Models;

use App\Models\Traits\NonValidating;
use App\Models\Traits\SoftDeletes;

/**
 * Class View
 * @package App\Models
 */
class View extends Model
{
    use SoftDeletes, NonValidating;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function viewable()
    {
        return $this->morphTo();
    }
}