@extends('home-master')

@section('title', 'DepEd Issuances - 2024')

@section('content')
    <!-- Issuances Table for 2024 -->
    <table class="issuances-table">
        <thead>
            <tr>
                <th>File</th>
                <th>Document Type</th>
                <th>Title</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><a href="{{ asset('documents/DM_No_413_s_2024.pdf') }}" target="_blank">DM No. 413, s. 2024</a></td>
                <td>Memorandum</td>
                <td>Distribution of Special Needs Education (SNED) Supplies and Equipment 2024 from the Local Government Unit (LGU)</td>
                <td>08/13/2024</td>
            </tr>
            <!-- Add more rows as needed -->
        </tbody>
    </table>
@endsection
