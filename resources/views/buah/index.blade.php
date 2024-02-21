@extends('admin.create')
@section('content')

<div>
    <h1>category index</h1>
    <hr>
    <div class="container d-flex justify-content-end">
        <a href="{{route('buah.create')}}" class="btn btn-primary"> create buah</a>
    </div>
</div>
@endsection