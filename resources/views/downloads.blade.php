@extends('layouts.app')

@section('content')
    <article class="container py-4">
        <h1>{{ __("app.downloads") }}</h1>
        @if (count($downloads)>0)
            <div class="row">
                @foreach ($downloads as $download)
                    <div class="col-md-4">
                        <div class="article-box-item rounded my-3">
                            <div>
                                <h2 class="title">{{ $download->title }}</h2>
                                <div class="description">
                                    {{ $download->short_desc }}
                                </div>
                                <div class="footer">
                                    <a href="/docs/{{ $download->slug }}">{{ __("app.btn_view_more") }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="text-center">
                {{ $downloads->links() }}
            </div>
        @else
            {{ __("app.not_registers_found") }}    
        @endif
    </article>
@endsection