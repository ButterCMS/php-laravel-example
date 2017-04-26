@extends('master')

@section('pageTitle', $post->getSeoTitle())
@section('metaDescription', $post->getMetaDescription())

@section('content')

  <!-- Post title -->
  <h2>{{$post->getTitle()}}</h2>


  <!-- Publish date -->
  Published {{$published}} 

  @if (count($post->getCategories()) > 0)  
    in
  @endif

  <!-- Post categories -->
  @foreach ($post->getCategories() as $category)
    <a href="/category/{{$category->getSlug()}}">{{$category->getName()}}</a>
  @endforeach

  <br />

  <!-- Post author -->
  <a href="/author/{{$post->getAuthor()->getSlug()}}">
    {{$post->getAuthor()->getFirstName()}} {{$post->getAuthor()->getLastName()}}
  </a>

  <br />

  <div>
    {!! $post->getBody() !!}
  </div>
@stop