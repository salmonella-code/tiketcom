@extends('dashboard.dashboard-layout')

@section('dashboard-content')

<form method="POST" enctype="multipart/form-data" action="{{ route('promotion.update', $items->id) }}">
    @method('PUT')
    @csrf

    <div class="form-group">
        <label for="title_promotions">judul</label>
        <input type="text" class="form-control" id="title_promotions" name="title_promotions" placeholder="judul" value="{{ $items->title_promotions }}">
    </div>
    <div class="form-group">
        <label for="description_promotions">Deskripsi</label>
        <textarea class="form-control" id="description_promotions" name="description_promotions" rows="3" placeholder="Deskripsi">{{ $items->description_promotions }}</textarea>
    </div>
    <div class="form-group d-flex flex-column">
        <label for="picture_promotions">Ikon</label>
        <img width="150px" class="img-thumbnail mb-1" src="{{ url('/promosi/'.$items->picture_promotions) }}">
        <input type="file" class="form-control-file" id="picture_promotions" name="picture_promotions">
    </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
</form>

@endsection