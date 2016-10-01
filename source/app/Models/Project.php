<?php
/**
 * Project: srcng.com
 * Author:  Chukwuemeka Nwobodo (jcnwobodo@gmail.com)
 * Date:    10/1/2016
 * Time:    2:11 AM
 **/

namespace App\Models;

use App\Models\Traits\SoftDeletes;

/**
 * Class Project
 * @package App\Models
 */
class Project extends Model
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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function assigned_users()
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