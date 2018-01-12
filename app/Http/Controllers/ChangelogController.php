<?php

namespace App\Http\Controllers;

use App\Note;
use App\Release;
use Illuminate\Http\Request;

class ChangelogController extends Controller
{
    public function index()
    {
        $releases = Release::orderBy('released_on', 'desc')->get();
        return view('changelog')->withReleases($releases);
    }
}
