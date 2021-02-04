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
            <div class="card shadow border-0 rounded-lg mt-5">
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label class="small mb-1" for="email">Email</label>
                            <input id="email" type="email"
                                class="form-control py-4 @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="inputPassword">Password</label>
                            <input id="password" type="password"
                                class="form-control py-4 @error('password') is-invalid @enderror" name="password"
                                required autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{
                                    old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    {{ __('Ingat Saya') }}
                                </label>
                            </div>
                        </div>
                        <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                            <button type="submit" class="btn btn-warning text-white font-weight-bold rounded-pill btn-block">
                                {{ __('Masuk') }}
                            </button>

                            {{-- @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Lupa Password?') }}
                            </a>
                            @endif --}}
                        </div>
                    </form>
                    <div class="d-flex justify-content-center mt-3 border-top">
                        <a href="{{ route('register') }}" class="pt-2"><small>Buat akun baru</small></a>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
</div>
@endsection