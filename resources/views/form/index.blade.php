@extends('form.master')
@section('body')
<div>
    <div>
        Form Testing
    </div>
    <div>
        <form action="{{route('form.action')}}" method="POST" style="display: flex; flex-direction:column; gap: 10px;">
            @csrf
            <div>
                <label for="nama">Nama:</label>
                <input type="text" name="nama">
            </div>
            <div>
                <label for="npm">NPM</label>
                <input type="text" name="npm">
            </div>
            <div>
                <label for="nama">nilai</label>
                <input type="number" step="0.1" name="nilai">
            </div>
            <div>

                <input type="submit" name="submit" value="Submit">
            </div>
        </form>
    </div>
</div>

@endsection
