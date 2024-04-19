@extends('admin.layouts.admin')

@section('content')
    <div class="container">
        <h1>Create Company</h1>
        <form action="{{ route('admin.companies.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-3">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group mb-3">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group mb-3">
                <label for="logo">Logo:</label>
                <input type="file" class="form-control" id="logo" name="logo">
                <small class="form-text text-muted">Logo should be at least 100x100 pixels in size.</small>
            </div>
            <div class="form-group mb-3">
                <label for="website">Website:</label>
                <input type="url" class="form-control" id="website" name="website">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
