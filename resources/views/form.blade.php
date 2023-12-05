@extends('up')

@section('down')
<form method="POST" action="{{ route('simpan-biodata') }}">
    @csrf
    <label for="nama">Nama:</label>
    <input type="text" name="nama" id="nama"><br><br>

    <label for="npm">NPM:</label>
    <input type="text" name="npm" id="npm"><br><br>

    <label for="nilai">Nilai:</label>
    <input type="text" name="nilai" id="nilai"><br><br>

    <button type="submit">Simpan</button>
</form>

@endsection
