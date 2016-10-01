<?php
/**
 * Project: srcng.com
 * Author:  Chukwuemeka Nwobodo (jcnwobodo@gmail.com)
 * Date:    10/1/2016
 * Time:    1:58 AM
 **/

namespace App\Models;

use App\Models\Traits\SoftDeletes;

/**
 * Class Event
 * @package App\Models
 */
class Event extends Model
{
    use SoftDeletes;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function schedule()
    {
        return $this->hasOne(Schedule::class);
    }

    /**
     *
     */
    protected function validator()
    {
        // TODO: Implement validator() method.
    }
}