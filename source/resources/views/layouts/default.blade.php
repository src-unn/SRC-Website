<?php
/**
 * Project: srcng.com
 * Author:  Chukwuemeka Nwobodo (jcnwobodo@gmail.com)
 * Date:    10/2/2016
 * Time:    9:22 PM
 **/
?>
@extends('layouts.app')

@section('body_markup')
    <!-- Uses a transparent header that draws on top of the layout's background -->

    <div class="mdl-layout mdl-js-layout mdl-layout__header--waterfall mdl-layout__header--transparent">

        @include('parts.default_menu_bar')

        <main class="mdl-layout__content">
            @yield('content')
        </main>

        @include('parts.mega_footer')
    </div>
@endsection