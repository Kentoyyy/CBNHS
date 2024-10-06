@extends('layouts.admin-layout')
<link rel="shortcut icon" href="{{ asset('images/logoschool.png') }}">

@section('title', 'Post Management')

@section('content')
<div class="admin-container">
    <div class="content-wrapper">
        <h1 class="page-title">Post Management</h1>

        @if(isset($post))
            <form method="POST" action="{{ route('posts.update', $post->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" name="post_id" value="{{ $post->id }}">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" id="title" name="title" class="form-control" value="{{ $post->title }}">
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea id="content" name="content" class="form-control">{{ $post->content }}</textarea>
                </div>
                <div class="form-group">
                    <label for="link">Link</label>
                    <input type="text" id="link" name="link" class="form-control" value="{{ $post->link }}">
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" id="image" name="image" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Update Post</button>
            </form>
        @else
        <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
        @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea id="content" name="content" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="link">Link</label>
                <input type="text" id="link" name="link" class="form-control">
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" id="image" name="image" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Create Post</button>
        </form>
        @endif

        <h2 class="page-title">Posts</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Link</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->content }}</td>
                        <td>{{ $post->link }}</td>
                        <td>
                            @if($post->image)
                                <img src="{{ asset('storage/' . $post->image) }}" alt="Post Image" width="100">
                            @else
                                <p>No Image</p>
                            @endif
                        </td>
                        <td>
                            <form method="POST" action="{{ route('posts.destroy', $post->id) }}" style="display: inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
@section('style')
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

    .card-header h2 {
 margin: 0;
    }

    .card-body {
        padding: 20px;
    }

    .create-post .post-form .form-group {
        margin-bottom: 20px;
    }

    .post-form .form-group label {
        display: block;
        font-size: 14px;
        color: #666;
        margin-bottom: 8px;
    }

    .post-form .form-control {
        border: 1px solid #ddd;
        border-radius: 4px;
        font-size: 14px;
        padding: 12px;
        transition: border-color 0.2s;
    }

    .post-form .form-control:focus {
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
