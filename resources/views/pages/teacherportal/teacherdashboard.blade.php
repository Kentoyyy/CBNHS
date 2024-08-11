@extends('layouts.teacherportal-layout')
<link rel="shortcut icon" href="{{ asset('images/logoschool.png') }}">

@section('title', 'My Dashboard')
@section('content')
<div class="dashboard-content">
    <h2>Good Morning, Mr. Cruz!</h2>
    <p>Today is {{ \Carbon\Carbon::now()->toFormattedDateString() }}</p>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">
        <!-- Quick Actions -->
        <div class="quick-actions">
            <h3>Quick Actions</h3>
            <button class="btn-action">Mark Attendance</button>
            <button class="btn-action">Grade Submissions</button>
            <button class="btn-action">View Schedule</button>
        </div>

        <!-- Notifications -->
        <div class="notifications">
            <h3>Recent Notifications</h3>
            <ul>
                <li>New message from Maria Santos (Student Query)</li>
                <li>Assignment: Math Test due in 2 days</li>
                <li>System Update: New attendance feature added</li>
            </ul>
        </div>

        <!-- Class Overview -->
        <div class="class-overview">
            <h3>Class Overview</h3>
            <p>Next Class: Science, 10:00 AM - Room 204</p>
            <p>Recent Assessment: Math Quiz - Average Score: 85%</p>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <!-- Calendar -->
        <div class="calendar">
            <div class="calendar-header">
                <button class="nav-button" id="prev-month">&lt;</button>
                <h2 class="calendar-title" id="calendar-title">August 2024</h2>
                <button class="nav-button" id="next-month">&gt;</button>
            </div>
            <div class="calendar-container">
                <div class="calendar-days">
                    <span>Sun</span>
                    <span>Mon</span>
                    <span>Tue</span>
                    <span>Wed</span>
                    <span>Thu</span>
                    <span>Fri</span>
                    <span>Sat</span>
                </div>
                <div class="calendar-body" id="calendar-body">
                    <!-- Days will be injected here by JavaScript -->
                </div>
            </div>
        </div>

        <!-- Resources -->
        <div class="resources">
            <h3>Teaching Materials</h3>
            <button class="btn-action">Upload New Material</button>
            <ul>
                <li>Physics Lesson Plan - Last Modified: 2 days ago</li>
                <li>Math Worksheet - Last Modified: 5 days ago</li>
            </ul>
        </div>
    </div>

</div>

<style>
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

.dashboard-content h3 {
    font-size: 20px;
    margin-bottom: 15px;
    font-weight: 600;
    color: #2d3748;
    border-bottom: 2px solid #edf2f7;
    padding-bottom: 5px;
}

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

.grid div {
    background-color: #ffffff;
    border-radius: 8px;
    padding: 20px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

/* Calendar Styles */
.calendar {
    background-color: #ffffff;
    border-radius: 8px;
    padding: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.calendar-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 10px;
}

.nav-button {
    background: none;
    border: none;
    font-size: 16px;
    cursor: pointer;
    color: #3182ce;
}

.calendar-title {
    font-size: 16px;
    font-weight: 600;
}

.calendar-container {
    display: flex;
    flex-direction: column;
}

.calendar-days, .calendar-body {
    display: grid;
    grid-template-columns: repeat(7, 1fr);
    gap: 1px;
}

.calendar-days span, .calendar-body span {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 8px;
    border: 1px solid #e2e8f0;
    font-size: 12px;
}

.calendar-body span {
    cursor: pointer;
    transition: background-color 0.3s ease;
    height: 30px;
}

.calendar-body span.current-date {
    background-color: #3182ce;
    color: white;
    font-weight: bold;
}

.calendar-body span:hover {
    background-color: #e2e8f0;
}
</style>

<script>
// JavaScript for calendar functionality
document.addEventListener('DOMContentLoaded', function() {
    const prevMonthButton = document.getElementById('prev-month');
    const nextMonthButton = document.getElementById('next-month');
    const calendarTitle = document.getElementById('calendar-title');
    const calendarBody = document.getElementById('calendar-body');

    let currentDate = new Date();
    let today = new Date();

    function renderCalendar(date) {
        const month = date.getMonth();
        const year = date.getFullYear();
        const firstDay = new Date(year, month, 1).getDay();
        const lastDate = new Date(year, month + 1, 0).getDate();

        calendarTitle.textContent = date.toLocaleString('default', { month: 'long', year: 'numeric' });

        let days = '';
        for (let i = 0; i < firstDay; i++) {
            days += '<span></span>';
        }

        for (let i = 1; i <= lastDate; i++) {
            let className = '';
            if (i === today.getDate() && month === today.getMonth() && year === today.getFullYear()) {
                className = 'current-date';
            }
            days += `<span class="${className}">${i}</span>`;
        }

        calendarBody.innerHTML = days;
    }

    prevMonthButton.addEventListener('click', () => {
        currentDate.setMonth(currentDate.getMonth() - 1);
        renderCalendar(currentDate);
    });

    nextMonthButton.addEventListener('click', () => {
        currentDate.setMonth(currentDate.getMonth() + 1);
        renderCalendar(currentDate);
    });

    renderCalendar(currentDate);
});
</script>
@endsection
