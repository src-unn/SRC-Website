<?php
/**
 * Project: academy.zeesaa.com
 * Author:  Chukwuemeka Nwobodo (jcnwobodo@gmail.com)
 * Date:    9/19/2016
 * Time:    11:39 AM
 **/
namespace App\Models\Traits;

trait Commendable
{
    /**
     * Commendation sent by Users of this Author profile
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function recommendations()
    {
        return $this->morphMany('App\Models\Commendation', 'commendable');
    }
}