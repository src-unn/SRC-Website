<?php
/**
 * Project: academy.zeesaa.com
 * Author:  Chukwuemeka Nwobodo (jcnwobodo@gmail.com)
 * Date:    9/19/2016
 * Time:    5:04 AM
 **/
namespace App\Models\Traits;

trait Ratable
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function ratings()
    {
        return $this->morphMany('App\Models\Rating', 'ratable');
    }
}