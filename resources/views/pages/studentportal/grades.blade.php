@extends('layouts.portal-layout')
<link rel="shortcut icon" href="{{ asset('images/logoschool.png') }}">
@section('title', 'Grades')

@section('content')
<div class="dashboard">
    <h1>Welcome to Your Grades Portal</h1>
    <p>Here’s a summary of your current academic performance.</p>

    <!-- Grades Table -->
    <div class="grades-container">
        <h2>Your Grades</h2>
        <table class="grades-table">
            <thead>
                <tr>
                    <th>Course</th>
                    <th>Term</th>
                    <th>Grade</th>
                    <th>Credits</th>
                    <th>Remarks</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Mathematics</td>
                    <td>Fall 2024</td>
                    <td>90-100</td>
                    <td>3</td>
                    <td>Excellent</td>
                </tr>
                <tr>
                    <td>English Literature</td>
                    <td>Fall 2024</td>
                    <td>85-89</td>
                    <td>3</td>
                    <td>Very Good</td>
                </tr>
                <tr>
                    <td>History</td>
                    <td>Fall 2024</td>
                    <td>80-84</td>
                    <td>3</td>
                    <td>Good</td>
                </tr>
                <tr>
                    <td>Physics</td>
                    <td>Fall 2024</td>
                    <td>70-79</td>
                    <td>4</td>
                    <td>Satisfactory</td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Contact Section -->
    <div class="contact-container">
        <h2>Need Assistance?</h2>
        <p>If you have any concerns about your grades or need further assistance, please reach out to us.</p>
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

/* Grades Table Styling */
.grades-container {
    margin-top: 20px;
}

.grades-container h2 {
    font-size: 22px;
    margin-bottom: 15px;
    color: #2c3e50;
    font-weight: 600;
}

.grades-table {
    width: 100%;
    border-collapse: collapse;
    background-color: #ffffff;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    border-radius: 6px;
    overflow: hidden;
}

.grades-table th, .grades-table td {
    padding: 14px;
    text-align: left;
    border-bottom: 1px solid #e1e5e9;
}

.grades-table th {
    background-color: #f9fafb;
    color: #34495e;
    font-weight: 600;
    font-size: 14px;
}

.grades-table tr:nth-child(even) {
    background-color: #f5f7f9;
}

.grades-table tr:hover {
    background-color: #ecf0f1;
}

.grades-table td {
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
