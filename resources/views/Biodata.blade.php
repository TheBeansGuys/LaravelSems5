@extends('header')

@section()

<h1>Biodata</h1>
<p>Nama: {{ $biodata->nama }}</p>
<p>NPM: {{ $biodata->npm }}</p>
<p>Nilai: {{ $biodata->nilai }}</p>

