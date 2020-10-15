@extends('layouts.app')

@section('title', 'urutan')

@section('content')

@foreach ($numbers as $number)
    <h1>Urutan ke - {{ $number['ke'] }}</h1>
    <h3>Nomer ke - {{ $number['nomer'] }}</h3>
@endforeach

@endsection