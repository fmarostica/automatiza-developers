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

    public function list(){
        $downloads = Download::orderBy("id", "desc")->paginate(8);
        return response()->json($downloads);
    }

    public function create()
    {
        return view('panel.downloads-add');
    }

    public function store(Request $request)
    {
        $title = $request->input("title");
        
        $download = new Download([
            'title'=>$title,
            'slug'=>str_slug($title),
            'image'=>'/images/logo.jpg',
            'short_desc'=>$request->input('short_desc'),
            'document_path'=>''
        ]);
        $download->save();
        //return response()->json($request);
    }

    public function destroy(string $id)
    {
        Download::find($id)->delete();
        return json_encode(array("Response"=>"Registro borrado", "Error"=>""));
    }
}
