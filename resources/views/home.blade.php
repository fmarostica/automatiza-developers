@extends('layouts.app')

@section('content')
    <img src="/images/banner.jpg" class="banner" />
    <article class="container py-4">
        <h1>{{ __("app.news") }}</h1>
        @if (count($articles)>0)
            <div class="row">
                @foreach ($articles as $article)
                    <div class="article-list-item">
                        <div class="col-md-3">
                            <img src="{{ '/images/articles/'.$article->id.'/'.$article->image }}" />
                        </div>
                        <div class="col-md-9">
                            <h2>{{ $article->title }}</h2>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            {{ __("app.not_registers_found") }}    
        @endif
        
    </article>
@endsection
