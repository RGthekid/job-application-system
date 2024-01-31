@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Aplikanti Details</h2>

        <div>
            <strong>Name:</strong> {{ $aplikanti->name }}<br>
            <strong>Surname:</strong> {{ $aplikanti->surname }}<br>
            <strong>Contact:</strong> {{ $aplikanti->contact }}<br>
            <strong>Address:</strong> {{ $aplikanti->address }}<br>
            <strong>Description:</strong> {{ $aplikanti->description }}<br>
            <strong>Application Position:</strong> {{ $aplikanti->application_position }}<br>
            <strong>Kualifikimi:</strong> {{ $aplikanti->kualifikimi->title }}
        </div>

        <div class="mt-3">
            <a href="{{ route('aplikanti.index') }}" class="btn btn-primary">Back to List</a>
        </div>
    </div>
@endsection
