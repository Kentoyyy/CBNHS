@extends('layouts.admin-layout')
<link rel="shortcut icon" href="{{ asset('images/logoschool.png') }}">

@section('title', 'Account Management')
@section('content')
<div class="admin-container">
    <div class="content-wrapper">
        <h1 class="page-title">Account Management</h1>

        <!-- Manage Student Accounts -->
        <div class="card manage-students mb-4">
            <div class="card-header">
                <h2>Student Accounts</h2>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addStudentModal">
                    Add Student
                </button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <div class="card table-card">
                        <div class="card-header">
                            <h3>Student List</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover table-sm">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Student ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col" class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($students as $student)
                                    <tr class="account-row">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $student->learner_id }}</td>
                                        <td>{{ $student->name }}</td>
                                        <td>{{ $student->email }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('students.edit', $student->id) }}" class="btn btn-sm btn-outline-primary"><i class="fa fa-edit"></i> Edit</a>
                                            <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i> Delete</button>
                                            </form>
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
            </div>
        </div>

        <!-- Manage Teacher Accounts -->
        <div class="card manage-teachers">
            <div class="card-header">
                <h2>Teacher Accounts</h2>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addTeacherModal">
                    Add Teacher
                </button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <div class="card table-card">
                        <div class="card-header">
                            <h3>Teacher List</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover table-sm">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Teacher ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col" class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($teachers as $teacher)
                                    <tr class="account-row">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $teacher->learner_id }}</td>
                                        <td>{{ $teacher->name }}</td>
                                        <td>{{ $teacher->email }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('teachers.edit', $teacher->id) }}" class="btn btn-sm btn-outline-primary"><i class="fa fa-edit"></i> Edit</a>
                                            <form action="{{ route('teachers.destroy', $teacher->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- Pagination -->
                  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add Student Modal -->
<!-- (Modal content unchanged) -->

<!-- Add Teacher Modal -->
<!-- (Modal content unchanged) -->
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
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .page-title {
        margin-bottom: 20px;
        font-size: 24px;
        font-weight: bold;
    }

    .card {
        margin-bottom: 20px;
    }

    .card-header {
        background-color: #007bff;
        color: #fff;
        padding: 10px;
        border-bottom: 1px solid #ddd;
    }

    .card-header h2, .card-header h3 {
        margin: 0;
    }

    .btn-primary {
        background-color: #007bff;
        border: none;
        padding: 8px 16px;
    }

    /* Pagination Styling */
    .pagination {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }

    .pagination a {
        font-size: 14px; /* Adjust pagination size */
        padding: 6px 12px;
        color: #007bff;
        text-decoration: none;
    }

    .pagination a:hover {
        background-color: #f0f0f0;
    }

    .pagination .active a {
        font-weight: bold;
        color: white;
        background-color: #007bff;
        border-radius: 5px;
    }

    /* Remove left and right arrow styles */
    .pagination svg {
        display: none;
    }
</style>
@endsection

@section('scripts')
<script>
    $(document).ready(function () {
        $('#addStudentModal').on('shown.bs.modal', function () {
            $('#student-id').focus();
        });

        $('#addTeacherModal').on('shown.bs.modal', function () {
            $('#teacher-id').focus();
        });
    });
</script>
@endsection
