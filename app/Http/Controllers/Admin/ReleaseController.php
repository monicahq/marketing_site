<?php

namespace App\Http\Controllers\Admin;

use App\Models\Release;
use App\Services\Release\CreateRelease;
use App\Services\Release\DestroyRelease;
use App\Services\Release\UpdateRelease;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Laravel\Jetstream\Jetstream;

class ReleaseController extends Controller
{
    /**
     * Show releases.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Inertia\Response
     */
    public function index(Request $request)
    {
        return Jetstream::inertia()->render($request, 'Releases', [
            'releases' => Release::orderBy('id', 'desc')->get(),
        ]);
    }

    /**
     * Create a new release.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $release = app(CreateRelease::class)->execute(
            $request->only([
                'version',
                'notes',
                'released_on',
            ])
        );

        return back()->with(['flash' => [
            'release' => $release, ],
        ]);
    }

    /**
     * Update the given release.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $releaseId
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $releaseId)
    {
        $release = app(UpdateRelease::class)->execute(
            $request->only([
                'version',
                'notes',
                'released_on',
            ]) + [
                'release_id' => $releaseId,
            ]
        );

        return back(303)->with(['flash' => [
            'release' => $release, ],
        ]);
    }

    /**
     * Delete the given release.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $releaseId
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request, $releaseId)
    {
        app(DestroyRelease::class)->execute([
            'release_id' => $releaseId,
        ]);

        return back(303);
    }
}
