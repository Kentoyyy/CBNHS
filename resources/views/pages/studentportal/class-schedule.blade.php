@extends('layouts.portal-layout')
<link rel="shortcut icon" href="{{ asset('images/logoschool.png') }}">

@section('title', 'Class Schedule')
@section('content')
<div class="dashboard">
    <h1>Class Schedule for Juan Dela Cruz</h1>
    <p>School Year: 2024-2025</p>

    <!-- Class Schedule Table -->
    <div class="schedule-container">
        <h2>Your Weekly Schedule</h2>
        <table class="schedule-table">
            <thead>
                <tr>
                    <th>Day</th>
                    <th>Shift</th>
                    <th>Room</th>
                    <th>Teacher</th>
                    <th>Subject</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Monday</td>
                    <td>AM</td>
                    <td>101</td>
                    <td>Mrs. Smith</td>
                    <td>Mathematics</td>
                </tr>
                <tr>
                    <td>Monday</td>
                    <td>PM</td>
                    <td>102</td>
                    <td>Mr. Johnson</td>
                    <td>English Literature</td>
                </tr>
                <tr>
                    <td>Tuesday</td>
                    <td>AM</td>
                    <td>103</td>
                    <td>Ms. Davis</td>
                    <td>History</td>
                </tr>
                <tr>
                    <td>Tuesday</td>
                    <td>PM</td>
                    <td>104</td>
                    <td>Mr. Brown</td>
                    <td>Physics</td>
                </tr>
                <tr>
                    <td>Wednesday</td>
                    <td>AM</td>
                    <td>105</td>
                    <td>Mrs. Wilson</td>
                    <td>Chemistry</td>
                </tr>
                <tr>
                    <td>Wednesday</td>
                    <td>PM</td>
                    <td>106</td>
                    <td>Mr. Taylor</td>
                    <td>Biology</td>
                </tr>
                <tr>
                    <td>Thursday</td>
                    <td>AM</td>
                    <td>107</td>
                    <td>Ms. Moore</td>
                    <td>Computer Science</td>
                </tr>
                <tr>
                    <td>Thursday</td>
                    <td>PM</td>
                    <td>108</td>
                    <td>Mr. Anderson</td>
                    <td>Physical Education</td>
                </tr>
                <tr>
                    <td>Friday</td>
                    <td>AM</td>
                    <td>109</td>
                    <td>Mrs. Taylor</td>
                    <td>Art</td>
                </tr>
                <tr>
                    <td>Friday</td>
                    <td>PM</td>
                    <td>110</td>
                    <td>Mr. White</td>
                    <td>Music</td>
                </tr>
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

/* Class Schedule Table Styling */
.schedule-container {
    margin-top: 20px;
    padding: 20px;
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
}

.schedule-container h2 {
    font-size: 22px;
    margin-bottom: 15px;
    color: #333;
    font-weight: 600;
    border-bottom: 2px solid #ddd;
    padding-bottom: 10px;
}

.schedule-table {
    width: 100%;
    border-collapse: collapse;
    background-color: #ffffff;
}

.schedule-table thead {
    background-color: #f9f9f9;
}

.schedule-table th, .schedule-table td {
    padding: 10px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

.schedule-table th {
    color: #333;
    font-weight: 600;
}

.schedule-table tr:nth-child(even) {
    background-color: #f5f5f5;
}

.schedule-table tr:hover {
    background-color: #e9e9e9;
}

.schedule-table td {
    font-size: 14px;
    color: #333;
}
</style>
@endsection
