@extends('layouts.portal-layout')
<link rel="shortcut icon" href="{{ asset('images/logoschool.png') }}">

@section('content')
<div class="dashboard">
    <h1>Manage Student Grades</h1>
    <p>School Year: 2024-2025</p>

    <!-- Filter Section -->
    <div class="filter-container">
        <label for="course-select">Filter by Course:</label>
        <select id="course-select" class="course-select">
            <option value="all">All Courses</option>
            <option value="mathematics">Mathematics</option>
            <option value="science">Science</option>
            <!-- Add more courses as needed -->
        </select>
    </div>

    <!-- Grades Management Table -->
    <div class="grades-container">
        <h2>Your Class Grades</h2>
        <table class="grades-table">
            <thead>
                <tr>
                    <th>Student Name</th>
                    <th>Course</th>
                    <th>Grade</th>
                    <th>Progress</th>
                    <th>Comments</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>John Doe</td>
                    <td>Mathematics</td>
                    <td><input type="text" value="85" class="grade-input"></td>
                    <td><div class="progress-bar"><div class="progress" style="width: 85%;"></div></div></td>
                    <td><textarea class="comments-input" placeholder="Enter comments...">Good improvement</textarea></td>
                    <td><button class="btn-save">Submit</button></td>
                </tr>
                <tr>
                    <td>Jane Smith</td>
                    <td>Science</td>
                    <td><input type="text" value="90" class="grade-input"></td>
                    <td><div class="progress-bar"><div class="progress" style="width: 90%;"></div></td>
                    <td><textarea class="comments-input" placeholder="Enter comments...">Excellent work</textarea></td>
                    <td><button class="btn-save">Submit</button></td>
                </tr>
                <!-- Additional rows as needed -->
            </tbody>
        </table>
    </div>
</div>

<style>
/* Dashboard Styling */
.dashboard {
    padding: 20px;
    background-color: #f5f5f5;
    color: #333;
    font-family: 'Helvetica Neue', Arial, sans-serif;
    max-width: 1200px;
    margin: 0 auto;
}

.dashboard h1 {
    font-size: 26px;
    margin-bottom: 10px;
    color: #333;
    font-weight: 600;
}

.dashboard p {
    font-size: 16px;
    color: #777;
    margin-bottom: 30px;
}

/* Filter Section Styling */
.filter-container {
    margin-bottom: 20px;
}

.filter-container label {
    font-size: 16px;
    color: #333;
    margin-right: 10px;
}

.course-select {
    padding: 8px 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
}

/* Grades Management Table Styling */
.grades-container {
    margin-top: 20px;
    padding: 20px;
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
}

.grades-container h2 {
    font-size: 22px;
    margin-bottom: 15px;
    color: #333;
    font-weight: 600;
    border-bottom: 2px solid #ddd;
    padding-bottom: 10px;
}

.grades-table {
    width: 100%;
    border-collapse: collapse;
    background-color: #ffffff;
}

.grades-table thead {
    background-color: #f9f9f9;
}

.grades-table th, .grades-table td {
    padding: 10px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

.grades-table th {
    color: #333;
    font-weight: 600;
}

.grades-table tr:nth-child(even) {
    background-color: #f5f5f5;
}

.grades-table tr:hover {
    background-color: #e9e9e9;
}

.grade-input {
    width: 60px;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
}

.comments-input {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 14px;
    resize: none;
}

.progress-bar {
    width: 100%;
    background-color: #f1f1f1;
    border-radius: 4px;
    overflow: hidden;
    height: 20px;
}

.progress {
    height: 100%;
    background-color: #4CAF50;
    border-radius: 4px;
}

.btn-save {
    background-color: #4CAF50;
    color: white;
    padding: 8px 12px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 14px;
}

.btn-save:hover {
    background-color: #45a049;
}
</style>
@endsection
