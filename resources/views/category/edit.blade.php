@extends('admin.parent')
@section('content')

<div class="card p-4">

<form action="{{route ('category.update', $category->id)}}" method="post">
    @csrf
    @method('PUT')
    <!-- 
    method post = crate 
    method put = update
    method DELETE = delete 
    method Patch = update

-->
    <label for="">Name Category</label>
    <input type="text" value="{{ $category->name }}" class="form-control" name="name">
    <button class="btn btn-warning" type="submit">Update</button>

</form>



</div>

@endsection