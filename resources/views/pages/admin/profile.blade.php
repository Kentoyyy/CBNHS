@extends('layouts.admin-layout')
<link rel="shortcut icon" href="{{ asset('images/logoschool.png') }}">

@section('title', 'Admin Profile')

@section('content')
<div class="admin-container">
    <div class="content-wrapper">
        <h1 class="page-title">Admin Profile</h1>

        <!-- Profile Overview -->
        <div class="card profile-overview mb-4">
            <div class="card-body">
                <div class="profile-header mb-4">
                    <div class="profile-avatar">
                        <img src="{{ asset('images/facultyboy.png') }}" alt="Admin Avatar">
                    </div>
                    <div class="profile-details">
                        <h2>John Doe</h2>
                        <p class="text-muted">johndoe@example.com</p>
                        <p class="text-muted">Role: Admin</p>
                    </div>
                </div>

                <form class="profile-edit-form">
                    <div class="form-group mb-3">
                        <label for="edit-name">Name</label>
                        <input type="text" id="edit-name" class="form-control" value="John Doe" placeholder="Enter your name">
                    </div>
                    <div class="form-group mb-3">
                        <label for="edit-email">Email</label>
                        <input type="email" id="edit-email" class="form-control" value="johndoe@example.com" placeholder="Enter your email">
                    </div>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </form>
            </div>
        </div>

        <!-- Account Settings -->
        <div class="card account-settings mb-4">
            <div class="card-body">
                <h2 class="card-title">Account Settings</h2>
                <form class="settings-form">
                    <div class="form-group mb-3">
                        <label for="settings-language">Preferred Language</label>
                        <select id="settings-language" class="form-control">
                            <option value="en" selected>English</option>
                            <option value="es">Spanish</option>
                            <option value="fr">French</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="settings-timezone">Timezone</label>
                        <select id="settings-timezone" class="form-control">
                            <option value="UTC" selected>UTC</option>
                            <option value="America/New_York">New York</option>
                            <option value="Europe/London">London</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Settings</button>
                </form>
            </div>
        </div>

        <!-- Change Password -->
        <div class="card change-password">
            <div class="card-body">
                <h2 class="card-title">Change Password</h2>
                <form class="password-change-form">
                    <div class="form-group mb-3">
                        <label for="current-password">Current Password</label>
                        <input type="password" id="current-password" class="form-control" placeholder="Enter current password">
                    </div>
                    <div class="form-group mb-3">
                        <label for="new-password">New Password</label>
                        <input type="password" id="new-password" class="form-control" placeholder="Enter new password">
                    </div>
                    <div class="form-group mb-3">
                        <label for="confirm-password">Confirm New Password</label>
                        <input type="password" id="confirm-password" class="form-control" placeholder="Confirm new password">
                    </div>
                    <button type="submit" class="btn btn-primary">Change Password</button>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
    body {
        background-color: #f5f7f9;
        font-family: 'Arial', sans-serif;
        color: #333;
    }

    .admin-container {
        padding: 30px;
        max-width: 1200px;
        margin: 0 auto;
    }

    .content-wrapper {
        background-color: #fff;
        border-radius: 12px;
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        padding: 20px;
    }

    .page-title {
        font-size: 32px;
        font-weight: 700;
        color: #2a3b6b;
        margin-bottom: 20px;
    }

    .card {
        border: none;
        border-radius: 12px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
    }

    .card-body {
        padding: 30px;
    }

    .profile-header {
        display: flex;
        align-items: center;
        border-bottom: 2px solid #ddd;
        padding-bottom: 20px;
        margin-bottom: 20px;
    }

    .profile-avatar {
        margin-right: 20px;
    }

    .profile-avatar img {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        border: 2px solid #2a3b6b;
    }

    .profile-details h2 {
        margin: 0;
        font-size: 28px;
        color: #2a3b6b;
    }

    .profile-details p {
        margin: 5px 0;
        color: #555;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        font-size: 15px;
        color: #666;
        margin-bottom: 8px;
    }

    .form-control {
        border: 1px solid #ddd;
        border-radius: 8px;
        font-size: 15px;
        padding: 12px;
        transition: border-color 0.3s, box-shadow 0.3s;
    }

    .form-control:focus {
        border-color: #2a3b6b;
        box-shadow: 0 0 0 0.2rem rgba(42, 59, 107, 0.2);
    }

    .btn-primary {
        background-color: #2a3b6b;
        border-color: #2a3b6b;
        color: #fff;
        padding: 12px 20px;
        border-radius: 8px;
        font-size: 15px;
        transition: background-color 0.3s, border-color 0.3s;
    }

    .btn-primary:hover {
        background-color: #1d2a48;
        border-color: #1d2a48;
    }
</style>
@endsection
