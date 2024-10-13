<form method="POST" action="{{ route('admin.authenticate') }}">
    @csrf
    <label for="name">Name:</label>
    <input type="name" id="name" name="name" required>
    <br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    <br>
    <button type="submit">Login</button>
</form>