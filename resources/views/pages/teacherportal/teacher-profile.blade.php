@extends('layouts.teacherportal-layout')
<link rel="shortcut icon" href="{{ asset('images/logoschool.png') }}">

@section('title', 'My Profile')
@section('content')
<div class="teacher-profile">
    <h1>Teacher Profile</h1>

    <div class="profile-info">
        <div class="profile-picture">
            <img src="{{ asset('images/profile-placeholder.png') }}" alt="Profile Picture">
        </div>
        <div class="profile-details">
            <h2>{{ $teacher->name }}</h2>
            <p><strong>Email:</strong> {{ $teacher->email }}</p>
            <p><strong>Phone:</strong> {{ $teacher->phone }}</p>
            <p><strong>Department:</strong> {{ $teacher->department }}</p>
            <p><strong>Position:</strong> {{ $teacher->position }}</p>
            <p><strong>Bio:</strong> {{ $teacher->bio }}</p>
        </div>
    </div>

    <div class="edit-profile">
        <button class="btn-action">Edit Profile</button>
    </div>
</div>

<style>
.teacher-profile {
    padding: 20px;
    background-color: #f9fafb;
    color: #2d3748;
    font-family: 'Roboto', sans-serif;
    border-radius: 8px;
}

.teacher-profile h1 {
    font-size: 24px;
    margin-bottom: 20px;
    font-weight: 700;
    color: #1a202c;
}

.profile-info {
    display: flex;
    align-items: center;
    gap: 20px;
    margin-bottom: 20px;
}

.profile-picture img {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    object-fit: cover;
}

.profile-details {
    flex: 1;
}

.profile-details h2 {
    font-size: 20px;
    margin-bottom: 10px;
    color: #2d3748;
}

.profile-details p {
    font-size: 14px;
    margin: 5px 0;
}

.profile-details strong {
    color: #3182ce;
}

.edit-profile {
    text-align: center;
}

.btn-action {
    display: inline-block;
    padding: 10px 20px;
    font-size: 14px;
    color: #ffffff;
    background-color: #3182ce;
    border-radius: 6px;
    border: none;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn-action:hover {
    background-color: #2c5282;
}
</style>
@endsection
