@extends('admin.parent')

@section('content')
<div class="container d-flex justify-content-end">
    <a href="{{ route('admin.create') }}" class="btn btn-primary">Create admin</a>
</div>

<div class="container">
    <h5 class="fw-bold text-center mb-4">User Data</h5>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Gender</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <!-- You can add more rows dynamically or manually -->
        </tbody>
    </table>
</div>
@endsection