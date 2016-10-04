<?php
/**
 * Project: srcng.com
 * Author:  Chukwuemeka Nwobodo (jcnwobodo@gmail.com)
 * Date:    10/3/2016
 * Time:    5:56 AM
 **/
?>
@extends('layouts.app')

@section('body_markup')
    <!-- Uses a transparent header that draws on top of the layout's background -->

    <div class="mdl-layout mdl-js-layout mdl-layout__header--waterfall mdl-layout__header--transparent">

        @include('parts.auth_menu_bar')

        <main class="mdl-layout__content">
            @yield('content')
        </main>

        @include('parts.mini_footer')
    </div>
@endsection
