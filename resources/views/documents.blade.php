@extends('layouts.app')

@section('content')
    <article class="container py-4">
        <h1>{{ __("app.documentation") }}</h1>
        @if (count($documents)>0)
            <div class="row">
                @foreach ($documents as $document)
                    <div class="col-md-4">
                        <div class="article-box-item rounded my-3">
                            <div>
                                <h2 class="title">{{ $document->title }}</h2>
                                <div class="description">
                                    {{ $document->short_desc }}
                                </div>
                                <div class="footer">
                                    <a href="/docs/{{ $document->slug }}">{{ __("app.btn_view_more") }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="text-center">
                {{ $documents->links() }}
            </div>
        @else
            {{ __("app.not_registers_found") }}    
        @endif
    </article>
@endsection
