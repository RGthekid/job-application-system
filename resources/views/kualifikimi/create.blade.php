@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Create Kualifikimi</h2>

        <form action="{{ route('kualifikimi.store') }}" method="post">
            @csrf

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="study_field">Study Field</label>
                <input type="text" name="study_field" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="institution">Institution</label>
                <input type="text" name="institution" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="finish_date">Finish Date</label>
                <input type="date" name="finish_date" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
