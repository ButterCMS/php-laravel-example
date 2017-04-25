@extends('master')

@section('pageTitle', 'Tags')

@section('content')
  <h2>Tags</h2>

  @foreach ($tags as $tag)
    <a href="/tag/{{urlencode($tag->getSlug())}}">{{$tag->getName()}}</a>
    <br />
  @endforeach
@stop