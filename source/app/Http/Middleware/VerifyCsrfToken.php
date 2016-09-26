<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        //
    ];

    /**
     * Disable CSRF Protection on local environment to allow API tests through non-web_browser apps
     */
    protected function shouldPassThrough($request)
    {
        if(config('app.env')=='local')
            return true;
        else
            return parent::shouldPassThrough($request);
    }
}
