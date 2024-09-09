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
                                        <td>{{ $teacher->teacher_id }}</td>
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
                            {{ $teachers->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add Student Modal -->
<div class="modal fade" id="addStudentModal" tabindex="-1" role="dialog" aria-labelledby="addStudentModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addStudentModalLabel">Add New Student</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('students.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="student-id">Student ID</label>
                        <input type="text" id="student-id" name="student_id" class="form-control" placeholder="Enter student ID" value="{{ old('student_id') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="student-name">Student Name</label>
                        <input type="text" id="student-name" name="student_name" class="form-control" placeholder="Enter student name" value="{{ old('student_name') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="student-email">Student Email</label>
                        <input type="email" id="student-email" name="student_email" class="form-control" placeholder="Enter student email" value="{{ old('student_email') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="student-password">Password</label>
                        <input type="password" id="student-password" name="student_password" class="form-control" placeholder="Enter password" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add Student</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Add Teacher Modal -->
<div class="modal fade" id="addTeacherModal" tabindex="-1" role="dialog" aria-labelledby="addTeacherModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addTeacherModalLabel">Add New Teacher</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('teachers.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="teacher-id">Teacher ID</label>
                        <input type="text" id="teacher-id" name="teacher_id" class="form-control" placeholder="Enter teacher ID" value="{{ old('teacher_id') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="teacher-name">Teacher Name</label>
                        <input type="text" id="teacher-name" name="teacher_name" class="form-control" placeholder="Enter teacher name" value="{{ old('teacher_name') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="teacher-email">Teacher Email</label>
                        <input type="email" id="teacher-email" name="teacher_email" class="form-control" placeholder="Enter teacher email" value="{{ old('teacher_email') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="teacher-password">Password</label>
                        <input type="password" id="teacher-password" name="teacher_password" class="form-control" placeholder="Enter password" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add Teacher</button>
                </div>
            </form>
        </div>
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
