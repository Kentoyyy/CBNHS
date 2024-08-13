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
            border-radius: 4px;
        }

        .sidebar-menu a:hover,
        .sidebar-menu a.active {
            background-color: #34495e;
        }

        .sidebar-menu a.active {
            background-color: #3925ab;
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
        <span>Teacher Portal</span>
    </div>
    <ul class="sidebar-menu">
        <li><a href="{{ url('teacherdashboard') }}" class="{{ Request::is('teacherdashboard') ? 'active' : '' }}"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
        <li><a href="{{ url('managestudent') }}" class="{{ Request::is('managestudent') ? 'active' : '' }}"><i class="fas fa-user-graduate"></i> Manage Students</a></li>
        <li><a href="{{ url('teachergradestudent') }}" class="{{ Request::is('teachergradestudent') ? 'active' : '' }}"><i class="fas fa-graduation-cap"></i> Manage Grades</a></li>
        <li><a href="{{ url('teacherprofile') }}" class="{{ Request::is('teacherprofile') ? 'active' : '' }}"><i class="fas fa-user"></i> Profile</a></li>
       
    </ul>
    
</div>
