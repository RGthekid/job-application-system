@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Aplikanti List</h2>
        <a href="{{ route('aplikanti.create') }}" class="btn btn-primary">Create Aplikanti</a>

        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Surname</th>
                    <th>Contact</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($aplikantet as $aplikanti)
                    <tr>
                        <td>{{ $aplikanti->id }}</td>
                        <td>{{ $aplikanti->name }}</td>
                        <td>{{ $aplikanti->surname }}</td>
                        <td>{{ $aplikanti->contact }}</td>
                        <td>
                            <!--<a href="{{ route('aplikanti.show', $aplikanti->id) }}" class="btn btn-info">View</a>-->
                            <a href="{{ route('aplikanti.edit', $aplikanti->id) }}" class="btn btn-warning">Edit</a>
                            <!-- You can add a delete button here if needed -->
                            <form action="{{ route('aplikanti.destroy', $aplikanti->id) }}" method="post" class="d-inline">
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
