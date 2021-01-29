@extends('dashboard.dashboard-layout')

@section('dashboard-content')

<div class="container text-center">
    <img src="{{ url('/promosi/'.$items->picture_promotions) }}" alt="">
    <h1>{{ $items->title_promotions }}</h1>
    <p>{{ $items->description_promotions }}</p>
</div>

@endsection