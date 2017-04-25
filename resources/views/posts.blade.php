@extends('master')

@section('pageTitle', 'Blog')

@section('content')
  <h2>Blog</h2>

  @foreach ($posts as $post)
    <a href="/blog/{{$post->getSlug()}}">{{$post->getTitle()}}</a> 
    by 
    <a href="/author/{{$post->getAuthor()->getSlug()}}">
      {{$post->getAuthor()->getFirstName()}} {{$post->getAuthor()->getLastName()}}
    </a>
    <br>
  @endforeach

  @if (!is_null($previousPage))
    <a href="/blog/p/{{$previousPage}}">Prev</a>
  @endif
  @if (!is_null($nextPage))
    <a href="/blog/p/{{$nextPage}}">Next</a>
  @endif
@stop