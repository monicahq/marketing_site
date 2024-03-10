<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Monicahq\Cloudflare\Http\Middleware\TrustProxies as Middleware;

class TrustProxies extends Middleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     *
     * @throws \Symfony\Component\HttpKernel\Exception\HttpException
     */
    public function handle(Request $request, Closure $next)
    {
        if (($ip = $request->header('Cf-Connecting-Ip')) !== null) {
            Log::debug('Current ip: '.$request->ip());
            $request->headers->set('REMOTE_ADDR', $ip);
            Log::debug('New ip: '.$request->ip());
        }

        return parent::handle($request, $next);
    }
}
