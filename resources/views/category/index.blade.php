@extends('admin.create')
@section('content')

<div>
    <h1>category index</h1>
    <hr>
    <div class="container d-flex justify-content-end">
        <a href="{{route('category.create')}}" class="btn btn-primary"> create category</a>
    </div>
    @if (session('succes'))
        <div class="alert alert-success">
{{ session(
    'succes') }}
        </div>
    @endif

<table class="table">
    <thead>
        <tr>
            <td>No</td>
            <td>Name</td>
            <td>Action</td>
        
        </tr>
    </thead>
    <tbody>
        @foreach ($category as $row)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{$row->name}}</td>
            <td>
                <a href="{{route ('category.show', $row->id)}}" class="btn btn-info mb-3"> View </a>
                <a href="{{route ('category.edit', $row->id)}}" class="btn btn-warning mb-3"> Update </a>
                <form action="{{route ('category.destroy', $row->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

</div>
@endsection