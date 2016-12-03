@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">afffiche des articles</div>
                    <div class="panel-body">
                        afffiche des articles

                        @foreach($articles as $article)
                            <a href="{{ route('article.show', $article->id) }}">
                                <h2>{{ $article->title  }}</h2>
                            </a>

                            <p>{{ $article->content  }}</p>
                        @endforeach

                        {{ $articles->links() }}

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
