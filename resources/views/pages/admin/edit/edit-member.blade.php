@extends('layouts.admin-layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Faculty Member</div>

                    <div class="card-body">
                        <form action="{{ route('admin.facultymanagement.update', $facultyMember->id) }}" method="post">
                            @csrf
                            @method('PUT')

                            <!-- Form fields here -->
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $facultyMember->name }}">
                            </div>

                            <div class="form-group">
                                <label for="position">Position:</label>
                                <input type="text" class="form-control" id="position" name="position" value="{{ $facultyMember->position }}">
                            </div>

                            <div class="form-group">
                                <label for="image">Image:</label>
                                <input type="file" class="form-control" id="image" name="image">
                                @if($facultyMember->image)
                                    <img src="{{ asset('storage/' . $facultyMember->image) }}" alt="Faculty Member Image" width="100">
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="description">Description:</label>
                                <textarea class="form-control" id="description" name="description">{{ $facultyMember->description }}</textarea>
                            </div>

                            <!-- Add more form fields as needed -->

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection