@extends('Books.layouts')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        Delete Book
                    </div>
                    <div class="card-body">
                        <p>Are you sure you want to delete this book?</p>
                        <form action="{{ route('Books.destroy', $book->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                            <a href="{{ route('Books.index') }}" class="btn btn-secondary">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
