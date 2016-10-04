@extends('layouts.auth')

@section('content')
    <div class="section">
        <div class="valign-wrapper mh-75vh">
            <div class="container valign">
                <div class="row">

                    <div class="col l6 offset-l0 m10 offset-m1 s10 offset-s1">
                        <div class="row center-align">
                            <h4>No Worries</h4>
                            <p class="font-bold">
                                We all forget sometimes...
                            </p>
                        </div>
                        <div class="divider"></div>
                        <div class="row">
                            <div class="col s12">
                            </div>
                        </div>
                    </div>

                    <form class="col l5 offset-l1 m10 offset-m1 s10 offset-s1 valign white z-depth-half" role="form" method="POST"
                          action="{{ url()->route('auth.password.email') }}">
                        {{ csrf_field() }}

                        <div class="row">
                            <div class="col s12">
                                <h6 class="font-bold">Get a Password Reset Link</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="email" name="email" type="email" class="validate">
                                <label for="email">E-Mail Address</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12 right-align">
                                <button type="submit" class="btn z-depth-half center">
                                    Send Password Reset Link
                                </button>
                            </div>
                        </div>
                        <div class="row divider"></div>
                        <div class="row center-align">
                            <div class="col s6">
                                <a href="{{ url()->route('auth.login') }}">
                                    Log In
                                </a>
                            </div>
                            <div class="col s6">
                                <a href="{{ url()->route('auth.register') }}">
                                    Sign Up
                                </a>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
