@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Kualifikimi List</h2>
        <a href="{{ route('kualifikimi.create') }}" class="btn btn-primary">Create Kualifikimi</a>

        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Study Field</th>
                    <th>Institution</th>
                    <th>Finish Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kualifikimet as $kualifikimi)
                    <tr>
                        <td>{{ $kualifikimi->id }}</td>
                        <td>{{ $kualifikimi->title }}</td>
                        <td>{{ $kualifikimi->study_field }}</td>
                        <td>{{ $kualifikimi->institution }}</td>
                        <td>{{ $kualifikimi->finish_date }}</td>
                        <td>
                            <!-- <a href="{{ route('kualifikimi.show', $kualifikimi->id) }}" class="btn btn-info">View</a>-->
                            <a href="{{ route('kualifikimi.edit', $kualifikimi->id) }}" class="btn btn-warning">Edit</a>
                            <!-- You can add a delete button here if needed -->
                            <form action="{{ route('kualifikimi.destroy', $kualifikimi->id) }}" method="post" class="d-inline">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
