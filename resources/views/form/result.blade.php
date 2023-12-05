@extends('form.master')
@section('body')
<div>
    <div>
        Form Submited
    </div>
    <div>
        <form  style="display: flex; flex-direction:column; gap: 10px;">
            @csrf
            <div>
                <label for="nama">Nama:</label>
                <input type="text" name="nama" value="{{$data->nama}}"disabled>
            </div>
            <div>
                <label for="npm">NPM</label>
                <input type="text" name="npm" value="{{$data->npm}}" disabled>
            </div>
            <div>
                <label for="nama">nilai</label>
                <input type="number" step="0.1" name="number" value="{{$data->nilai}}"disabled>
            </div>
            <div>

            </div>
        </form>
    </div>
</div>

@endsection
