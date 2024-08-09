<!-- resources/views/partials/sidebar.blade.php -->
<div class="sidebar">
    <style>
        @import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css');

        .sidebar {
            width: 220px;
            background-color: #083a68;
            color: #ecf0f1;
            padding: 15px;
            display: flex;
            flex-direction: column;
            height: 100vh;
        }

        .sidebar-header {
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            margin-bottom: 30px;
            font-weight: bold;
        }

        .sidebar-header img {
            max-width: 40px;
            max-height: 40px;
            margin-right: 10px;
        }

        .sidebar-menu {
            list-style-type: none;
            padding: 0;
            margin: 0;
            flex-grow: 1;
        }

        .sidebar-menu li {
            margin-bottom: 20px;
        }

        .sidebar-menu a {
            color: #ecf0f1;
            text-decoration: none;
            font-size: 16px;
            display: flex;
            align-items: center;
            padding: 10px;
            transition: background 0.3s;
        }

        .sidebar-menu a:hover {
            background-color: #34495e;
            border-radius: 4px;
        }

        .sidebar-menu i {
            margin-right: 10px;
            font-size: 18px;
        }

        .logout-button {
            margin-top: auto;
            background-color: #2b24b4;
            border: none;
            color: #ffffff;
            font-size: 16px;
            padding: 10px;
            cursor: pointer;
            border-radius: 4px;
            transition: background-color 0.3s;
            text-align: center;
        }

        .logout-button:hover {
            background-color: #241e95;
        }
    </style>
    <div class="sidebar-header">
        <img src="{{ asset('images/logoschool.png') }}" alt="Logo">
        <span>Student Portal</span>
    </div>
    <ul class="sidebar-menu">
        <li><a href="dashboard"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
        <li><a href="course"><i class="fas fa-book"></i> Courses</a></li>
        <li><a href="grades"><i class="fas fa-graduation-cap"></i> Grades</a></li>
        <li><a href="attendance"><i class="fas fa-calendar-check"></i> Attendance</a></li>
        <li><a href="#"><i class="fas fa-pencil-alt"></i> Examinations</a></li>
        <li><a href="#"><i class="fas fa-book-reader"></i> Library</a></li>
        <li><a href="#"><i class="fas fa-user"></i> Profile</a></li>
        <li><a href="#"><i class="fas fa-headset"></i> Support</a></li>
    </ul>
    <button class="logout-button" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <i class="fas fa-sign-out-alt"></i> Logout
    </button>
    
</div>
