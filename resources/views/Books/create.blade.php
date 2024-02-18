@extends('Books.layouts')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        Create New Book
                    </div>
                    <div class="card-body">
                        <form action="{{ route('Books.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="cover">Cover:</label>
                                <input type="file" name="cover" class="form-control-file">
                            </div>
                            <div class="form-group">
                                <label for="Name">Name:</label>
                                <input type="text" name="Name" class="form-control" placeholder="Book Name">
                            </div>
                            <div class="form-group">
                                <label for="Description">Description:</label>
                                <textarea name="Description" class="form-control" placeholder="Book Description"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="Author">Author:</label>
                                <input type="text" name="Author" class="form-control" placeholder="Book Author">
                            </div>
                            <div class="form-group">
                                <label for="Status">Status:</label>
                                <select name="Status" class="form-control">
                                    <option value="publish">Publish</option>
                                    <option value="not publish">Not Publish</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Create Book</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
