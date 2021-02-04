@extends('dashboard.dashboard-layout')

@section('dashboard-content')

@if ($message = Session::get('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong><p>{{ $message }}</p></strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
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
          <h5 class="modal-title text-light" id="exampleModalLongTitle">Tambah Data Customer</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="POST" action="{{ route('CustomerUser.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="small mb-1" for="name">Nama</label>
                    <input id="name" type="text" class="form-control py-4 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                <div class="form-group">
                    <label class="small mb-1" for="email">Email</label>
                    <input id="email" type="email" class="form-control py-4 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="small mb-1" for="password">Password</label>
                            <input id="password" type="password" class="form-control py-4 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="small mb-1" for="password-confirm">Confirm Password</label>
                            <input id="password-confirm" type="password" class="form-control py-4" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>
                </div>
                <div class="form-group mt-4 mb-0">
                    <button type="submit" class="btn btn-warning text-white font-weight-bold btn-block rounded-pill">
                        {{ __('Daftar') }}
                    </button></div>
            </form>
        </div>

      </div>
    </div>
  </div>
{{-- //modal --}}

<div class="card mt-3">
    <div class="table-responsive p-3">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $key => $items)
                    
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $items->name }}</td>
                    <td>{{ $items->email }}</td>
                    <td>{{ $items->role }}</td>
                    <td>
                        <div class="text-center">
                        <a href="{{ route('CustomerUser.edit', $items->id) }}"
                            class="btn btn-sm btn-warning">
                            <i class="fas fa-edit fa-fw text-white"></i>
                        </a>
                        <a
                            onclick="return confirm('Yakin untuk menghapus user {{$items->name}}? ')">
                            <form action="{{ route('CustomerUser.destroy', $items->id) }}"
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