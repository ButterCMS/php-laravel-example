@extends('master')

@section('pageTitle', $category->getName())

@section('content')
  <h2>{{$category->getName()}}</h2>

  @if (is_array($posts))
    @foreach ($posts as $post)
      <a href="/blog/{{urlencode($post->getSlug())}}">{{$post->getTitle()}}</a> 
      by
      <a href="/author/{{urlencode($post->getAuthor()->getSlug())}}">
        {{$post->getAuthor()->getFirstName()}} {{$post->getAuthor()->getLastName()}}
      </a>
      <br>
    @endforeach
  @endif

  @if (!is_null($previousPage))
    <a href="/category/{{urlencode($category->getSlug())}}/p/{{$previousPage}}">Prev</a>
  @endif
  @if (!is_null($nextPage))
    <a href="/category/{{urlencode($category->getSlug())}}/p/{{$nextPage}}">Next</a>
  @endif
@stop