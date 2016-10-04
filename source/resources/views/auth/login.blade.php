@extends('layouts.auth')

@section('content')
    <div class="section">
        <div class="valign-wrapper mh-75vh">
            <div class="container valign">
                <div class="row">

                    <div class="col l6 offset-l0 m10 offset-m1 s10 offset-s1">
                        <div class="row center-align">
                            <h4 >Log In</h4>
                            <p>
                                Some text<br/>a...
                            </p>
                        </div>

                        <div class="row">
                            <div class="col m6 s12 align-m-right align-s-centre">
                                <p>
                                    <button class="btn btn-large z-depth-half full-width">
                                        Log In with Facebook
                                    </button>
                                </p>
                            </div>
                            <div class="col m6 s12 align-m-left align-s-centre">
                                <p>
                                    <button class="btn btn-large z-depth-half full-width">
                                        Log In with Google
                                    </button>
                                </p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="divider col s5"></div>
                            <div class="col s2 center-align">OR</div>
                            <div class="divider col s5"></div>
                        </div>
                    </div>

                    <form class="col l5 offset-l1 m10 offset-m1 s10 offset-s1 valign white z-depth-half" role="form" method="POST"
                          action="{{ url()->route('auth.login') }}">
                        {{ csrf_field() }}

                        <div class="row">
                            <div class="col s12">
                                <h6 class="font-bold">Log In with email and password</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="email" name="email" type="email" class="validate">
                                <label for="email">Email Address</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <input id="password" name="password" type="password" class="validate">
                                <label for="password">Password</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col m8 s12">
                                <span class="left">
                                    <input type="checkbox" name="remember" class="filled-in" id="remember" checked="checked" />
                                    <label for="remember">Remember me on this computer</label>
                                </span>
                            </div>
                            <div class="col m4 s12">
                                <button type="submit" class="btn z-depth-half right">
                                    Log In
                                </button>
                            </div>
                        </div>

                        <div class="row divider"></div>
                        <div class="row center-align">
                            <div class="col s6">
                                <a href="{{ url()->route('auth.password.reset') }}">
                                    Forgot Your Password? Reset Password
                                </a>
                            </div>
                            <div class="col s6">
                                <a href="{{ url()->route('auth.register') }}">
                                    Don't have an account? Sign Up
                                </a>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
