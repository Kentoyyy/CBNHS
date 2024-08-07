@extends('home-master')

@section('title', 'Superintendent Corner')
<link rel="shortcut icon" href="{{ asset('images/logoschool.png') }}">
@section('style')

@endsection

@section('content')
@include('nav.topnav')
@include('nav.intendent')




@endsection

@section('scripts')

@endsection

@section('footer')
    @include('partials.footer')
@endsection