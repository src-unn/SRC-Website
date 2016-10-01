<?php
/**
 * Project: srcng.com
 * Author:  Chukwuemeka Nwobodo (jcnwobodo@gmail.com)
 * Date:    10/1/2016
 * Time:    2:13 AM
 **/

namespace App\Models;

use App\Models\Traits\SoftDeletes;

/**
 * Class Team
 * @package App\Models
 */
class Team extends Model
{
    use SoftDeletes;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function members()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }

    /**
     *
     */
    protected function validator()
    {
        // TODO: Implement validator() method.
    }
}