@extends('master')

@section('pageTitle', $name)

@section('content')
  <h2>Widget Store - {{$name}}</h2>

  <img src="{{$featureImage}}" />
  <br />

  {!! $description !!}

@stop