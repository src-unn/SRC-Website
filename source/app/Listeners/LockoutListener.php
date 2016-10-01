<?php
/**
 * Project: srcng.com
 * Author:  Chukwuemeka Nwobodo (jcnwobodo@gmail.com)
 * Date:    9/18/2016
 * Time:    1:07 PM
 **/

namespace App\Listeners;

use Illuminate\Auth\Events\Lockout;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * TODO Implement Lockout-Event Listener
 * Class LockoutListener
 * @package App\Listeners
 */
class LockoutListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  Lockout  $event
     * @return void
     */
    public function handle(Lockout $event)
    {
        //
    }
}
