@extends('layouts.admin-layout')
<link rel="shortcut icon" href="{{ asset('images/logoschool.png') }}">

@section('title', 'Subject Management')

@section('content')
<div class="admin-container">
    <div class="content-wrapper">
        <h1 class="page-title">Subject Management</h1>

        <!-- Search and Filter -->
        <div class="search-filter mb-4">
            <input type="text" class="form-control search-input" placeholder="Search Subjects">
            <button class="btn btn-primary">Add Subject</button>
        </div>

        <!-- Subject Stats -->
        <div class="subject-stats mb-4">
            <div class="stat-item">
                <h2>Total Subjects</h2>
                <p>25</p>
            </div>
            <div class="stat-item">
                <h2>Active Subjects</h2>
                <p>20</p>
            </div>
            <div class="stat-item">
                <h2>Inactive Subjects</h2>
                <p>5</p>
            </div>
        </div>

        <!-- Subject Table -->
        <div class="table-responsive">
            <table class="table table-hover table-sm">
                <thead>
                    <tr>
                        <th scope="col" class="small-col">#</th>
                        <th scope="col">Subject Name</th>
                        <th scope="col">Subject Code</th>
                        <th scope="col">Description</th>
                        <th scope="col">Number of Students</th>
                        <th scope="col" class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Example of subject row -->
                    <tr class="subject-row">
                        <th scope="row">1</th>
                        <td>Mathematics</td>
                        <td>MTH101</td>
                        <td>Basic Mathematics</td>
                        <td>120</td>
                        <td class="text-center">
                            <a href="#" class="btn btn-sm btn-outline-primary"><i class="fa fa-edit"></i> Edit</a>
                            <a href="#" class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i> Delete</a>
                        </td>
                    </tr>
                    <tr class="subject-row">
                        <th scope="row">2</th>
                        <td>Physics</td>
                        <td>PHY101</td>
                        <td>Fundamentals of Physics</td>
                        <td>95</td>
                        <td class="text-center">
                            <a href="#" class="btn btn-sm btn-outline-primary"><i class="fa fa-edit"></i> Edit</a>
                            <a href="#" class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i> Delete</a>
                        </td>
                    </tr>
                    <!-- Repeat for each subject -->
                </tbody>
            </table>

            <!-- Pagination -->
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center mt-4">
                    <li class="page-item disabled">
                        <span class="page-link">Previous</span>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
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

    .search-input {
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

    .subject-stats {
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
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
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

    .subject-row {
        border-radius: 8px;
        transition: all 0.3s ease;
    }

    .subject-row:hover {
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
        color: #007bff;
        border: 1px solid #ddd;
        transition: background-color 0.2s, color 0.2s;
    }

    .pagination .page-item.disabled .page-link {
        cursor: not-allowed;
        color: #6c757d;
        border-color: #ddd;
    }

    .pagination .page-item.active .page-link {
        background-color: #007bff;
        color: #fff;
        border-color: #007bff;
    }

    .pagination .page-link:hover {
        background-color: #e9ecef;
        color: #0056b3;
        border-color: #ddd;
    }
</style>
@endsection
