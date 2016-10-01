<?php
/**
 * Project: srcng.com
 * Author:  Chukwuemeka Nwobodo (jcnwobodo@gmail.com)
 * Date:    10/1/2016
 * Time:    2:44 AM
 **/

namespace App\Models;

use App\Models\Traits\SoftDeletes;

/**
 * A Schedule is an extension of an Event instance.
 * This extension is owned by re-occurring events only.
 *
 * Class Schedule
 * @package App\Models
 */
class Schedule extends Model
{
    use SoftDeletes;

    /**
     * The parent Event for this schedule
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    /**
     *
     */
    protected function validator()
    {
        // TODO: Implement validator() method.
    }
}