@extends('layouts.admin-layout')

@section('title', 'Edit Account')

@section('content')
<div class="container">
    <h1>Edit Account</h1>
    <form action="{{ route('accountmanagement.update', $account->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" class="form-control" value="{{ old('email', $account->email) }}" required>
        </div>
        <div class="form-group">
            <label for="password">Password (leave blank to keep current password)</label>
            <input type="password" id="password" name="password" class="form-control">
        </div>
        <div class="form-group">
            <label for="learner_id">Learner ID</label>
            <input type="text" id="learner_id" name="learner_id" class="form-control" value="{{ old('learner_id', $account->learner_id) }}" required>
        </div>
        <div class="form-group">
            <label for="roles">Role</label>
            <select id="roles" name="roles" class="form-control" required>
                <option value="student" {{ old('roles', $account->roles) === 'student' ? 'selected' : '' }}>Student</option>
                <option value="teacher" {{ old('roles', $account->roles) === 'teacher' ? 'selected' : '' }}>Teacher</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update Account</button>
    </form>
</div>
@endsection
