<!-- resources/views/layouts/portal-layout.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'CBNHS Student Portal')</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
        }

        .container {
            display: flex;
            height: 100vh;
        }

        .main-content {
            flex: 1;
            padding: 20px;
            background-color: #ecf0f1;
            overflow-y: auto;
        }

        .dashboard {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .dashboard h1 {
            margin-top: 0;
            font-size: 28px;
            color: #2c3e50;
        }
    </style>
    @yield('styles')
</head>
<body>
    <div class="container">
        @include('partials.sidebar')
        <div class="main-content">
            @yield('content')
        </div>
    </div>
    @yield('scripts')
</body>
</html>
