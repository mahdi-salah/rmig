<?php

namespace App\Http\Middleware;

use Fideloper\Proxy\TrustProxies as Middleware;
use Illuminate\Http\Request;

class TrustProxies extends Middleware
{
//    protected $proxies = '*';
//    protected $headers = Request:: HEADER_X_FORWARDED_AWS_ELB;
    /**
     * The trusted proxies for this application.
     *
     * @var array|string|null
     */

    //(original)
    protected $proxies;

    /**
     * The headers that should be used to detect proxies.
     *
     * @var int
     */

    //(original)
    protected $headers = Request::HEADER_X_FORWARDED_FOR | Request::HEADER_X_FORWARDED_HOST | Request::HEADER_X_FORWARDED_PORT | Request::HEADER_X_FORWARDED_PROTO | Request::HEADER_X_FORWARDED_AWS_ELB;
}
