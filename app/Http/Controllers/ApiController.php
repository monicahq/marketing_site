<?php

namespace App\Http\Controllers;

use Storage;
use League\CommonMark\Converter;
use GrahamCampbell\Markdown\Facades\Markdown;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index(Request $request)
    {
        $markdownDocument = Markdown::convertToHtml(Storage::get('/api_documentation/overview.md'));
        return view('api', ['markdownDocument' => $markdownDocument]);
    }
}
