@extends('layout.admin')

@section('container')
<form action="" method="post" class="form d-flex justify-content-start">
    @csrf
    <div class="pesan">
        <h5>Edit Data Makanan</h5>
        <input type="hidden" name="code"value="{{ $id }}">
        <label for="" class="form-label">Nama Makanan</label>
        <br>
        <input type="text" name="makanan">
        <br>
        <button type="submit" class="btn btn-success mt-2">Edit Menu</button>
    </div>
</form>
@endsection