@extends('admin.layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Delete House</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-3">
                            <h4 class="card-title">Name: </h4>

                        </div>
                        <div class="col-3">
                            <h4 class="card-title"> {{ $city->name }}</h4>





                        </div>
                    </div>
                    <h6 class="card-title" style="color:red;">Do You Want Delete This Record</h6>
                    <div class="row">
                    </div>
                    <form action="{{ route('admin.city.delete', $city->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <button type="submit" class="btn btn-dark mt-4">Yes</button>
                        <a href="{{ route('admin.city.index') }}" class="btn btn-dark mt-4">No</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
