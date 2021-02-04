@extends('layouts.app')
@section('ContentMobile')
<div class="container mt-5 pt-5 mb-4">
    <div class="container-fluid">
        <div class="card shadow mt-1 p-3">
            <img src="{{ asset('img/logo.webp') }}" alt="" class="w-50 pb-3 mx-auto">
            <div class="form-group border-bottom">
                <span class="font-weight-bold">Nama:</span>
                <span class="text-capitalize">{{ Auth::user()->name }}</span>
            </div>
            <div class="form-group border-bottom">
                <span class="font-weight-bold">Email:</span>
                <span>{{ Auth::user()->email }}</span>
            </div>
            <div class="form-group border-bottom">
                <span class="font-weight-bold">Hak Akses:</span>
                <span class="text-capitalize">{{ Auth::user()->role }}</span>
            </div>
            @if(Auth::user()->role == 'admin')
                <a href="{{ url('/admin') }}" class="btn btn-warning rounded-pill btn-block font-weight-bold text-white">Dashboard</a>                         
            @endif

            <a class="btn btn-danger rounded-pill btn-block font-weight-bold text-white" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
        </div>
    </div>
</div>
@endsection