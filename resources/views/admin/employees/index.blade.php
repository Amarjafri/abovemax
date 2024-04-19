@extends('admin.layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card" style="width: 100%">
                <div class="card-header d-flex align-items-center">
                    <h5 class="card-title mb-0 flex-grow-1">Employees</h5>
                    <div>
                        <a href="{{ route('admin.employees.create') }}" class="btn btn-dark">Add New Employee</a>
                    </div>
                </div>
                <div class="card-body">
                    <table id="employees-datatables" class="table align-middle">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Company</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($employees as $employee)
                                <tr>
                                    <td>{{ $employee->id }}</td>
                                    <td>{{ $employee->first_name }}</td>
                                    <td>{{ $employee->last_name }}</td>
                                    <td>{{ $employee->company->name }}</td>
                                    <td>{{ $employee->email }}</td>
                                    <td>{{ $employee->phone }}</td>
                                    <td>
                                        <a href="{{ route('admin.employees.edit', $employee->id) }}">
                                            <img width="24" height="24"
                                                src="https://img.icons8.com/material-sharp/24/edit--v1.png"
                                                alt="Edit" />
                                        </a>
                                        <form action="{{ route('admin.employees.destroy', $employee->id) }}" method="POST"
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
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#employees-datatables').DataTable();
        });
    </script>
@endpush
