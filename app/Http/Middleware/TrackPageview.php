<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class TrackPageview
{
    public function handle(Request $request, Closure $next): mixed
    {
        $response = $next($request);

        if ($response instanceof RedirectResponse) {
            return $response;
        }

        if ($request->hasHeader('X-Livewire')) {
            return $response;
        }

        if (str_starts_with($request->route()->uri, 'telescope/')) {
            return $response;
        }

        $this->track();

        return $response;
    }

    public function track(
        ?string $name = null,
        ?array $meta = null,
    ): void {
        if (! config('pirsch.token')) {
            return;
        }

        app()->terminating(function () use ($name, $meta) {

            try {
                Http::withToken(config('pirsch.token'))
                    ->timeout(5)
                    ->retry(
                        times: 3,
                        sleepMilliseconds: 100,
                    )
                    ->post(
                        url: 'https://api.pirsch.io/api/v1/'.($name === null ? 'hit' : 'event'),
                        data: [
                            'url' => request()->fullUrl(),
                            'ip' => request()->ip(),
                            'user_agent' => request()->userAgent(),
                            'accept_language' => request()->header('Accept-Language'),
                            'sec_ch_ua' => request()->header('Sec-CH-UA'),
                            'sec_ch_ua_mobile' => request()->header('Sec-CH-UA-Mobile'),
                            'sec_ch_ua_platform' => request()->header('Sec-CH-UA-Platform'),
                            'sec_ch_ua_platform_version' => request()->header('Sec-CH-UA-Platform-Version'),
                            'sec_ch_width' => request()->header('Sec-CH-Width'),
                            'sec_ch_viewport_width' => request()->header('Sec-CH-Viewport-Width'),
                            'referrer' => request()->header('Referer'),
                            ...$name === null
                                ? []
                                : [
                                    'event_name' => $name,
                                    'event_meta' => $meta,
                                ],
                        ],
                    )
                    ->throw();
            } catch (\Illuminate\Http\Client\RequestException $e) {
                Log::error($e->getMessage(), ['response' => $e->response->json()]);
            }
        });
    }
}
