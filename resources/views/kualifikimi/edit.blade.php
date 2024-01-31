@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Kualifikimi</h2>

        <form action="{{ route('kualifikimi.update', $kualifikimi->id) }}" method="post">
            @csrf
            @method('put')

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" value="{{ $kualifikimi->title }}" required>
            </div>

            <div class="form-group">
                <label for="study_field">Study Field</label>
                <input type="text" name="study_field" class="form-control" value="{{ $kualifikimi->study_field }}" required>
            </div>

            <div class="form-group">
                <label for="institution">Institution</label>
                <input type="text" name="institution" class="form-control" value="{{ $kualifikimi->institution }}" required>
            </div>

            <div class="form-group">
                <label for="finish_date">Finish Date</label>
                <input type="date" name="finish_date" class="form-control" value="{{ $kualifikimi->finish_date }}" required>
            </div>

            <button type="submit" class="btn btn-warning">Update</button>
        </form>
    </div>
@endsection
