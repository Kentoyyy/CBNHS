@extends('layouts.teacherportal-layout')
<link rel="shortcut icon" href="{{ asset('images/logoschool.png') }}">

@section('title', 'My Profile')
@section('content')
<div class="profile-container">
    <div class="profile-header">
        <img src="{{ asset('images/facultyboy.png') }}" alt="Profile Picture" class="profile-picture">
        <div class="profile-info">
            <h1>John Doe</h1>
            <p><strong>Email:</strong> john.doe@example.com</p>
            <p><strong>Phone:</strong> +123 456 7890</p>
            <p><strong>Department:</strong> Mathematics</p>
            <p><strong>Position:</strong> Senior Teacher</p>
            <p><strong>Years of Experience:</strong> 12</p>
            <p><strong>Qualifications:</strong> MSc in Mathematics, B.Ed.</p>
        </div>
        <button class="btn-edit">Edit Profile</button>
    </div>
    <div class="profile-bio">
        <h2>Biography</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum. Curabitur nec felis nec lorem posuere luctus et vel tortor. Sed euismod purus at nisl varius, a posuere arcu fermentum. Suspendisse potenti.</p>
    </div>
</div>

<style>
.profile-container {
    padding: 30px;
    background-color: #ffffff;
    border-radius: 12px;
    max-width: 900px;
    margin: auto;
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
}

.profile-header {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
    border-bottom: 2px solid #e2e8f0;
    padding-bottom: 20px;
}

.profile-picture {
    width: 140px;
    height: 140px;
    border-radius: 50%;
    object-fit: cover;
    margin-right: 20px;
    border: 3px solid #3182ce;
}

.profile-info {
    flex: 1;
}

.profile-info h1 {
    font-size: 26px;
    margin: 0;
    color: #2d3748;
}

.profile-info p {
    font-size: 16px;
    margin: 5px 0;
    color: #4a5568;
}

.btn-edit {
    background-color: #3182ce;
    color: white;
    border: none;
    padding: 12px 24px;
    font-size: 16px;
    border-radius: 8px;
    cursor: pointer;
    transition: background-color 0.3s ease, transform 0.2s ease;
    align-self: flex-start;
}

.btn-edit:hover {
    background-color: #2c5282;
    transform: scale(1.05);
}

.profile-bio {
    margin-top: 20px;
}

.profile-bio h2 {
    font-size: 22px;
    margin-bottom: 10px;
    color: #2d3748;
    border-bottom: 2px solid #e2e8f0;
    padding-bottom: 5px;
}

.profile-bio p {
    font-size: 16px;
    color: #4a5568;
    line-height: 1.6;
}
</style>
@endsection
