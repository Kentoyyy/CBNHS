@extends('layouts.admin-layout')
<link rel="shortcut icon" href="{{ asset('images/logoschool.png') }}">

@section('title', 'User Management')

@section('content')
<div class="admin-container">
    <div class="content-wrapper">
        <h1 class="page-title">User Management</h1>

        <!-- Search and Filter -->
        <div class="search-filter mb-4">
            <input type="text" class="form-control search-input" placeholder="Search Users">
            <select class="form-control filter-select">
                <option value="">Filter by Role</option>
                <option value="admin">Admin</option>
                <option value="teacher">Teacher</option>
                <option value="student">Student</option>
            </select>
            <button class="btn btn-primary">Add User</button>
        </div>

        <!-- User Stats -->
        <div class="user-stats mb-4">
            <div class="stat-item">
                <h2>Total Users</h2>
                <p>1,234</p>
            </div>
            <div class="stat-item">
                <h2>Active Users</h2>
                <p>1,100</p>
            </div>
            <div class="stat-item">
                <h2>Inactive Users</h2>
                <p>134</p>
            </div>
        </div>

        <!-- User Table -->
        <div class="table-responsive">
            <table class="table table-hover table-sm">
                <thead>
                    <tr>
                        <th scope="col" class="small-col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        <th scope="col">Status</th>
                        <th scope="col" class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Example of user row -->
                    <tr>
                        <th scope="row">1</th>
                        <td>John Doe</td>
                        <td>john.doe@example.com</td>
                        <td>Teacher</td>
                        <td><span class="badge badge-success">Active</span></td>
                        <td class="text-center">
                            <a href="#" class="btn btn-sm btn-outline-primary">Edit</a>
                            <a href="#" class="btn btn-sm btn-outline-danger">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>John Diw</td>
                        <td>john.doe@example.com</td>
                        <td>Teacher</td>
                        <td><span class="badge badge-success">Active</span></td>
                        <td class="text-center">
                            <a href="#" class="btn btn-sm btn-outline-primary">Edit</a>
                            <a href="#" class="btn btn-sm btn-outline-danger">Delete</a>
                        </td>
                    </tr>
                    <!-- Repeat for each user -->
                </tbody>
            </table>
        </div>
    </div>
</div>

<style>
    body {
        background-color: #f8f9fa;
        font-family: 'Arial', sans-serif;
        color: #333;
    }

    .admin-container {
        padding: 15px;
    }

    .content-wrapper {
        padding: 15px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .page-title {
        font-size: 24px;
        font-weight: 600;
        color: #007bff;
        margin-bottom: 20px;
    }

    .search-filter {
        display: flex;
        gap: 10px;
        align-items: center;
        margin-bottom: 20px;
    }

    .search-input, .filter-select {
        flex: 1;
        padding: 8px 12px;
        border: 1px solid #ddd;
        border-radius: 4px;
        font-size: 14px;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        color: #fff;
        padding: 8px 12px;
        border-radius: 4px;
        font-size: 14px;
    }

    .user-stats {
        display: flex;
        gap: 20px;
        justify-content: space-between;
    }

    .stat-item {
        flex: 1;
        background-color: #f1f1f1;
        padding: 20px;
        border-radius: 8px;
        text-align: center;
    }

    .stat-item h2 {
        margin-bottom: 8px;
        font-size: 18px;
        color: #333;
    }

    .stat-item p {
        font-size: 1.5rem;
        color: #007bff;
        font-weight: 600;
    }

    .table {
        margin-top: 20px;
        font-size: 14px;
        border-collapse: collapse;
    }

    .small-col {
        width: 50px;
    }

    .table th, .table td {
        vertical-align: middle;
        padding: 12px;
    }

    .table th {
        background-color: #f8f9fa;
        font-weight: 600;
        color: #6c757d;
    }

    .table td {
        border-bottom: 1px solid #ddd;
    }

    .table-hover tbody tr:hover {
        background-color: #f1f3f5;
    }

    .badge-success {
        background-color: #28a745;
        font-size: 12px;
        padding: 4px 8px;
        border-radius: 12px;
        color: #fff;
    }

    .btn-outline-primary, .btn-outline-danger {
        padding: 6px 12px;
        font-size: 12px;
        border-radius: 4px;
    }

    .btn-outline-primary {
        border-color: #007bff;
        color: #007bff;
    }

    .btn-outline-primary:hover {
        background-color: #007bff;
        color: #fff;
    }

    .btn-outline-danger {
        border-color: #dc3545;
        color: #dc3545;
    }

    .btn-outline-danger:hover {
        background-color: #dc3545;
        color: #fff;
    }
</style>
@endsection
