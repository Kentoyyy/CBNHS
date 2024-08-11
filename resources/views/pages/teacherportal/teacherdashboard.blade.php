@extends('layouts.teacherportal-layout')
<link rel="shortcut icon" href="{{ asset('images/logoschool.png') }}">


@section('title', 'My Dashboard')
@section('content')
<div class="dashboard-content">
    <h2>Good Morning, Mr. Cruz!</h2>
    <p>Today is {{ \Carbon\Carbon::now()->toFormattedDateString() }}</p>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">
        <!-- Quick Actions -->
        <div class="quick-actions bg-white shadow-lg rounded-lg p-6">
            <h3>Quick Actions</h3>
            <button class="btn-action">Mark Attendance</button>
            <button class="btn-action">Grade Submissions</button>
            <button class="btn-action">View Schedule</button>
        </div>

        <!-- Notifications -->
        <div class="notifications bg-white shadow-lg rounded-lg p-6">
            <h3>Recent Notifications</h3>
            <ul>
                <li>New message from Maria Santos (Student Query)</li>
                <li>Assignment: Math Test due in 2 days</li>
                <li>System Update: New attendance feature added</li>
            </ul>
        </div>

        <!-- Class Overview -->
        <div class="class-overview bg-white shadow-lg rounded-lg p-6">
            <h3>Class Overview</h3>
            <p>Next Class: Science, 10:00 AM - Room 204</p>
            <p>Recent Assessment: Math Quiz - Average Score: 85%</p>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <!-- Calendar -->
        <div class="calendar bg-white shadow-lg rounded-lg p-6">
            <h3>Calendar</h3>
            <!-- Insert calendar widget here -->
        </div>

        <!-- Resources -->
        <div class="resources bg-white shadow-lg rounded-lg p-6">
            <h3>Teaching Materials</h3>
            <button class="btn-action">Upload New Material</button>
            <ul>
                <li>Physics Lesson Plan - Last Modified: 2 days ago</li>
                <li>Math Worksheet - Last Modified: 5 days ago</li>
            </ul>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mt-6">
        <!-- Student Highlights -->
        <div class="student-highlights bg-white shadow-lg rounded-lg p-6">
            <h3>Student Highlights</h3>
            <p>Top Performer: John Doe - 98% in Science</p>
            <p>Students Requiring Attention: Jane Smith (Attendance: 60%)</p>
        </div>

        <!-- Messages -->
        <div class="messages bg-white shadow-lg rounded-lg p-6">
            <h3>Messages</h3>
            <p>New Messages: 3</p>
            <button class="btn-action">Go to Inbox</button>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mt-6">
        <!-- Professional Development -->
        <div class="professional-development bg-white shadow-lg rounded-lg p-6">
            <h3>Professional Development</h3>
            <p>Upcoming Workshop: Advanced Teaching Techniques - August 15, 2024</p>
        </div>

        <!-- Support -->
        <div class="support bg-white shadow-lg rounded-lg p-6">
            <h3>Support</h3>
            <button class="btn-action support-btn">Contact Support</button>
        </div>
    </div>
</div>

<style>
/* General Dashboard Styling */
.dashboard-content {
    padding: 30px;
    background-color: #f1f5f9;
    color: #2d3748;
    font-family: 'Roboto', sans-serif;
    width: 100%;
    max-width: 1200px;
    margin: 0;
    border-radius: 12px;
}

/* Headings */
.dashboard-content h2 {
    font-size: 28px;
    margin-bottom: 20px;
    font-weight: 700;
    color: #1a202c;
}

.dashboard-content p {
    font-size: 16px;
    margin-bottom: 20px;
    color: #4a5568;
}

/* Section Headings */
.dashboard-content h3 {
    font-size: 20px;
    margin-bottom: 15px;
    font-weight: 600;
    color: #2d3748;
    border-bottom: 2px solid #edf2f7;
    padding-bottom: 5px;
}

/* Quick Actions and Other Buttons */
.btn-action {
    display: inline-block;
    padding: 10px 20px;
    font-size: 14px;
    color: #ffffff;
    background-color: #3182ce;
    border-radius: 6px;
    border: none;
    cursor: pointer;
    transition: background-color 0.3s ease;
    margin-top: 10px;
}

.btn-action:hover {
    background-color: #2c5282;
}

/* Notifications */
.notifications ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
}

.notifications ul li {
    font-size: 14px;
    color: #4a5568;
    margin-bottom: 10px;
}

/* General Sections */
.grid div {
    background-color: #ffffff;
    border-radius: 8px;
    padding: 20px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

/* Support Button */
.support-btn {
    background-color: #38a169;
}

.support-btn:hover {
    background-color: #2f855a;
}
</style>
@endsection
