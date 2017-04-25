@extends('master')

@section('pageTitle', 'Authors')

@section('content')
  <h2>Authors</h2>

  @foreach ($authors as $author)
    <a href="/author/{{urlencode($author->getSlug())}}">
      <h3>{{$author->getFirstName()}} {{$author->getLastName()}}</h3>
    </a>
    <p>{{$author->getBio()}}</p>
  @endforeach
@stop