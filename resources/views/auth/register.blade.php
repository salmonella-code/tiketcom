@extends('layoutsLogin.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <img src="{{ asset('img/logo.webp') }}" alt="" class="w-25 ">
    </div>
    <div class="row justify-content-center">
        <div class="col-6 d-none d-sm-block">
            <div class="card shadow border-0 rounded-lg mt-5">
                <div class="card-body">
                    <p class="h5 text-center font-weight-bold">Gabung dan gunakan fitur mudahnya.</p>
                    @foreach($promosi as $key => $items)
                    <div class="container-card d-flex align-items-center border-bottom mb-3">
                        <img src="{{ url('/promosi/'.$items->picture_promotions) }}" alt="image" width="90" height="60">
                        <div class="text ml-2">
                            <p class="font-weight-bold mb-0">{{ $items->title_promotions }}</p>
                            <p class="mb-0 pb-3">{{ Str::words($items->description_promotions, '10') }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="col-md-6 col-sm-12">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
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
                    <div class="d-flex justify-content-center mt-3 border-top">
                        <a href="{{ route('login') }}" class="pt-2"><small>Sudah punya akun ?</small></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
