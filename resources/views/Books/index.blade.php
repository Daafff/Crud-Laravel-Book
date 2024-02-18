@extends('Books.layouts')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">All Books</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Cover</th>
                                <th>Name</th>
                                <th>Author</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($books as $index => $book)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td><img src="{{ asset('storage/' . $book->cover) }}" alt="{{ $book->Name }}" style="max-width: 100px;"></td>
                                    <td>{{ $book->Name }}</td>
                                    <td>{{ $book->Author }}</td>
                                    <td>{{ $book->Status }}</td>
                                    <td>
                                        <a href="{{ route('Books.show', $book->id) }}" class="btn btn-sm btn-primary">View</a>
                                        <a href="{{ route('Books.edit', $book->id) }}" class="btn btn-sm btn-success">Edit</a>
                                        <form action="{{ route('Books.destroy', $book->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this book?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
