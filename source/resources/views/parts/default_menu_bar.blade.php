<?php
/**
 * Project: srcng.com
 * Author:  Chukwuemeka Nwobodo (jcnwobodo@gmail.com)
 * Date:    10/3/2016
 * Time:    2:53 AM
 **/
?>
<header class="mdl-layout__header">
    <div class="mdl-layout-icon"></div>
    <div class="mdl-layout__header-row">
        <span class="mdl-layout__title">[[SRC-LOGO]]</span>
        <div class="mdl-layout-spacer"></div>
        <nav class="mdl-navigation">
            <a class="mdl-navigation__link" href="{{url()->route('pub.home')}}"><i class="material-icons">home</i></a>
            <a class="mdl-navigation__link" href="{{url()->route('pub.club')}}">Club</a>
            <a class="mdl-navigation__link" href="{{url()->route('pub.event')}}">Events</a>
            <a class="mdl-navigation__link" href="{{url()->route('pub.gallery')}}">Gallery</a>
            <a class="mdl-navigation__link" href="{{url()->route('pub.project')}}">Projects</a>
            <a class="mdl-navigation__link" href="{{url()->route('pub.project')}}">Contact</a>
            <a class="mdl-navigation__link" href="{{url()->route('pub.home')}}">Blog</a>
        </nav>
    </div>
</header>
<div class="mdl-layout__drawer">
    <span class="mdl-layout__title">[[SRC-LOGO]]</span>
    <div class="mdl-layout-spacer"></div>
    <nav class="mdl-navigation">
        <a class="mdl-navigation__link" href="{{url()->route('pub.home')}}"><i class="material-icons">home</i> Home</a>
        <a class="mdl-navigation__link" href="{{url()->route('pub.club')}}"><i class="material-icons">group_work</i> Club</a>
        <a class="mdl-navigation__link" href="{{url()->route('pub.event')}}"><i class="material-icons">event</i> Events</a>
        <a class="mdl-navigation__link" href="{{url()->route('pub.gallery')}}"><i class="material-icons">perm_media</i> Gallery</a>
        <a class="mdl-navigation__link" href="{{url()->route('pub.project')}}"><i class="material-icons">developer_mode</i> Projects</a>
        <a class="mdl-navigation__link" href="{{url()->route('pub.project')}}"><i class="material-icons">feedback</i> Contact</a>
        <a class="mdl-navigation__link" href="{{url()->route('pub.home')}}"><i class="material-icons">code</i> Blog</a>
    </nav>
    <nav class="mdl-navigation">
        <p class="mdl-navigation__link mdl-typography--font-bold">Community</p>
        <a class="mdl-navigation__link" href="#">[LOGO] GitHub</a>
        <a class="mdl-navigation__link" href="#">[LOGO] Slack</a>
        <a class="mdl-navigation__link" href="#">[LOGO] FreeCodeCamp</a>
        <a class="mdl-navigation__link" href="#">[LOGO] Google+</a>
    </nav>
</div>
