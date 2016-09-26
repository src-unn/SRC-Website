<?php
/**
 * Project: academy.zeesaa.com
 * Author:  Chukwuemeka Nwobodo (jcnwobodo@gmail.com)
 * Date:    9/16/2016
 * Time:    2:48 PM
 **/
namespace App\Models;

use App\Models\Traits\SoftDeletes;

/**
 * Class Category
 * @package App\Models
 */
class Category extends Model
{
    use SoftDeletes;

    /**
     * Get the route key for the model.
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * @return mixed
     */
    public function parent()
    {
        return $this->find($this->parent_id);
    }

    /**
     * @return mixed
     */
    public function sub_categories()
    {
        return $this->where('parent_id', $this->id);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function entries()
    {
        return $this->belongsToMany('App\Models\Entry');
    }

    public static function validator()
    {
        return null;
    }
}