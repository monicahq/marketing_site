<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReleaseController extends Controller
{
    public function add(Request $request)
    {
        return view('dashboard.release.add');
    }
}
