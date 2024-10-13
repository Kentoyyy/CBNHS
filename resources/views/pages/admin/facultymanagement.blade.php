@extends('layouts.admin-layout')

@section('content')
<div class="container">
    <div class="faculty-management-section">
        <div class="faculty-management-content">
            <h2>Faculty Management</h2>

            <!-- Add Faculty Member Form -->
            <form method="POST" action="{{ route('admin.facultymanagement.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="position">Position:</label>
                    <input type="text" class="form-control" id="position" name="position" required>
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea class="form-control" id="description" name="description" required></textarea>
                </div>
                <div class="form-group">
                    <label for="image">Image:</label>
                    <input type="file" class="form-control" id="image" name="image" required>
                    <small>Image size: 200x200 pixels (max 1MB)</small>
                </div>
                <button type="submit" class="btn btn-primary">Add Faculty Member</button>
            </form>

            <!-- Faculty Members List -->
            @if ($facultyMembers->count() > 0)
                @foreach ($facultyMembers as $facultyMember)
                    <div class="faculty-member">
                        <h3>{{ $facultyMember->name }}</h3>
                        <p><strong>Position:</strong> {{ $facultyMember->position }}</p>
                        <p>{{ $facultyMember->description }}</p>
                        <img src="{{ asset('storage/' . $facultyMember->image) }}" alt="Faculty Member Image" width="100" height="100">
                        <form action="{{ route('admin.facultymanagement.destroy', $facultyMember->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Remove</button>
                        </form>
                        <button class="btn btn-primary" onclick="location.href='{{ route('admin.facultymanagement.update', $facultyMember->id) }}'">Edit</button>
                    </div>
                @endforeach
            @else
                <p>No faculty members found.</p>
            @endif
        </div>
    </div>
</div>
@endsection