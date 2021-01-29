@extends('dashboard.dashboard-layout')

@section('dashboard-content')

<form action="{{ route('bannerMobile.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="banner_mobile">Banner mobile</label>
        <input type="file" class="form-control-file" id="banner_mobile" name="banner_mobile">
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>

<h6 class="mt-3">Priview banner mobile</h6>
<!-- container carausel -->
<div class="jumbotron jumbotron-fluid justify-content-center pt-0">
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" width="908">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                @foreach($data as $key => $items)
                <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                    <img class="d-block mx-auto" src="{{ url('/bannerMobile/'.$items->bannerMobile) }}" alt="First slide" width="908">
                </div>
                @endforeach
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
<!-- //container carausel -->


<div class="card mt-3">
    <div class="table-responsive p-3">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Banner</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $key => $items)
                    
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td><img width="150px" src="{{ url('/bannerMobile/'.$items->bannerMobile) }}"></td>
                    <td>
                        <div class="text-center">
                        <a
                            onclick="return confirm('Yakin untuk menghapus banner desktop {{$items->bannerMobile}}? ')">
                            <form action="{{ route('bannerMobile.destroy', $items->id) }}"
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