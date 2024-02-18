@extends('Books.layouts')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="alert alert-success" role="alert">
                    Book updated successfully!
                </div>
                <a href="{{ route('Books.index') }}" class="btn btn-primary">Back to All Books</a>
            </div>
        </div>
    </div>
@endsection
