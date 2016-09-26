<?php
/**
 * Project: ASPES.msc
 * Author:  Chukwuemeka Nwobodo (jcnwobodo@gmail.com)
 * Date:    9/12/2016
 * Time:    5:04 AM
 **/
namespace App\Models;

use App\Models\Traits\NonValidating;

/**
 * Class Session
 * @package App\Models
 */
class Session extends Model
{
    use NonValidating;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}