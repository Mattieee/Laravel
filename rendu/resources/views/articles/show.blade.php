@extends('layout.blog')

@section('content')


            <div class="well">
                <a href="/articles" class="btn btn-default" >Retour aux articles</a>
                <h1>{{$article->title}}</h1>
                <img class="img-responsive" src="/rendu/public/storage/images/{{$article->image_name}}">
                <p>{{$article->content}}</p>
                <hr>
                <small>{{$article->created_at}}</small>
            </div>
            @if(!Auth::guest())
                @if(Auth::user()->id == $article->user->id)
            <a href="/articles/{{$article->id}}/edit" class="btn btn-primary">Éditer l'article</a>

            {!! Form::open(['action' => ['ArticlesController@destroy', $article->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Supprimer l\'article', ['class' => 'btn btn-danger'])}}
            {!! Form::close() !!}
                @endif
            @endif
@endsection