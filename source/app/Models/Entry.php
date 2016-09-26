<?php
/**
 * Project: academy.zeesaa.com
 * Author:  Chukwuemeka Nwobodo (jcnwobodo@gmail.com)
 * Date:    9/16/2016
 * Time:    2:47 PM
 **/
namespace App\Models;

use App\Models\Traits\Commendable;
use App\Models\Traits\Ratable;
use App\Models\Traits\Reportable;
use App\Models\Traits\Reviewable;
use App\Models\Traits\SoftDeletes;
use App\Models\Traits\Viewable;
use Illuminate\Validation\Validator;

/**
 * Class Entry
 * @package App\Models
 */
class Entry extends Model
{
    use SoftDeletes, Viewable, Commendable, Reviewable, Ratable, Reportable;

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * @return Validator
     */
    public static function validator()
    {
        return null;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function library_users()
    {
        return $this->belongsToMany('App\Models\User')->withTimestamps();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function categories()
    {
        return $this->belongsToMany('App\Models\Category');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function authors()
    {
        return $this->belongsToMany('App\Models\Author')->withTimestamps();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function publisher()
    {
        return $this->belongsTo('App\Models\Publisher');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function language()
    {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function uploaded_by()
    {
        return $this->belongsTo('App\Models\User');
    }
}