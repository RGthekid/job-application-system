@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Create Aplikanti</h2>

        <form action="{{ route('aplikanti.store') }}" method="post">
            @csrf

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="surname">Surname</label>
                <input type="text" name="surname" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="contact">Contact</label>
                <input type="text" name="contact" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name="address" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control" rows="3"></textarea>
            </div>

            <div class="form-group">
                <label for="application_position">Application Position</label>
                <input type="text" name="application_position" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="kualifikimi_id">Select Kualifikimi</label>
                <select name="kualifikimi_id" class="form-control" required>
                    @foreach ($kualifikimet as $kualifikimi)
                        <option value="{{ $kualifikimi->id }}">{{ $kualifikimi->title }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
