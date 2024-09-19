<style>
    .container {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
        color: #0B4F91;
        font-size: 24px;
        margin-bottom: 20px;
        text-align: center;
        font-weight: 600;
    }

    .form-group {
        margin-bottom: 15px;
    }

    label {
        color: #333;
        font-weight: 500;
        display: block;
        margin-bottom: 5px;
        font-size: 14px;
    }

    .form-control {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 14px;
        background-color: #fff;
    }

    .form-control:focus {
        outline: none;
        border-color: #0B4F91;
        box-shadow: 0 0 5px rgba(11, 79, 145, 0.3);
    }

    .btn-primary {
        background-color: #0B4F91;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 14px;
        transition: background-color 0.3s ease;
        width: 100%;
        margin-top: 20px;
    }

    .btn-primary:hover {
        background-color: #094070;
    }
</style>

<div class="container">
    <h1>Add Student</h1>
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
