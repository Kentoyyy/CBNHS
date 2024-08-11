@extends('layouts.teacherportal-layout')
<link rel="shortcut icon" href="{{ asset('images/logoschool.png') }}">

@section('title', 'Manage Students')
@section('content')
<div class="manage-students">
    <h1>Manage Students</h1>

    <!-- Search and Filter -->
    <div class="search-filter">
        <input type="text" id="search-student" placeholder="Search by name or ID..." class="search-input">
        <select id="status-filter" class="filter-select">
            <option value="">All Statuses</option>
            <option value="enrolled">Enrolled</option>
            <option value="not-enrolled">Not Enrolled</option>
            <option value="transferee">Transferee</option>
        </select>
    </div>

    <!-- Student List -->
    <div class="student-list">
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>ID</th>
                    <th>Grade</th>
                    <th>Status</th>
                    <th>Guidance</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Example student entries -->
                <tr>
                    <td>John Doe</td>
                    <td>12345</td>
                    <td>
                        <select class="grade-select">
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            <option value="F">F</option>
                        </select>
                    </td>
                    <td>
                        <select class="status-select">
                            <option value="enrolled">Enrolled</option>
                            <option value="not-enrolled">Not Enrolled</option>
                            <option value="transferee">Transferee</option>
                        </select>
                    </td>
                    <td>
                        <select class="guidance-select">
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                    </td>
                    <td>
                        <button class="btn-action">Edit</button>
                        <button class="btn-action delete-btn">Delete</button>
                    </td>
                </tr>
                <!-- Additional student entries go here -->
            </tbody>
        </table>
    </div>
</div>

<style>
.manage-students {
    padding: 20px;
    background-color: #f9fafb;
    color: #2d3748;
    font-family: 'Roboto', sans-serif;
    border-radius: 8px;
}

.manage-students h1 {
    font-size: 24px;
    margin-bottom: 20px;
    font-weight: 700;
    color: #1a202c;
}

.search-filter {
    display: flex;
    justify-content: space-between;
    margin-bottom: 20px;
}

.search-input, .filter-select {
    padding: 10px;
    border-radius: 6px;
    border: 1px solid #e2e8f0;
    font-size: 14px;
}

.search-input {
    flex: 1;
    margin-right: 10px;
}

.filter-select {
    width: 200px;
}

.student-list {
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.student-list table {
    width: 100%;
    border-collapse: collapse;
}

.student-list th, .student-list td {
    padding: 12px;
    text-align: left;
    border-bottom: 1px solid #e2e8f0;
}

.student-list th {
    background-color: #f1f5f9;
    font-weight: 600;
}

.student-list td {
    font-size: 14px;
}

.grade-select, .status-select, .guidance-select {
    width: 100px;
    padding: 5px;
    border-radius: 4px;
    border: 1px solid #e2e8f0;
    font-size: 14px;
}

.btn-action {
    display: inline-block;
    padding: 6px 12px;
    font-size: 12px;
    color: #ffffff;
    background-color: #3182ce;
    border-radius: 4px;
    border: none;
    cursor: pointer;
    transition: background-color 0.3s ease;
    margin: 2px;
}

.btn-action:hover {
    background-color: #2c5282;
}

.delete-btn {
    background-color: #e53e3e;
}

.delete-btn:hover {
    background-color: #c53030;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('search-student');
    const statusFilter = document.getElementById('status-filter');
    const tableRows = document.querySelectorAll('.student-list tbody tr');

    function filterTable() {
        const searchValue = searchInput.value.toLowerCase();
        const statusValue = statusFilter.value;

        tableRows.forEach(row => {
            const name = row.cells[0].textContent.toLowerCase();
            const id = row.cells[1].textContent.toLowerCase();
            const status = row.cells[3].querySelector('.status-select').value;

            const matchesSearch = name.includes(searchValue) || id.includes(searchValue);
            const matchesStatus = statusValue === '' || status === statusValue;

            if (matchesSearch && matchesStatus) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    }

    searchInput.addEventListener('input', filterTable);
    statusFilter.addEventListener('change', filterTable);
});
</script>
@endsection
