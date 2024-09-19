@extends('layouts.admin-layout')
@section('title', 'Add Teacher')
@section('content')
<div class="form-container">
    <h1 class="form-title">Add Teacher</h1>
    <form action="{{ route('teachers.store') }}" method="POST" class="minimal-form">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="teacher_id">Teacher ID</label>
            <input type="number" id="teacher_id" name="teacher_id" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="phone_number">Phone Number</label>
            <input type="text" id="phone_number" name="phone_number" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Teacher</button>
    </form>
@endsection

@section('style')
<style>
    .form-container {
        max-width: 500px;
        margin: auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .form-title {
        font-size: 24px;
        font-weight: bold;
        color: #0B4F91;
        margin-bottom: 20px;
        text-align: center;
    }

    .minimal-form .form-group {
        margin-bottom: 15px;
    }

    .minimal-form .form-group label {
        display: block;
        font-size: 14px;
        color: #333;
        margin-bottom: 5px;
    }

    .minimal-form .form-control {
        width: 100%;
        padding: 8px;
        border: 1px solid #ddd;
        border-radius: 4px;
        font-size: 14px;
    }

    .btn-primary {
        display: block;
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 4px;
        background-color: #0B4F91;
        color: #fff;
        font-size: 16px;
        cursor: pointer;
    }

    .btn-primary:hover {
        background-color: #094a7a;
    }
</style>
@endsection
