@extends('master')

@section('pageTitle', 'Categories')

@section('content')
  <h2>Categories</h2>

  @foreach ($categories as $category)
    <a href="/category/{{urlencode($category->getSlug())}}">{{$category->getName()}}</a>
    <br />
  @endforeach
@stop