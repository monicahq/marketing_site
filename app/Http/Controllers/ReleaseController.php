<?php

namespace App\Http\Controllers;

use Validator;
use App\Release;
use Illuminate\Http\Request;

class ReleaseController extends Controller
{
    public function add(Request $request)
    {
        return view('dashboard.release.add');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'release_number' => 'required',
            'description' => 'nullable',
            'released_on' => 'date|nullable',
        ]);

        if ($validator->fails()) {
            return back()
                ->withInput()
                ->withErrors($validator);
        }

        $release = new Release;
        $release->release_number = $request->get('release_number');
        $release->description = $request->get('description');
        $release->github_release_url = 'https://github.com/monicahq/monica/releases/tag/v'.$request->get('release_number');
        $release->released_on = $request->get('released_on');
        $release->save();

        return redirect('/dashboard');
    }

    public function notes(Release $release)
    {
        $data = [
            'release' => $release,
        ];

        return view('dashboard.release.notes', $data);
    }

    public function addNote(Release $release)
    {
        $data = [
            'release' => $release,
        ];

        return view('dashboard.release.add_note', $data);
    }

    public function storeNote(Request $request, Release $release)
    {
        $note = $release->notes()->create(
            $request->all()
        );

        if ($request->get('github_pull_request_number')) {
            $note->github_pull_request_url = "https://github.com/monicahq/monica/pull/".$request->get('github_pull_request_number');
        }

        if ($request->get('github_author_name')) {
            $note->github_author_url = "https://github.com/".$request->get('github_author_name');
        }

        $note->save();

        return redirect('/release/'.$release->id.'/notes');
    }
}
