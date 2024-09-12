<form action="{{ route('teachers.store') }}" method="POST">
    @csrf
    <!-- Add form fields here -->
    <input type="text" name="name" required>
    <input type="email" name="email" required>
    <input type="number" name="teacher_id" required>
    <input type="text" name="phone_number" required>
    <input type="password" name="password" required>
    <button type="submit">Add Teacher</button>
</form>
