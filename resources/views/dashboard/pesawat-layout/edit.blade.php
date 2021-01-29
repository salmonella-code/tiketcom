@extends('dashboard.dashboard-layout')

@section('dashboard-content')

<form method="POST" enctype="multipart/form-data" action="{{ route('pesawat.update', $items->id) }}">
    @method('PUT')
    @csrf

    <div class="form-group">
        <label for="brand_plane">Maskapai</label>
        <input type="text" class="form-control" id="brand_plane" name="brand_plane" placeholder="Maskapai" value="{{ $items->brand_plane }}">
    </div>
    <div class="form-group">
        <label for="description_plane">Deskripsi</label>
        <textarea class="form-control" id="description_plane" name="description_plane" rows="3" placeholder="Deskripsi">{{ $items->description_plane }}</textarea>
    </div>
    <div class="form-group d-flex flex-column">
        <label for="logo_plane">Logo Maskapai</label>
        <img width="150px" class="img-thumbnail mb-1" src="{{ url('/plane_logo/'.$items->logo_plane) }}">
        <input type="file" class="form-control-file" id="logo_plane" name="logo_plane">
    </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
</form>

@endsection