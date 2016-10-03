<?php
/**
 * Project: srcng.com
 * Author:  Chukwuemeka Nwobodo (jcnwobodo@gmail.com)
 * Date:    10/3/2016
 * Time:    2:29 AM
 **/
?>
@extends('layouts.default')
@section('content')
    <div class="mdl-grid">
        <div class="mdl-cell mdl-cell--12-col">
            <h4>About |<span> Page</span></h4>
        </div>
    </div>
    <div class="mdl-grid">
        <div class="mdl-cell mdl-cell--12-col">
            <img src="image/cover_image.jpg" class="responsive-img" style="width: 100%; height: 250px;" alt="cover_image">
        </div>
    </div>

    <div class="mdl-grid">
        <!--Post-->
        <div class="mdl-cell mdl-cell--7-col">
            <br/>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div>
        <!--Post-->

        <div class="mdl-cell--2-col">
        </div>
        <!--Column for Related Pages-->
        <div class="mdl-cell mdl-cell--3-col">
            <span class="mdl-typography--font-bold">Related Pages</span>
            <ul class="demo-list-item mdl-list">
                <li class="mdl-list__item">
                    <span class="mdl-list__item-primary-content">
                      <a href="#">Page 1</a>
                    </span>
                </li>
                <li class="mdl-list__item">
                    <span class="mdl-list__item-primary-content">
                      <a href="#">Page 1</a>
                    </span>
                </li>
                <li class="mdl-list__item">
                    <span class="mdl-list__item-primary-content">
                      <a href="#">Page 1</a>
                    </span>
                </li>
            </ul>
        </div>
        <!--Column for Related Pages-->
    </div>

@endsection
