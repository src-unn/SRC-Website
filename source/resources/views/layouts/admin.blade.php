<?php
/**
 * Project: srcng.com
 * Author:  Chukwuemeka Nwobodo (jcnwobodo@gmail.com)
 * Date:    10/6/2016
 * Time:    2:17 AM
 **/
?>
@extends('layouts.app')

@section('body_markup')
    <div class="mdl-layout mdl-js-layout">

        @include('parts.admin_menu_bar')

        <main class="mdl-layout__content">
            @yield('content')

            @include('parts.mini_footer')
        </main>

    </div>
@endsection
