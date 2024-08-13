@extends('layouts.portal-layout')
<link rel="shortcut icon" href="{{ asset('images/logoschool.png') }}">
@section('title', 'Examinations')

@section('content')
<div class="dashboard">
    <h1>Welcome to Your Examination Portal</h1>
    <p>Here you can find details about your upcoming and completed exams.</p>

    <!-- Examination Table -->
    <div class="exams-container">
        <h2>Your Examinations</h2>
        <table class="exams-table">
            <thead>
                <tr>
                    <th>Subject</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Status</th>
                    <th>Remarks</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Mathematics</td>
                    <td>September 15, 2024</td>
                    <td>09:00 AM</td>
                    <td>Upcoming</td>
                    <td>Be on time</td>
                </tr>
                <tr>
                    <td>English Literature</td>
                    <td>September 18, 2024</td>
                    <td>01:00 PM</td>
                    <td>Upcoming</td>
                    <td>Read the assigned texts</td>
                </tr>
                <tr>
                    <td>History</td>
                    <td>September 21, 2024</td>
                    <td>10:00 AM</td>
                    <td>Completed</td>
                    <td>Results pending</td>
                </tr>
                <tr>
                    <td>Physics</td>
                    <td>September 25, 2024</td>
                    <td>02:00 PM</td>
                    <td>Upcoming</td>
                    <td>Revise chapters 5-8</td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Contact Section -->
    <div class="contact-container">
        <h2>Need Assistance?</h2>
        <p>If you have any concerns about your exams or need further assistance, please reach out to us.</p>
        <div class="contact-form">
            <form action="{{ url('/contact') }}" method="POST">
                @csrf
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="4" required></textarea>
                
                <button type="submit">Send Message</button>
            </form>
        </div>
    </div>
</div>

<style>
/* Dashboard Styling */
.dashboard {
    padding: 20px;
    background-color: #f5f7f9;
    color: #333;
    font-family: 'Helvetica Neue', Arial, sans-serif;
}

.dashboard h1 {
    font-size: 26px;
    margin-bottom: 15px;
    color: #2c3e50;
    font-weight: 600;
}

.dashboard p {
    font-size: 16px;
    color: #7f8c8d;
    margin-bottom: 30px;
}

/* Exams Table Styling */
.exams-container {
    margin-top: 20px;
}

.exams-container h2 {
    font-size: 22px;
    margin-bottom: 15px;
    color: #2c3e50;
    font-weight: 600;
}

.exams-table {
    width: 100%;
    border-collapse: collapse;
    background-color: #ffffff;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    border-radius: 6px;
    overflow: hidden;
}

.exams-table th, .exams-table td {
    padding: 14px;
    text-align: left;
    border-bottom: 1px solid #e1e5e9;
}

.exams-table th {
    background-color: #f9fafb;
    color: #34495e;
    font-weight: 600;
    font-size: 14px;
}

.exams-table tr:nth-child(even) {
    background-color: #f5f7f9;
}

.exams-table tr:hover {
    background-color: #ecf0f1;
}

.exams-table td {
    font-size: 14px;
    color: #2c3e50;
}

/* Contact Section Styling */
.contact-container {
    margin-top: 40px;
    padding: 20px;
    background-color: #ffffff;
    border-radius: 6px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
}

.contact-container h2 {
    font-size: 22px;
    margin-bottom: 15px;
    color: #2c3e50;
    font-weight: 600;
}

.contact-container p {
    font-size: 16px;
    color: #7f8c8d;
    margin-bottom: 20px;
}

.contact-form {
    max-width: 500px;
    margin: 0 auto;
}

.contact-form form {
    display: flex;
    flex-direction: column;
}

.contact-form label {
    font-size: 14px;
    margin-bottom: 5px;
    color: #2c3e50;
}

.contact-form input, .contact-form textarea {
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 14px;
    color: #333;
}

.contact-form button {
    background-color: #3498db;
    color: #ffffff;
    border: none;
    padding: 10px 15px;
    border-radius: 4px;
    cursor: pointer;
    font-size: 14px;
    font-weight: 600;
    transition: background-color 0.3s;
}

.contact-form button:hover {
    background-color: #2980b9;
}
</style>
@endsection
