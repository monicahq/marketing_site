<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ApiController extends Controller
{
    public function index(Request $request)
    {
        return $this->category($request, 'overview');
    }

    public function category(Request $request, $slug)
    {
        $Parsedown = new \Parsedown();
        $markdownDocument = $Parsedown->text(Storage::get('/api_documentation/'.$slug.'.md'));
        return view('api', ['markdownDocument' => $markdownDocument]);
    }
}
