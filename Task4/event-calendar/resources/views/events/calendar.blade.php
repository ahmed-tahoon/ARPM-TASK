@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Calendar View</h1>
        <!-- Display the calendar here -->
        <div id="calendar"></div>
    </div>
@endsection

@section('scripts')
    <link href="{{ asset('packages/fullcalendar/main.css') }}" rel="stylesheet">
    <script src="{{ asset('packages/fullcalendar/main.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridWeek',
                events: {!! json_encode($events) !!}

            });
            calendar.render();
        });
    </script>
@endsection
