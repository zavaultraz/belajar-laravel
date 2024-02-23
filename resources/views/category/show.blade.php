@extends('admin.parent')
@section('content')

<div class="card p-4">

    <label for="">Name Category</label>
    <input type="text" value="{{ $category->name }}" class="form-control" disabled>

    <label for="">ID Category</label>
    <input type="text" value="{{ $category->id }}" class="form-control" disabled>

</div>

@endsection