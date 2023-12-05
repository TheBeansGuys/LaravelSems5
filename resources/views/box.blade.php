@extends('utama')
@section('judul_menu')
    @php

    @endphp
    @for($i=0;$i<10;$i++)
        <h1>{{$i}}. Ini adalah halaman barang</h1>
    @endfor
@endsection

@section('isi_menu')
    <p>Ini adalah halaman barang</p>
@endsection
