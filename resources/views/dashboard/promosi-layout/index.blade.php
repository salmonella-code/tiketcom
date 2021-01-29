@extends('dashboard.dashboard-layout')

@section('dashboard-content')
@if(count($errors) > 0)
<div class="alert alert-danger">
    @foreach ($errors->all() as $error)
    {{ $error }} <br/>
    @endforeach
</div>
@endif

<button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModalLong">
    Tambah Data
</button>

{{-- modal --}}
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <h5 class="modal-title text-light" id="exampleModalLongTitle">Tambah Data Promosi</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('promotion.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="title_promotions">Judul</label>
                    <input type="text" class="form-control" id="title_promotions" name="title_promotions" placeholder="Judul">
                </div>
                <div class="form-group">
                    <label for="description_promotions">Deskripsi</label>
                    <textarea class="form-control" id="description_promotions" name="description_promotions" rows="3" placeholder="Deskripsi"></textarea>
                </div>
                <div class="form-group">
                    <label for="picture_promotions">Ikon</label>
                    <input type="file" class="form-control-file" id="picture_promotions" name="picture_promotions">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>

      </div>
    </div>
  </div>
{{-- //modal --}}

<div class="card">
    <div class="table-responsive p-3">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Logo</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $key => $items)
                    
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $items->title_promotions }}</td>
                    <td>{{ Str::words($items->description_promotions, '10') }}</td>
                    <td><img width="150px" src="{{ url('/promosi/'.$items->picture_promotions) }}"></td>
                    <td>
                        <div class="text-center">
                        <a href="{{ route('promotion.show', $items->id) }}"
                            class="btn btn-sm btn-info">
                            <i class="fas fa-eye fa-sm text-white"></i>
                        </a>
                        <a href="{{ route('promotion.edit', $items->id) }}"
                            class="btn btn-sm btn-warning">
                            <i class="fas fa-edit fa-sm text-white"></i>
                        </a>
                        <a
                            onclick="return confirm('Yakin untuk menghapus promosi {{$items->title}}? ')">
                            <form action="{{ route('promotion.destroy', $items->id) }}"
                                method="post" class="d-inline">
                                @csrf
                                @method('delete')
                                <button class="btn btn-sm btn-danger">
                                    <i class="fas fa-fw fa-trash text-white"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
</div>

@endsection