@extends('home-master')

@section('title', 'Home')
<link rel="shortcut icon" href="{{ asset('images/logoschool.png') }}">
@section('style')

@endsection

@section('content')
@include('nav.topnav')
@include('nav.mission-bar')




@endsection

@section('scripts')

@endsection

@section('footer')
    @include('partials.footer')
@endsection