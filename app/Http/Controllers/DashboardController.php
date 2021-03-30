<?php

namespace App\Http\Controllers;

use App\Models\Release;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $releases = Release::orderBy('released_on', 'desc')->get();

        $data = [
            'releases' => $releases,
        ];

        return view('dashboard.index', $data);
    }
}
