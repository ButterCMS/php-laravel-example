@extends('master')

@section('pageTitle', $author->getFirstName().' '.$author->getLastName())

@section('content')
  <h2>{{$author->getFirstName()}} {{$author->getLastName()}}</h2>

  <h3>Bio</h3>
  <p>
    {{$author->getBio()}}  
  </p>

  <h3>Articles</h3>
  @if (is_array($posts))
    @foreach ($posts as $post)
      <a href="/blog/{{urlencode($post->getSlug())}}">{{$post->getTitle()}}</a> 
      <br>
    @endforeach
  @endif

  @if (!is_null($previousPage))
    <a href="/author/{{urlencode($author->getSlug())}}/p/{{$previousPage}}">Prev</a>
  @endif
  @if (!is_null($nextPage))
    <a href="/author/{{urlencode($author->getSlug())}}/p/{{$nextPage}}">Next</a>
  @endif
@stop