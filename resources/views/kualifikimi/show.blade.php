@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Kualifikimi Details</h2>

        <div>
            <strong>Title:</strong> {{ $kualifikimi->title }}<br>
            <strong>Study Field:</strong> {{ $kualifikimi->study_field }}<br>
            <strong>Institution:</strong> {{ $kualifikimi->institution }}<br>
            <strong>Finish Date:</strong> {{ $kualifikimi->finish_date }}
        </div>

        <div class="mt-3">
            <a href="{{ route('kualifikimi.index') }}" class="btn btn-primary">Back to List</a>
        </div>
    </div>
@endsection
