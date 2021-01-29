@extends('dashboard.dashboard-layout')

@section('dashboard-content')

<div class="container text-center">
    <img src="{{ url('/plane_logo/'.$items->logo_plane) }}" alt="">
    <h1>{{ $items->brand_plane }}</h1>
    <p>{{ $items->description_plane }}</p>
</div>

@endsection