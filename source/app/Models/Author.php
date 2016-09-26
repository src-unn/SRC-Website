<?php
/**
 * Project: academy.zeesaa.com
 * Author:  Chukwuemeka Nwobodo (jcnwobodo@gmail.com)
 * Date:    9/16/2016
 * Time:    2:51 PM
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
 * Class Author
 * @package App\Models
 */
class Author extends Model
{
    use SoftDeletes, Viewable, Commendable, Reviewable, Ratable, Reportable;

    /**
     * Get the route key for the model.
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
    public function favorite_users()
    {
        return $this->belongsToMany('App\Models\User')->withTimestamps();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function departments()
    {
        return $this->belongsToMany('App\Models\Department')->withTimestamps();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function entries()
    {
        return $this->belongsToMany('App\Models\Entry')->withTimestamps();
    }

    /**
     * The User who created this Author profile
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function creator()
    {
        return $this->belongsTo('App\Models\User');
    }
}