@extends('layouts.teacherportal-layout')
<link rel="shortcut icon" href="{{ asset('images/logoschool.png') }}">

@section('content')
<div class="dashboard-content">
    <h2>Good Morning, Mr. Cruz!</h2>
    <p>Today is {{ \Carbon\Carbon::now()->toFormattedDateString() }}</p>

    <div class="quick-actions">
        <h3>Quick Actions</h3>
        <button class="btn-action">Mark Attendance</button>
        <button class="btn-action">Grade Submissions</button>
        <button class="btn-action">View Schedule</button>
    </div>

    <div class="notifications">
        <h3>Recent Notifications</h3>
        <ul>
            <li>New message from Maria Santos (Student Query)</li>
            <li>Assignment: Math Test due in 2 days</li>
            <li>System Update: New attendance feature added</li>
        </ul>
    </div>

    <div class="class-overview">
        <h3>Class Overview</h3>
        <p>Next Class: Science, 10:00 AM - Room 204</p>
        <p>Recent Assessment: Math Quiz - Average Score: 85%</p>
    </div>

    <div class="calendar">
        <h3>Calendar</h3>
        <!-- Insert calendar widget here -->
    </div>

    <div class="resources">
        <h3>Teaching Materials</h3>
        <button class="btn-action">Upload New Material</button>
        <ul>
            <li>Physics Lesson Plan - Last Modified: 2 days ago</li>
            <li>Math Worksheet - Last Modified: 5 days ago</li>
        </ul>
    </div>

    <div class="student-highlights">
        <h3>Student Highlights</h3>
        <p>Top Performer: John Doe - 98% in Science</p>
        <p>Students Requiring Attention: Jane Smith (Attendance: 60%)</p>
    </div>

    <div class="messages">
        <h3>Messages</h3>
        <p>New Messages: 3</p>
        <button class="btn-action">Go to Inbox</button>
    </div>

    <div class="professional-development">
        <h3>Professional Development</h3>
        <p>Upcoming Workshop: Advanced Teaching Techniques - August 15, 2024</p>
    </div>

    <div class="support">
        <h3>Support</h3>
        <button class="btn-action">Contact Support</button>
    </div>
</div>

<style>
/* Dashboard Styling */
.dashboard-content {
    padding: 30px;
    background-color: #ffffff;
    color: #333;
    font-family: 'Roboto', sans-serif;
    max-width: 1100px;
    margin: 0 auto;
    border-radius: 12px;
    box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
}

.dashboard-content h2 {
    font-size: 26px;
    margin-bottom: 20px;
    color: #333;
    font-weight: 600;
}

.dashboard-content p {
    font-size: 14px;
    color: #777;
    margin-bottom: 30px;
}

/* Section Heading Styling */
.dashboard-content h3 {
    font-size: 20px;
    margin-bottom: 15px;
    color: #444;
    font-weight: 500;
    border-bottom: 1px solid #eee;
    padding-bottom: 10px;
}

/* Quick Actions Styling */
.quick-actions {
    margin-bottom: 30px;
    display: flex;
    gap: 15px;
}

.btn-action {
    padding: 12px 24px;
    font-size: 14px;
    color: #fff;
    background-color: #1e90ff;
    border-radius: 8px;
    border: none;
    cursor: pointer;
    transition: background-color 0.3s;
}

.btn-action:hover {
    background-color: #0b6abf;
}

/* Notifications Styling */
.notifications ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.notifications ul li {
    font-size: 14px;
    color: #555;
    margin-bottom: 10px;
    line-height: 1.5;
}

/* General Styling for Sections */
[class*='-overview'], .calendar, .resources, .student-highlights, .messages, .professional-development, .support {
    margin-bottom: 30px;
}

[class*='-overview'] p, .resources ul li, .student-highlights p, .messages p, .professional-development p, .support p {
    font-size: 14px;
    color: #666;
    margin-bottom: 10px;
}

/* Resources Styling */
.resources ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.resources ul li {
    font-size: 14px;
    color: #555;
    margin-bottom: 10px;
}

/* Support Styling */
.support .btn-action {
    background-color: #28a745;
}

.support .btn-action:hover {
    background-color: #218838;
}

</style>
@endsection
