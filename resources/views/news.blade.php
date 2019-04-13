@extends ("layouts.app")

@section('content')
    <article class="container py-4">
        <h1>{{ __("app.news") }}</h1>
        @if (count($articles)>0)
            <div class="row">
                @foreach ($articles as $article)
                    <div class="col-md-3">
                        <div class="article-box-item my-3">
                            <img class="image" src="{{ $article->image }}" />
                            <div>
                                <h2 class="title">{{ $article->title }}</h2>
                                <div>
                                    {{ $article->short_desc }}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="text-center">
                {{ $articles->links() }}
            </div>
        @else
            {{ __("app.not_registers_found") }}    
        @endif
    </article>
@endsection