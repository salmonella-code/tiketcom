@extends('dashboard.dashboard-layout')

@section('dashboard-content')

<form action="">
    <div class="form-group">
        <label for="exampleFormControlInput1">Judul</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Contoh: Liburan akhir taun">
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Deskripsi</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Liburan super mantap"></textarea>
    </div>
    <div class="form-group">
        <label for="exampleFormControlFile1">Banner promosi</label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1">
    </div>
</form>

@endsection