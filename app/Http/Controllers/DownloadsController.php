<?php

namespace App\Http\Controllers;

use App\Download;
use Illuminate\Http\Request;

class DownloadsController extends Controller
{
    public function index(){
        $downloads = Download::paginate(8);
        return view("downloads", compact("downloads"));
    }
}
