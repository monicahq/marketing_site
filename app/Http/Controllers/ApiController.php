<?php

namespace App\Http\Controllers;

use DB;
use Storage;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index(Request $request)
    {
        $filename = Storage::get('/api_documentation/overview.md');
        $Parsedown = new \Parsedown();
        $markdownDocument = $Parsedown->text($filename);
        return view('api', ['markdownDocument' => $markdownDocument]);
    }

    public function category(Request $request, $slug)
    {
        $Parsedown = new \Parsedown();
        $markdownDocument = $Parsedown->text(Storage::get('/api_documentation/'.$slug.'.md'));
        return view('api', ['markdownDocument' => $markdownDocument]);
    }

    /*
 * @param string $file Filepath
 * @param string $format dateformat
 * @link http://www.php.net/manual/de/function.date.php
 * @link http://www.php.net/manual/de/function.filemtime.php
 * @return string|bool Date or Boolean
 */

function getFiledate($file, $format) {
       if (is_file($file)) {
               $filePath = $file;
               if (!realpath($filePath)) {
                       $filePath = $_SERVER["DOCUMENT_ROOT"].$filePath;
       }
               $fileDate = filemtime($filePath);
               if ($fileDate) {
                       $fileDate = date("$format",$fileDate);
                       return $fileDate;
               }
               return false;
       }
       return false;
}
}
