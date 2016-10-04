<?php
/**
 * Project: srcng.com
 * Author:  Chukwuemeka Nwobodo (jcnwobodo@gmail.com)
 * Date:    10/4/2016
 * Time:    4:24 AM
 **/
?>
<header class="mdl-layout__header mdl-layout__header--waterfall">
    <div class="mdl-layout-icon"></div>
    <div class="mdl-layout__header-row">
        <span class="mdl-layout__title">[[SRC-LOGO]]</span>
        <div class="mdl-layout-spacer"></div>
        <nav class="mdl-navigation">
            <a class="mdl-navigation__link" href="{{url()->route('pub.home')}}"><i class="material-icons">home</i></a>
            <a class="mdl-navigation__link" href="{{url()->route('auth.register')}}">Register</a>
            <a class="mdl-navigation__link" href="{{url()->route('auth.login')}}">Login</a>
            <a class="mdl-navigation__link" href="{{url()->route('auth.password.reset')}}">Forgot Password?</a>
        </nav>
    </div>
</header>
<div class="mdl-layout__drawer">
    <span class="mdl-layout__title">[[SRC-LOGO]]</span>
    <div class="mdl-layout-spacer"></div>
    <nav class="mdl-navigation">
        <a class="mdl-navigation__link" href="{{url()->route('pub.home')}}"><i class="material-icons">home</i> Home</a>
        <a class="mdl-navigation__link" href="{{url()->route('auth.register')}}"><i class="material-icons">group_add</i> Register</a>
        <a class="mdl-navigation__link" href="{{url()->route('auth.login')}}"><i class="material-icons">lock_open</i> Login</a>
        <a class="mdl-navigation__link" href="{{url()->route('auth.password.reset')}}"><i class="material-icons">refresh</i> Forgot Password?</a>
    </nav>
    <nav class="mdl-navigation">
        <p class="mdl-navigation__link mdl-typography--font-bold"><i class="material-icons">device_hub</i> Community</p>
        <a class="mdl-navigation__link" href="#">[LOGO] GitHub</a>
        <a class="mdl-navigation__link" href="#">[LOGO] Slack</a>
        <a class="mdl-navigation__link" href="#">[LOGO] FreeCodeCamp</a>
        <a class="mdl-navigation__link" href="#">[LOGO] Google+</a>
    </nav>
</div>
