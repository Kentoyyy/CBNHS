@extends('layouts.portal-layout')
<link rel="shortcut icon" href="{{ asset('images/logoschool.png') }}">
@section('title', 'Attendace')

@section('content')
<div class="dashboard">
    <h1>Attendance for Juan Dela Cruz</h1>
    <p>School Year: 2024-2025</p>

    <!-- Attendance Table -->
    <div class="attendance-container">
        <h2>Daily Attendance</h2>
        <table class="attendance-table">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Shift</th>
                    <th>Teacher</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>2024-08-01</td>
                    <td>Present</td>
                    <td>AM</td>
                    <td>Teacher 1</td>
                </tr>
                <tr>
                    <td>2024-08-01</td>
                    <td>Absent</td>
                    <td>PM</td>
                    <td>Teacher 2</td>
                </tr>
                <tr>
                    <td>2024-08-02</td>
                    <td>Present</td>
                    <td>AM</td>
                    <td>Teacher 1</td>
                </tr>
                <tr>
                    <td>2024-08-02</td>
                    <td>Absent</td>
                    <td>PM</td>
                    <td>Teacher 3</td>
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>

    <!-- Monthly Summary Table -->
    <div class="monthly-summary">
        <h2>Monthly Attendance Summary</h2>
        <table class="summary-table">
            <thead>
                <tr>
                    <th>Month</th>
                    <th>Total Days</th>
                    <th>Days Present</th>
                    <th>Days Absent</th>
                    <th>Attendance %</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>August 2024</td>
                    <td>22</td>
                    <td>18</td>
                    <td>4</td>
                    <td>81.8%</td>
                </tr>
                <tr>
                    <td>September 2024</td>
                    <td>20</td>
                    <td>19</td>
                    <td>1</td>
                    <td>95%</td>
                </tr>
                <!-- Add more rows for other months -->
            </tbody>
        </table>
    </div>

    <!-- Detailed Attendance Log -->
    <div class="detailed-log">
        <h2>Detailed Attendance Log</h2>
        <table class="detailed-log-table">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Shift</th>
                    <th>Teacher</th>
                    <th>Reason</th>
                    <th>Remarks</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>2024-08-01</td>
                    <td>Absent</td>
                    <td>AM</td>
                    <td>Teacher 1</td>
                    <td>Sick</td>
                    <td>Medical Certificate Submitted</td>
                </tr>
                <tr>
                    <td>2024-08-02</td>
                    <td>Present</td>
                    <td>PM</td>
                    <td>Teacher 2</td>
                    <td></td>
                    <td></td>
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>

    <!-- Attendance by Subject -->
    <div class="subject-attendance">
        <h2>Attendance by Subject</h2>
        <table class="subject-table">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Subject</th>
                    <th>Status</th>
                    <th>Shift</th>
                    <th>Teacher</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>2024-08-01</td>
                    <td>Mathematics</td>
                    <td>Present</td>
                    <td>AM</td>
                    <td>Teacher 1</td>
                </tr>
                <tr>
                    <td>2024-08-01</td>
                    <td>English</td>
                    <td>Absent</td>
                    <td>PM</td>
                    <td>Teacher 2</td>
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>

    <!-- Export Button -->
  
</div>

<style>
/* Dashboard Styling */
.dashboard {
    padding: 20px;
    background-color: #f4f4f4;
    color: #333;
    font-family: 'Arial', sans-serif;
    max-width: 1200px;
    margin: 0 auto;
}

.dashboard h1 {
    font-size: 28px;
    margin-bottom: 10px;
    color: #222;
    font-weight: 700;
}

.dashboard p {
    font-size: 16px;
    color: #666;
    margin-bottom: 30px;
}

/* General Table Styling */
table {
    width: 100%;
    border-collapse: collapse;
}

thead {
    background-color: #f0f0f0;
}

th, td {
    padding: 12px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

th {
    color: #444;
    font-weight: 600;
}

tr:nth-child(even) {
    background-color: #f9f9f9;
}

tr:hover {
    background-color: #e1e1e1;
}

/* Container Styling */
.attendance-container, .monthly-summary, .detailed-log, .subject-attendance {
    margin-top: 20px;
    padding: 20px;
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

h2 {
    font-size: 22px;
    margin-bottom: 15px;
    color: #333;
    font-weight: 600;
    border-bottom: 1px solid #ddd;
    padding-bottom: 10px;
}

/* Export Button Styling */
.export-container {
    margin-top: 20px;
}

.export-button {
    display: inline-block;
    padding: 10px 20px;
    font-size: 16px;
    color: #fff;
    background-color: #007bff;
    border-radius: 5px;
    text-decoration: none;
    text-align: center;
}

.export-button:hover {
    background-color: #0056b3;
}
</style>
@endsection
