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
        <button class="btn-action support-btn">Contact Support</button>
    </div>
</div>

<style>
/* Dashboard Styling */
.dashboard-content {
    padding: 20px;
    background-color: #f4f4f4;
    color: #2e2e2e;
    font-family: 'Helvetica Neue', sans-serif;
    max-width: 900px;
    margin: 0 auto;
    border-radius: 8px;
}

.dashboard-content h2 {
    font-size: 22px;
    margin-bottom: 10px;
    color: #333;
    font-weight: 500;
}

.dashboard-content p {
    font-size: 14px;
    color: #555;
    margin-bottom: 20px;
}

/* Section Heading Styling */
.dashboard-content h3 {
    font-size: 18px;
    margin-bottom: 10px;
    color: #444;
    font-weight: 400;
    border-bottom: 1px solid #ddd;
    padding-bottom: 5px;
}

/* Quick Actions Styling */
.quick-actions {
    margin-bottom: 20px;
    display: flex;
    gap: 10px;
}

.btn-action {
    padding: 10px 18px;
    font-size: 13px;
    color: #fff;
    background-color: #007bff;
    border-radius: 5px;
    border: none;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn-action:hover {
    background-color: #0056b3;
}

/* Notifications Styling */
.notifications ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.notifications ul li {
    font-size: 14px;
    color: #444;
    margin-bottom: 8px;
    line-height: 1.4;
}

/* General Styling for Sections */
[class*='-overview'], .calendar, .resources, .student-highlights, .messages, .professional-development, .support {
    margin-bottom: 20px;
}

[class*='-overview'] p, .resources ul li, .student-highlights p, .messages p, .professional-development p, .support p {
    font-size: 14px;
    color: #555;
    margin-bottom: 8px;
}

/* Resources Styling */
.resources ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.resources ul li {
    font-size: 14px;
    color: #444;
    margin-bottom: 8px;
}

/* Support Button Styling */
.support-btn {
    background-color: #28a745;
}

.support-btn:hover {
    background-color: #218838;
}
</style>
@endsection
