<?php
/**
 * Project: srcng.com
 * Author:  Chukwuemeka Nwobodo (jcnwobodo@gmail.com)
 * Date:    9/18/2016
 * Time:    1:07 PM
 **/

namespace App\Listeners;

use Illuminate\Events\Dispatcher;

/**
 * Class AuthEventSubscriber
 * @package App\Listeners
 */
class AuthEventSubscriber
{
    /**
     * @param Dispatcher $events
     */
    public function subscribe(Dispatcher $events)
    {
        $self = 'App\Listeners\AuthEventSubscriber';

        $events->listen('Illuminate\Auth\Events\Attempting', $self.'@onAttempting');
        $events->listen('Illuminate\Auth\Events\Authenticated', $self.'@onAuthenticated');
        $events->listen('Illuminate\Auth\Events\Login', $self.'@onLogin');
        $events->listen('Illuminate\Auth\Events\Logout', $self.'@onLogout');
        $events->listen('Illuminate\Auth\Events\Lockout', $self.'@onLockout');
    }

    /**
     * Log Attempting event
     * @param $event
     */
    public function onAttempting($event)
    {

    }

    /**
     * Log Authenticated event
     * @param $event
     */
    public function onAuthenticated($event)
    {

    }

    /**
     * Log successful Login event
     * @param $event
     */
    public function onLogin($event)
    {

    }

    /**
     * Log successful Logout event
     * @param $event
     */
    public function onLogout($event)
    {

    }

    /**
     * Log Lockout event
     * @param $event
     */
    public function onLockout($event)
    {

    }
}