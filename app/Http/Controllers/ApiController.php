<?php

namespace App\Http\Controllers;

use DB;
use Storage;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index(Request $request)
    {
        $Parsedown = new \Parsedown();
        $markdownDocument = $Parsedown->text(Storage::get('/api_documentation/overview.md'));
        return view('api', ['markdownDocument' => $markdownDocument]);
    }

    public function category(Request $request, $slug)
    {
        $Parsedown = new \Parsedown();
        $markdownDocument = $Parsedown->text(Storage::get('/api_documentation/'.$slug.'.md'));
        return view('api', ['markdownDocument' => $markdownDocument]);
    }
}
