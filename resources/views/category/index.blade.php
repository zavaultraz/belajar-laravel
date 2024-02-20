@extends('admin.create')
@section('content')

<div>
    <h1>category index</h1>
    <hr>
    <div class="container d-flex justify-content-end">
        <a href="{{route('category.create')}}" class="btn btn-succes"> create category</a>
    </div>
</div>
@endsection