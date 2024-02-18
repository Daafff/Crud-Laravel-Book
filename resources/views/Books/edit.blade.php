@extends('Books.layouts')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        Edit Book
                    </div>
                    <div class="card-body">
                        <form action="{{ route('Books.update', $book->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="cover">Cover:</label>
                                <input type="file" name="cover" class="form-control-file">
                            </div>
                            <div class="form-group">
                                <label for="Name">Name:</label>
                                <input type="text" name="Name" class="form-control" value="{{ $book->Name }}">
                            </div>
                            <div class="form-group">
                                <label for="Description">Description:</label>
                                <textarea name="Description" class="form-control">{{ $book->Description }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="Author">Author:</label>
                                <input type="text" name="Author" class="form-control" value="{{ $book->Author }}">
                            </div>
                            <div class="form-group">
                                <label for="Status">Status:</label>
                                <select name="Status" class="form-control">
                                    <option value="publish" {{ $book->Status == 'publish' ? 'selected' : '' }}>Publish</option>
                                    <option value="not publish" {{ $book->Status == 'not publish' ? 'selected' : '' }}>Not Publish</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Update Book</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
