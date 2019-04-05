@extends('layouts.app')

@section('content')
    <article class="container py-4">
        <h1>{{ __("app.documentation") }}</h1>
        @if (count($documents)>0)
            <div class="row">
                @foreach ($documents as $document)
                    <div class="col-md-3">
                        <div class="article-box-item my-3">
                            <img class="image" src="{{ $document->image }}" />
                            <div>
                                <h2 class="title">{{ $document->title }}</h2>
                                <div>
                                    {{ $document->short_desc }}
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
