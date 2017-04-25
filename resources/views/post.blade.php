@extends('master')

@section('pageTitle', $title)

@section('content')

  <!-- Post title -->
  <h2>{{$title}}</h2>


  <!-- Publish date -->
  Published {{$published}} 

  @if (count($categories) > 0)  
    in
  @endif

  <!-- Post categories -->
  @foreach ($categories as $category)
    <a href="/category/{{$category->getSlug()}}">{{$category->getName()}}</a>
  @endforeach

  <br />

  <!-- Post author -->
  <a href="/author/{{$author->getSlug()}}">
    {{$author->getFirstName()}} {{$author->getLastName()}}
  </a>

  <br />

  <div>
    {!! $body !!}
  </div>
@stop