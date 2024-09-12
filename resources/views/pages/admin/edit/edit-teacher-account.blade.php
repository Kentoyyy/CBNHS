<div class="container">
    <h1>Edit Teacher Account</h1>
    
    <form action="{{ route('teachers.update', $teacher->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $accountDetail->name) }}">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $teacher->email) }}">
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <div class="form-group">
            <label for="phone_number">Phone Number</label>
            <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{ old('phone_number', $accountDetail->phone_number) }}">
        </div>

        <div class="form-group">
            <label for="position">Position</label>
            <input type="text" class="form-control" id="position" name="position" value="{{ old('position', $accountDetail->position) }}">
        </div>

        <div class="form-group">
            <label for="major">Major</label>
            <input type="text" class="form-control" id="major" name="major" value="{{ old('major', $accountDetail->major) }}">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>