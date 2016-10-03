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
    <div class="mdl-layout mdl-js-layout">

        @include('parts.default_menu_bar')

        <main class="mdl-layout__content">
            @yield('content')

            @include('parts.mega_footer')
        </main>

    </div>
@endsection