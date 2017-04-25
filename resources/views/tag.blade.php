@extends('master')

@section('pageTitle', $tag->getName())

@section('content')
  <h2>{{$tag->getName()}}</h2>

  @if (is_array($posts))
    @foreach ($posts as $post)
      <a href="/blog/{{$post->getSlug()}}">{{$post->getTitle()}}</a> 
      by
      <a href="/author/{{$post->getAuthor()->getSlug()}}">
        {{$post->getAuthor()->getFirstName()}} {{$post->getAuthor()->getLastName()}}
      </a>
      <br>
    @endforeach
  @endif

  @if (!is_null($previousPage))
    <a href="/tag/{{$tag->getSlug()}}/p/{{$previousPage}}">Prev</a>
  @endif
  @if (!is_null($nextPage))
    <a href="/tag/{{$tag->getSlug()}}/p/{{$nextPage}}">Next</a>
  @endif
@stop