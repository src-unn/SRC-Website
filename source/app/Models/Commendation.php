<?php
/**
 * Project: academy.zeesaa.com
 * Author:  Chukwuemeka Nwobodo (jcnwobodo@gmail.com)
 * Date:    9/16/2016
 * Time:    11:53 PM
 **/
namespace App\Models;

use App\Models\Traits\NonValidating;

/**
 * Class Commendation
 * Here, the word Commendation is used as a shorter version of 'Recommendation' (which is used in design documents)
 *
 * @package App\Models
 */
class Commendation extends Model
{
    use NonValidating;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sender()
    {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function commendable()
    {
        return $this->morphTo();
    }
}