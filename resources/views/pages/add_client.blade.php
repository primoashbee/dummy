@extends('layouts.master')

@section('title','Add Client')
@section('css')
<link href="{{asset('\css\bootstrap.css')}}">
@endsection

@section('sidebar')
    @parent
    <p>Appended to master</p>
@endsection

@section('content')
    <h1>Content</h1>
@endsection
