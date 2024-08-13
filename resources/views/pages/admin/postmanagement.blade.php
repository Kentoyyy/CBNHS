@extends('layouts.admin-layout')
<link rel="shortcut icon" href="{{ asset('images/logoschool.png') }}">

@section('title', 'Post Management')

@section('content')
<div class="admin-container">
    <div class="content-wrapper">
        <h1 class="page-title">Post Management</h1>

        <!-- Create Post Form -->
        <div class="create-post mb-4">
            <h2>Create New Post</h2>
            <form class="post-form">
                <div class="form-group">
                    <label for="post-title">Post Title</label>
                    <input type="text" id="post-title" class="form-control" placeholder="Enter post title">
                </div>
                <div class="form-group">
                    <label for="post-content">Post Content</label>
                    <textarea id="post-content" class="form-control" rows="4" placeholder="Enter post content"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Create Post</button>
            </form>
        </div>

        <!-- Post Table -->
        <div class="table-responsive mt-4">
            <table class="table table-hover table-sm">
                <thead>
                    <tr>
                        <th scope="col" class="small-col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Content</th>
                        <th scope="col" class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Example of post row -->
                    <tr class="post-row">
                        <th scope="row">1</th>
                        <td>Sample Post</td>
                        <td>This is a sample post content.</td>
                        <td class="text-center">
                            <a href="#" class="btn btn-sm btn-outline-primary"><i class="fa fa-edit"></i> Edit</a>
                            <a href="#" class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i> Delete</a>
                        </td>
                    </tr>
                    <!-- Repeat for each post -->
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
        color: #2a3b6b;
        margin-bottom: 20px;
    }

    .create-post {
        margin-bottom: 20px;
    }

    .create-post h2 {
        font-size: 20px;
        font-weight: 500;
        color: #333;
        margin-bottom: 15px;
    }

    .post-form .form-group {
        margin-bottom: 15px;
    }

    .post-form .form-group label {
        display: block;
        font-size: 14px;
        color: #666;
        margin-bottom: 5px;
    }

    .post-form .form-control {
        border: 1px solid #ddd;
        border-radius: 4px;
        font-size: 14px;
        padding: 10px;
    }

    .btn-primary {
        background-color: #2a3b6b;
        border-color: #2a3b6b;
        color: #fff;
        padding: 10px 15px;
        border-radius: 4px;
        font-size: 14px;
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

    .post-row {
        border-radius: 8px;
        transition: all 0.3s ease;
    }

    .post-row:hover {
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
