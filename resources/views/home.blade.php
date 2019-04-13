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
                                <img class="image" src="{{ $article->image }}" />
                            </div>
                            <div class="col-md-10">
                                <h2 class="title">{{ $article->title }}</h2>
                                <p>
                                    {{ $article->short_desc }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="text-center">
                <a type="button" href="/news" class="btn btn-primary">{{ __("app.btn_view_all") }}</a>
            </div>
        @else
            {{ __("app.not_registers_found") }}    
        @endif
        
    </article>
@endsection
