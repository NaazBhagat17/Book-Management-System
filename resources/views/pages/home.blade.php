@extends('layouts.app')
@section('content')
    <h1>{{$cms->title}}</h1>
    <div>{!! $cms->content!!}</div>
@endsection