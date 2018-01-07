@extends('layout.blog')

@section('content')
    <h1>A propos</h1>
    <p>Il était une fois </p>
    @if(count($skills > 0))
        <ul class="list-group">
            @foreach($skills as $skill)
                <li class="list-group-item">{{$skill}}</li>
            @endforeach
        </ul>
    @endif
@endsection