@extends('dashboard.dashboard-layout')

@section('dashboard-content')

<form method="POST" enctype="multipart/form-data" action="{{ route('CustomerUser.update', $items->id) }}">
    @method('PUT')
    @csrf

    <div class="form-group">
        <label for="name">Nama</label>
        <input type="text" class="form-control" id="name" name="name"value="{{ $items->name }}">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" id="email" name="email"
            value="{{ $items->email }}">
    </div>
    <div class="form-group">
        <label for="role">Role</label>
        <select name="role" id="role" class="form-control">
            {{-- <option value="admin">Admin</option>
            <option value="customer">Customer</option> --}}
            @if (Input::old('role') == 'admin')
                <option value="admin" selected>Admin</option>
                <option value="customer">Customer</option>
            @else
                <option value="customer">Customer</option>
                <option value="admin">Admin</option>
            @endif
        </select>
    </div>

    <div class="form-row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="small mb-1" for="password">Password</label>
                <input id="password" type="password" class="form-control py-4 @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

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
                <input id="password-confirm" type="password" class="form-control py-4" name="password_confirmation" autocomplete="new-password">
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>

@endsection