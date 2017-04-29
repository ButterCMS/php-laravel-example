@extends('master')

@section('pageTitle', $name)

@section('content')
  <h2>{{$name}}</h2>

  <img src="{{$featureImage}}" />
  <br />

  {!! $description !!}

@stop
