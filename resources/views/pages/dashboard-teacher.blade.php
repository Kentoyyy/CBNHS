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
        <section id="dashboard">
            <h1>Dashboard</h1>
            <div class="card">
                <h2>Enrolment</h2>
                <div class="overview">
                    <p>Total Enrolment</p>
                    <p id="total-enrollees">0</p>
                    <div class="gender">
                        <span>Male: 0</span>
                        <span>Female: 0</span>
                    </div>
                </div>
            </div>
        </section>
        <section id="classes">
            <h1>List of Classes</h1>
            <div id="class-list"></div>
        </section>
        <section id="quick-count">
            <h1>Quick Count</h1>
            <div id="quick-count-list"></div>
        </section>
        <section id="school-forms">
            <h1>School Forms</h1>
            <p>School forms content...</p>
        </section>
        <section id="transfers">
            <h1>Transfers</h1>
            <p>Transfers content...</p>
        </section>
    </div>
    <script src="script.js"></script>
</body>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
    const students = [
        { name: 'John Doe', grade: 7, section: 'A' },
        { name: 'Jane Smith', grade: 7, section: 'B' },
        { name: 'Jim Brown', grade: 8, section: 'A' },
        { name: 'Jack White', grade: 9, section: 'C' },
        { name: 'Jill Green', grade: 10, section: 'B' },
    ];

    const totalEnrollees = students.length;
    document.getElementById('total-enrollees').innerText = totalEnrollees;

    const classList = document.getElementById('class-list');
    const quickCountList = document.getElementById('quick-count-list');

    const classes = {
        7: { A: [], B: [] },
        8: { A: [] },
        9: { C: [] },
        10: { B: [] },
    };

    students.forEach(student => {
        classes[student.grade][student.section].push(student.name);
    });

    for (const grade in classes) {
        const gradeElement = document.createElement('div');
        gradeElement.innerHTML = `<h2>Grade ${grade}</h2>`;
        for (const section in classes[grade]) {
            const sectionElement = document.createElement('div');
            sectionElement.innerHTML = `<h3>Section ${section}</h3><ul>${classes[grade][section].map(student => `<li>${student}</li>`).join('')}</ul>`;
            gradeElement.appendChild(sectionElement);
        }
        classList.appendChild(gradeElement);
    }

    for (const grade in classes) {
        const gradeCountElement = document.createElement('div');
        gradeCountElement.innerHTML = `<h2>Grade ${grade}</h2><p>Number of students: ${Object.values(classes[grade]).reduce((acc, section) => acc + section.length, 0)}</p>`;
        quickCountList.appendChild(gradeCountElement);
    }
});

</script>
@endsection
