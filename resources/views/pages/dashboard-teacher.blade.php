@extends('home-master')

@section('title', 'Home')

@section('style')
<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #b9b9b9;
}
.header {
    background-color: #ffffff;
    padding: 10px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-bottom: 2px solid #e7e7e7;
}
.logo {
    width: 100px;
}
.user-info {
    display: flex;
    align-items: center;
}
.user-info span {
    margin-right: 20px;
}
.user-info a {
    margin-left: 10px;
    color: #333;
    text-decoration: none;
}
.dashboard {
    background-color: #ffffff;
    padding: 10px;
}
.dashboard ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    display: flex;
}
.dashboard ul li {
    padding: 20px;
    margin-right: 20px;
}
.dashboard ul li:focus{
    background-color: #333;
    color: #fafafa;
}
.dashboard ul li a {
    color: rgb(0, 0, 0);
    text-decoration: none;
}
.dashboard ul li a:focus{
    color: #dd0000;
}
#content {
    padding: 20px;
    background-color: #fff;
    margin: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
.card {
    background-color: #e7e7e7;
    padding: 20px;
    margin-top: 10px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
.card h2 {
    margin-top: 0;
}
.card p {
    font-size: 24px;
    font-weight: bold;
}
.gender {
    display: flex;
    justify-content: space-between;
    margin-top: 10px;
}
section {
    display: none;
}
section:target {
    display: block;
}
footer {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 10px 0;
    position: fixed;
    width: 100%;
    bottom: 0;
}
</style>
@endsection

@section('content')
@include('nav.dashboard-navbar')
<body>
    <nav class="dashboard">
        <ul>
            <li><a href="#dashboard">Dashboard</a></li>
            <li><a href="#classes">List of Classes</a></li>
            <li><a href="#quick-count">Quick Count</a></li>
            <li><a href="#school-forms">School Forms</a></li>
            <li><a href="#transfers">Transfers</a></li>
        </ul>
    </nav>
    <div id="content">
       @include('pages.sub.class-list')
       
    </div>
    <script src="script.js"></script>
</body>
@endsection

@section('scripts')
<script>
</script>
@endsection
