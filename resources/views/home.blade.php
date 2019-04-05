@extends('layouts.app')

@section('content')
    <img src="/images/banner.jpg" class="banner" />
    <article class="container py-4">
        <h1>{{ __("app.news") }}</h1>
        @if (count($articles)>0)
            <div class="row">
                @foreach ($articles as $article)
                    <div class="col-md-12">
                        <div class="article-list-item row my-3">
                            <div class="col-md-2">
                                <img class="image" src="{{ '/images/articles/'.$article->id.'/'.$article->image }}" />
                            </div>
                            <div class="col-md-10">
                                <h2 class="title">{{ $article->title }}</h2>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            {{ __("app.not_registers_found") }}    
        @endif
        
    </article>
@endsection
