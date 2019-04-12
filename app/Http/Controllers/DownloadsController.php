<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class DownloadsController extends Controller
{
    public function index(){
        $downloads = Article::paginate(8);
        return view("downloads", compact("downloads"));
    }
}
