<!-- resources/views/pages/studentportal/dashboard.blade.php -->
@extends('layouts.portal-layout')

@section('content')
<div class="dashboard">
    <!-- Header Section -->
    <header class="dashboard-header">
        <div class="header-content">
            <h1>Welcome, <span class="student-name">Juan Dela Cruz</span></h1>
            <p>Your academic journey at City of Bacoor National High School starts here.</p>
        </div>
        <nav class="header-links">
            <a href="{{ url('profile') }}" class="header-link">Profile</a>
            <a href="{{ url('settings') }}" class="header-link">Settings</a>
        </nav>
    </header>

    <!-- Quick Links Section -->
    <section class="quick-links">
        <a href="{{ url('course') }}" class="card">
            <i class="fas fa-book"></i>
            <h3>My Courses</h3>
        </a>
        <a href="{{ url('/schedule') }}" class="card">
            <i class="fas fa-calendar-alt"></i>
            <h3>Class Schedule</h3>
        </a>
        <a href="{{ url('grades') }}" class="card">
            <i class="fas fa-graduation-cap"></i>
            <h3>My Grades</h3>
        </a>
        <a href="{{ url('/resources') }}" class="card">
            <i class="fas fa-folder-open"></i>
            <h3>Learning Resources</h3>
        </a>
    </section>

    <!-- Calendar Section -->
    <section class="calendar">
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
    </section>

    <!-- Announcements Section -->
    <section class="announcements">
        <h2>Latest Announcements</h2>
        <ul>
            <li><a href="{{ url('/announcements/1') }}">Semester Exam Schedule Released</a></li>
            <li><a href="{{ url('/announcements/2') }}">New Online Courses Available</a></li>
            <li><a href="{{ url('/announcements/3') }}">Holiday Notice</a></li>
        </ul>
    </section>
@endsection

@section('styles')
<style>
    /* General Styles */
    body {
        font-family: 'Helvetica Neue', Arial, sans-serif;
        background-color: #f5f7fa;
        margin: 0;
        color: #34495e;
    }

    .dashboard {
        padding: 20px;
    }

    /* Header Section */
    .dashboard-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px;
    }

    .header-content h1 {
        font-size: 24px;
        margin: 0;
        font-weight: 600;
    }

    .header-content p {
        font-size: 14px;
        color: #7f8c8d;
    }

    .header-links .header-link {
        text-decoration: none;
        color: #083a68;
        margin-left: 15px;
        font-weight: 500;
    }

    .header-links .header-link:hover {
        color: #083a68;
    }

    /* Quick Links Section */
    .quick-links {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
        gap: 15px;
        margin-bottom: 30px;
    }

    .card {
        background-color: #ffffff;
        border-radius: 8px;
        padding: 15px;
        text-align: center;
        box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);
        transition: transform 0.2s ease, box-shadow 0.2s ease;
        text-decoration: none;
        color: #2c3e50;
    }

    .card:hover {
        transform: translateY(-4px);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
    }

    .card i {
        font-size: 30px;
        color: #083a68;
        margin-bottom: 10px;
    }

    .card h3 {
        font-size: 18px;
        margin: 0;
    }

    /* Calendar Section */
    .calendar {
        margin-top: 30px;
    }

    .calendar-header {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 10px;
        font-weight: 600;
    }

    .calendar-title {
        font-size: 20px;
        margin: 0 15px;
    }

    .nav-button {
        background: none;
        border: none;
        font-size: 18px;
        cursor: pointer;
        color: #3498db;
        transition: color 0.3s;
    }

    .nav-button:hover {
        color: #083a68;
    }

    .calendar-container {
        background-color: #ffffff;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }

    .calendar-days {
        display: grid;
        grid-template-columns: repeat(7, 1fr);
        gap: 1px;
        background-color: #083a68;
        color: #ffffff;
        padding: 10px 0;
        text-align: center;
        font-size: 14px;
    }

    .calendar-days span {
        padding: 10px;
    }

    .calendar-body {
        display: grid;
        grid-template-columns: repeat(7, 1fr);
        gap: 1px;
    }

    .calendar-day {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 60px;
        background-color: #f5f7fa;
        font-size: 14px;
        border: 1px solid #e1e1e1;
        box-sizing: border-box;
        transition: background-color 0.3s;
    }

    .calendar-day:hover {
        background-color: #dfe6e9;
    }

    /* Announcements Section */
    .announcements {
        margin-top: 30px;
    }

    .announcements h2 {
        font-size: 20px;
        margin-bottom: 15px;
    }

    .announcements ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .announcements ul li {
        margin-bottom: 10px;
    }

    .announcements ul li a {
        text-decoration: none;
        color: #3f3f3f;
        font-weight: 500;
    }

    .announcements ul li a:hover {
        color: #3498db;
    }

    .student-name {
        color: #2a1987;
    }
</style>
@endsection

@section('scripts')
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const calendarTitle = document.getElementById('calendar-title');
        const calendarBody = document.getElementById('calendar-body');
        const prevMonthBtn = document.getElementById('prev-month');
        const nextMonthBtn = document.getElementById('next-month');

        let currentMonth = new Date().getMonth();
        let currentYear = new Date().getFullYear();

        function renderCalendar(month, year) {
            const firstDay = new Date(year, month).getDay();
            const daysInMonth = new Date(year, month + 1, 0).getDate();
            let daysHtml = '';

            for (let i = 0; i < firstDay; i++) {
                daysHtml += '<div class="calendar-day"></div>';
            }

            for (let i = 1; i <= daysInMonth; i++) {
                daysHtml += `<div class="calendar-day">${i}</div>`;
            }

            calendarBody.innerHTML = daysHtml;
            calendarTitle.textContent = `${new Date(year, month).toLocaleString('default', { month: 'long' })} ${year}`;
        }

        function updateCalendar(offset) {
            currentMonth += offset;
            if (currentMonth < 0) {
                currentMonth = 11;
                currentYear--;
            } else if (currentMonth > 11) {
                currentMonth = 0;
                currentYear++;
            }
            renderCalendar(currentMonth, currentYear);
        }

        prevMonthBtn.addEventListener('click', function() {
            updateCalendar(-1);
        });

        nextMonthBtn.addEventListener('click', function() {
            updateCalendar(1);
        });

        // Initialize calendar
        renderCalendar(currentMonth, currentYear);
    });
</script>
@endsection
