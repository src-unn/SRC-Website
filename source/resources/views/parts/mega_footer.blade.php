<?php
/**
 * Project: srcng.com
 * Author:  Chukwuemeka Nwobodo (jcnwobodo@gmail.com)
 * Date:    10/3/2016
 * Time:    2:35 AM
 **/
?>
<footer class="mdl-mega-footer">

    <div class="mdl-mega-footer__middle-section">

        <div class="mdl-mega-footer__drop-down-section">
            <input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
            <h1 class="mdl-mega-footer__heading">Club</h1>
            <ul class="mdl-mega-footer__link-list">
                <li><a href="#">About SRC</a></li>
            </ul>
            <ul class="mdl-mega-footer__link-list">
                <li><a href="{{url()->route('auth.register')}}">Register</a></li>
                <li><a href="{{url()->route('auth.login')}}">Login</a></li>
            </ul>
        </div>

        <div class="mdl-mega-footer__drop-down-section">
            <input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
            <h1 class="mdl-mega-footer__heading">Resources</h1>
            <ul class="mdl-mega-footer__link-list">
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Code of Conduct</a></li>
            </ul>
        </div>

        <div class="mdl-mega-footer__drop-down-section">
            <input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
            <h1 class="mdl-mega-footer__heading">Community</h1>
            <ul class="mdl-mega-footer__link-list">
                <li><a href="#">[LOGO] GitHub</a></li>
                <li><a href="#">[LOGO] Slack</a></li>
                <li><a href="#">[LOGO] FreeCodeCamp</a></li>
                <li><a href="#">[LOGO] Google+</a></li>
                <li><a href="#"><i class="material-icons" style="font-size: inherit;">mail</i>Contact us</a></li>
            </ul>
        </div>

        <div class="mdl-mega-footer__drop-down-section">
            <input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
            <h1 class="mdl-mega-footer__heading">Sponsors</h1>
            <ul class="mdl-mega-footer__link-list">
                <li><a href="#">[LOGO] Microsoft</a></li>
                <li><a href="#">[LOGO] Google</a></li>
                <li><a href="#">[LOGO] Apple</a></li>
                <li><a href="#">[LOGO] UNN ICT Department</a></li>
            </ul>
        </div>

    </div>

    <div class="mdl-mega-footer__bottom-section">
        <div class="mdl-logo">[[SRC-LOGO]]</div>
        <div class="m"></div>
        <ul class="mdl-mega-footer__link-list">
            <li><a href="#">Help</a></li>
            <li><a href="#">Privacy & Terms</a></li>
        </ul>
    </div>

</footer>

 