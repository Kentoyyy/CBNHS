@extends('home-master')

@section('title', 'CBNHS')
<link rel="shortcut icon" href="{{ asset('images/logoschool.png') }}">
@section('style')

@endsection

@section('content')
@include('nav.topnav')
@include('nav.personnel.admin')




@endsection

@section('scripts')

@endsection

@section('footer')
    @include('partials.footer')
@endsection