@extends('layouts.admin-layout')

@section('title', 'Admin Slide Management')

@section('content')
    <div class="container">
        <h1 class="mb-4">Manage Slides</h1>
        <div class="row">
            <div class="col-md-6">
                <form action="{{ route('admin.slide.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="image">Image:</label>
                        <input type="file" name="image" id="image" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Slide</button>
                </form>
            </div>
        </div>

        <h2 class="mt-4">Existing Slides</h2>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($slides as $slide)
                    <tr>
                        <td><img src="{{ asset('storage/' . $slide->image) }}" alt="Slide Image" width="150"></td>
                        <td>
                            <form action="{{ route('admin.slide.destroy', $slide->id) }}" method="post">
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
@endsection