@extends('layouts.admin-layout')
<link rel="shortcut icon" href="{{ asset('images/logoschool.png') }}">

@section('title', 'Account Management')
@endsection

@section('content')
<div class="admin-container">
    <div class="content-wrapper">
        <h1 class="page-title">Account Management</h1>

        <!-- Manage Student Accounts -->
        <div class="card manage-students mb-4">
            <div class="card-header">
                <h2>Student Accounts</h2>
            </div>
            <div class="card-body">
                <form class="account-form mb-4">
                    <div class="form-group">
                        <label for="student-id">Student ID</label>
                        <input type="text" id="student-id" class="form-control" placeholder="Enter student ID">
                    </div>
                    <div class="form-group">
                        <label for="student-name">Student Name</label>
                        <input type="text" id="student-name" class="form-control" placeholder="Enter student name">
                    </div>
                    <div class="form-group">
                        <label for="student-email">Student Email</label>
                        <input type="email" id="student-email" class="form-control" placeholder="Enter student email">
                    </div>
                    <button type="submit" class="btn btn-primary">Add Student</button>
                </form>

                <div class="table-responsive">
                    <table class="table table-hover table-sm">
                        <thead>
                            <tr>
                                <th scope="col" class="small-col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col" class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($students as $student)
                            <tr class="account-row">
                                <th scope="row">{{ $student->id }}</th>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->email }}</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-sm btn-outline-primary"><i class="fa fa-edit"></i> Edit</a>
                                    <a href="#" class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i> Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <!-- Pagination -->
                    {{ $students->links() }}
                </div>
            </div>
        </div>

        <!-- Manage Teacher Accounts -->
        <div class="card manage-teachers">
            <div class="card-header">
                <h2>Teacher Accounts</h2>
            </div>
            <div class="card-body">
                <form class="account-form mb-4">
                    <div class="form-group">
                        <label for="teacher-id">Teacher ID</label>
                        <input type="text" id="teacher-id" class="form-control" placeholder="Enter teacher ID">
                    </div>
                    <div class="form-group">
                        <label for="teacher-name">Teacher Name</label>
                        <input type="text" id="teacher-name" class="form-control" placeholder="Enter teacher name">
                    </div>
                    <div class="form-group">
                        <label for="teacher-email">Teacher Email</label>
                        <input type="email" id="teacher-email" class="form-control" placeholder="Enter teacher email">
                    </div>
                    <button type="submit" class="btn btn-primary">Add Teacher</button>
                </form>

                <div class="table-responsive">
                    <table class="table table-hover table-sm">
                        <thead>
                            <tr>
                                <th scope="col" class="small-col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col" class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($teachers as $teacher)
                            <tr class="account-row">
                                <th scope="row">{{ $teacher->id }}</th>
                                <td>{{ $teacher->name }}</td>
                                <td>{{ $teacher->email }}</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-sm btn-outline-primary"><i class="fa fa-edit"></i> Edit</a>
                                    <a href="#" class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i> Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <!-- Pagination -->
                    {{ $teachers->links() }}
                </div>
            </div>
        </div>
    </div>
</div
@endsection
<style>
    body {
        background-color: #f8f9fa;
        font-family: 'Arial', sans-serif;
        color: #333;
    }

    .admin-container {
        padding: 20px;
    }

    .content-wrapper {
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .page-title {
        font-size: 28px;
        font-weight: 600;
        color: #2a3b6b;
        margin: 20px;
    }

    .card {
        border: 1px solid #ddd;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .card-header {
        background-color: #2a3b6b;
        color: #fff;
        padding: 15px;
        border-top-left-radius: 8px;
        border-top-right-radius: 8px;
    }

    .card-header h2, .card-header h3 {
        margin: 0;
    }

    .card-body {
        padding: 20px;
    }

    .account-form .form-group {
        margin-bottom: 20px;
    }

    .account-form .form-group label {
        display: block;
        font-size: 14px;
        color: #666;
        margin-bottom: 8px;
    }

    .account-form .form-control {
        border: 1px solid #ddd;
        border-radius: 4px;
        font-size: 14px;
        padding: 12px;
        transition: border-color 0.2s;
    }

    .account-form .form-control:focus {
        border-color: #2a3b6b;
        box-shadow: 0 0 0 0.2rem rgba(42, 59, 107, 0.1);
    }

    .btn-primary {
        background-color: #2a3b6b;
        border-color: #2a3b6b;
        color: #fff;
        padding: 10px 15px;
        border-radius: 4px;
        font-size: 14px;
        transition: background-color 0.2s, border-color 0.2s;
    }

    .btn-primary:hover {
        background-color: #1d2a48;
        border-color: #1d2a48;
    }

    .table {
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
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .btn-outline-primary, .btn-outline-danger {
        padding: 6px 12px;
        font-size: 12px;
        border-radius: 4px;
    }

    .btn-outline-primary {
        border-color: #2a3b6b;
        color: #2a3b6b;
    }

    .btn-outline-primary:hover {
        background-color: #2a3b6b;
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

    .account-row {
        border-radius: 8px;
        transition: all 0.3s ease;
    }

    .account-row:hover {
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        background-color: #f1f3f5;
    }

    .pagination {
        display: flex;
        gap: 5px;
        font-size: 14px;
    }

    .pagination .page-link {
        border-radius: 4px;
        padding: 8px 12px;
        text-align: center;
        color: #2a3b6b;
        border: 1px solid #ddd;
        transition: background-color 0.2s, color 0.2s;
    }

    .pagination .page-item.disabled .page-link {
        cursor: not-allowed;
        color: #6c757d;
        border-color: #ddd;
    }

    .pagination .page-item.active .page-link {
        background-color: #2a3b6b;
        color: #fff;
        border-color: #007bff;
    }

    .pagination .page-link:hover {
        background-color: #e9ecef;
        color: #2a3b6b;
        border-color: #ddd;
    }
</style>
@endsection
