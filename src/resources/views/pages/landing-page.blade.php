@extends('linky-theme::layout.app')
@section('title')
{{$title}}
@endsection
@section('mainContent')

@include('linky-theme::components.linky-logo')
@include('linky-theme::components.linky-list-link')

@endsection
