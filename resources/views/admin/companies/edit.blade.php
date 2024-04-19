@extends('admin.layouts.admin')

@section('content')
    <div class="row">
        <div class="col-xxl-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Edit Company</h4>
                </div>
                <div class="card-body">
                    <div class="live-preview">
                        <form action="{{ route('admin.companies.update', $company->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="logoInput" class="form-label">Company Logo</label>
                                </div>
                                <div class="col-lg-9">
                                    <div class="picture-container mb-4 mt-2">
                                        <div class="picture" style="width: 260px;">
                                            @if ($company->logo)
                                                <img src="{{ asset('storage/' . $company->logo) }}" height="160"
                                                    class="picture-src" id="logo" title="Logo">
                                            @else
                                                <img src="https://via.placeholder.com/160x100?text=No+Logo" height="160"
                                                    class="picture-src" id="logo" title="No Logo Available">
                                            @endif
                                            <input type="file" id="logofile" name="logo">
                                        </div>
                                    </div>
                                    @error('logo')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="nameInput" class="form-label">Name</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="name"
                                        value="{{ old('name', $company->name) }}" placeholder="Enter Company Name">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="emailInput" class="form-label">Email</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="email" class="form-control" name="email"
                                        value="{{ old('email', $company->email) }}" placeholder="Enter Email Address">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <label for="websiteInput" class="form-label">Website</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="url" class="form-control" name="website"
                                        value="{{ old('website', $company->website) }}" placeholder="Enter Website URL">
                                    @error('website')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="text-end">
                                <button type="submit" class="btn btn-dark">Save Changes</button>
                                <button type="button" class="btn btn-dark" onclick="goBack()">Back</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
@endpush
