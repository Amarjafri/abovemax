@extends('admin.layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card" style="width: 100%">
                <div class="card-header d-flex align-items-center">
                    <h5 class="card-title mb-0 flex-grow-1">Companies</h5>
                    <div>
                        <a href="{{ route('admin.companies.create') }}" class="btn btn-dark">Add New Company</a>
                    </div>
                </div>
                <div class="card-body">
                    <table id="companies-datatables" class="table align-middle">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Website</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($companies as $company)
                                <tr>
                                    <td>{{ $company->id }}</td>
                                    <td>{{ $company->name }}</td>
                                    <td>{{ $company->email }}</td>
                                    <td>{{ $company->website }}</td>
                                    <td>
                                        <a href="{{ route('admin.companies.edit', $company->id) }}">
                                            <img width="24" height="24"
                                                src="https://img.icons8.com/material-sharp/24/edit--v1.png"
                                                alt="Edit" />
                                        </a>
                                        <form action="{{ route('admin.companies.destroy', $company->id) }}" method="POST"
                                            onsubmit="return confirm('Are you sure?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class=""> <img width="24" height="24"
                                                    src="https://img.icons8.com/material-rounded/24/filled-trash.png"
                                                    alt="Delete" /></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--end col-->
    </div>
    <!--end row-->
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#companies-datatables').DataTable({
                dom: 'Bfrtip',
                buttons: ['copy', 'csv', 'excel', 'print'],
                stateSave: true,
                destroy: true
            });
        });
    </script>
    <script>
        setTimeout(function() {
            document.getElementById('flash-message').style.display = 'none';
        }, 5000);
    </script>
@endpush
