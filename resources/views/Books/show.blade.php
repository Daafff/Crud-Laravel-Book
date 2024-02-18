@extends('Books.layouts')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4 class="mb-0">Book Details</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ asset('storage/' . $book->cover) }}" alt="{{ $book->Name }}" class="img-fluid rounded mb-3">
                    </div>
                    <div class="col-md-8">
                        <div class="mb-3">
                            <span class="badge badge-primary">{{ $book->Status }}</span>
                        </div>
                        <h3>{{ $book->Name }}</h3>
                        <p class="mb-2"><strong>Description:</strong> {{ $book->Description }}</p>
                        <p class="mb-2"><strong>Author:</strong> {{ $book->Author }}</p>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <div class="text-right">
                            <a href="{{ route('Books.edit', $book->id) }}" class="btn btn-success mr-2">Edit</a>
                            <a href="{{ route('Books.index') }}" class="btn btn-secondary">Back to All Books</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
