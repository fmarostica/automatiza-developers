<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::paginate(8);
        return view("news", compact("articles"));
    }

    public function panel(){
        $articles = Article::paginate(8);
        return view("panel.news", compact("articles"));
    }

    public function list(){
        $articles = Article::paginate(8);
        return response()->json($articles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("panel.news-add", compact("articles"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $title = $request->input("title");
        
        $article = new Article([
            'title'=>$title,
            'slug'=>str_slug($title),
            'image'=>'/images/logo.jpg',
            'short_desc'=>$request->input('short_desc'),
            'document_path'=>''
        ]);
        $article->save();
        //return response()->json($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $id)
    {
        Article::find($id)->delete();
        return json_encode(array("Response"=>"Registro borrado", "Error"=>""));
    }
}
