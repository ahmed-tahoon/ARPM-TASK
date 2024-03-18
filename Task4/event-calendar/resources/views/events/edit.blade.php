@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Event</h1>
        <form method="POST" action="{{ route('events.update', $event->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $event->title }}">
            </div>
            <div class="form-group">
                <label for="start_time">Start Time</label>
                <input type="datetime-local" class="form-control" id="start_time" name="start_time" value="{{ $event->start_time->format('Y-m-d\TH:i') }}">
            </div>
            <div class="form-group">
                <label for="end_time">End Time</label>
                <input type="datetime-local" class="form-control" id="end_time" name="end_time" value="{{ $event->end_time->format('Y-m-d\TH:i') }}">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3">{{ $event->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update Event</button>
        </form>
    </div>
@endsection
