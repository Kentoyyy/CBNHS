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
                <!-- Trigger the Add Student Modal -->
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#addStudentModal">
                    Add Student
                </a>
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
                                        <td>{{ $student->accountDetail->name ?? 'N/A' }}</td>
                                        <td>{{ $student->email }}</td>
                                        <td class="text-center">
                                            <!-- Trigger Edit Student Modal -->
                                            <a href="#" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#editStudentModal{{ $student->id }}">
                                                <i class="fa fa-edit"></i> Edit
                                            </a>
                                            <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>

                                    <!-- Edit Student Modal -->
                                    <div class="modal fade" id="editStudentModal{{ $student->id }}" tabindex="-1" role="dialog" aria-labelledby="editStudentModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editStudentModalLabel">Edit Student</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('students.update', $student->id) }}" method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="form-group">
                                                            <label for="name">Name</label>
                                                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $student->accountDetail->name) }}" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="email">Email</label>
                                                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $student->email) }}" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="learner_id">Student ID</label>
                                                            <input type="text" class="form-control" id="learner_id" name="learner_id" value="{{ old('learner_id', $student->learner_id) }}" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="phone_number">Phone Number</label>
                                                            <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{ old('phone_number', $student->accountDetail->phone_number) }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="password">Password</label>
                                                            <input type="password" class="form-control" id="password" name="password" placeholder="Leave blank to keep current password">
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">Update</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Manage Teacher Accounts -->
        <div class="card manage-teachers">
            <div class="card-header">
                <h2>Teacher Accounts</h2>
                <!-- Trigger the Add Teacher Modal -->
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#addTeacherModal">
                    Add Teacher
                </a>
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
                                        <td>{{ $teacher->accountDetail->name ?? 'N/A' }}</td>
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
                <h5 class="modal-title" id="addStudentModalLabel">Add Student</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('students.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="learner_id">Student ID</label>
                        <input type="text" class="form-control" id="learner_id" name="learner_id" required>
                    </div>
                    <div class="form-group">
                        <label for="phone_number">Phone Number</label>
                        <input type="text" class="form-control" id="phone_number" name="phone_number" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Student</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Add Teacher Modal -->
<div class="modal fade" id="addTeacherModal" tabindex="-1" role="dialog" aria-labelledby="addTeacherModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addTeacherModalLabel">Add Teacher</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('teachers.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="teacher_id">Teacher ID</label>
                        <input type="text" class="form-control" id="teacher_id" name="teacher_id" required>
                    </div>
                    <div class="form-group">
                        <label for="phone_number">Phone Number</label>
                        <input type="text" class="form-control" id="phone_number" name="phone_number" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Teacher</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<!-- Include Bootstrap JS -->
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
@endpush
