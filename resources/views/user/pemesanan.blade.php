@extends('layout.navbar')

@section('container')
    <form action="" method="post" class="form d-flex justify-content-start">
        @csrf
        <div class="pesan">
            <h5>Silahkan Pesan Makanan</h5>
            <label for="" class="form-label">Makanan</label>
            <br>
            <select class="form-select" name="makanan">
            @foreach ($makanan as $mak)
                <option value="{{ $mak->makanan }}">{{ $mak->makanan }}</option>
            @endforeach
            </select>
            <label for="" class="form-label">Jumlah Pesan</label>
            <br>
            <input type="text" name="total">
            <br>    
            <button type="submit" class="btn btn-success mt-2">Tambah Pesanan</button>
        </div>
    </form>

    <table class="table table-hovered table-bordered mt-2">
        <tr class="table-dark">
            <td>Nama Pemesan</td>
            <td>Pesanan</td>
            <td>Jumlah Pesan</td>
        </tr>

        @if (count($data)==0)
            <tr>
                <td colspan="3">Data Tak Ditemukan</td>
            </tr>
        @endif
         @foreach ($data as $pesan)
             <tr>
                <td>{{ $pesan->name }}</td>
                <td>{{ $pesan->makanan }}</td>
                <td>{{ $pesan->total }}</td>
             </tr>
         @endforeach
    </table>
@endsection