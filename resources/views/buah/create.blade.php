@extends('admin.parent')

@section( 'content' )

<div class="card p-4">

    <div class="card p-4">

        <h1>Create Category</h1>

        <form action="{{route ('buah.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="form-floating mb-3">
                <input type="" class="form-control" id="floatingInput" placeholder="kesehatan" name="nama">
                <label for="floatingInput">Nama Buah</label>
            </div>
            <div class="form-floating mb-3">
                <input type="" class="form-control" id="floatingInput" placeholder="kesehatan" name="harga">
                <label for="floatingInput">Harga</label>
            </div>
            <div class="form-floating mb-3">
                <input type="" class="form-control" id="floatingInput" placeholder="kesehatan" name="warna">
                <label for="floatingInput">warna</label>
            </div>

            <button type="submit" class="btn btn-primary">bikin</button>

        </form>

    </div>

</div>

@endsection