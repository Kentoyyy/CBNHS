<div class="container">
    <h1 class="form-title">Edit Student Account</h1>
    
    <form action="{{ route('students.update', $student->id) }}" method="POST" class="edit-form">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $accountDetail->name) }}">
        </div>

        <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $student->email) }}">
        </div>
        
        <div class="form-group">
            <label for="phone_number" class="form-label">Phone Number</label>
            <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{ old('phone_number', $accountDetail->phone_number) }}">
        </div>
        
        <div class="form-group">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Leave blank to keep current password">
        </div>

        <button type="submit" class="btn btn-primary form-submit-btn">Update</button>
    </form>
</div>

<!-- Minimalist styling for the form -->
<style>
    .container {
        max-width: 500px;
        margin: 0 auto;
        padding: 20px;
    }

    .form-title {
        font-size: 1.5rem;
        color: #0B4F91;
        font-weight: bold;
        text-align: center;
        margin-bottom: 20px;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-label {
        display: block;
        font-size: 0.875rem;
        margin-bottom: 5px;
        color: #333;
    }

    .form-control {
        width: 100%;
        padding: 10px;
        font-size: 0.875rem;
        border-radius: 4px;
        border: 1px solid #ccc;
        transition: border-color 0.3s ease;
    }

    .form-control:focus {
        border-color: #0B4F91;
        box-shadow: none;
    }

    .form-submit-btn {
        width: 100%;
        padding: 10px;
        background-color: #0B4F91;
        color: #fff;
        border: none;
        border-radius: 4px;
        font-size: 0.875rem;
        transition: background-color 0.3s ease;
    }

    .form-submit-btn:hover {
        background-color: #094070;
    }
</style>
