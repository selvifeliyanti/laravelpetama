@extends('layouts.app')

@section('title', 'urutan')

@section('content')

@foreach ($friends as $friend)
    <h1>Nama ke - {{ $friend['nama'] }}</h1>
    <h3>No Tlp ke - {{ $friends['no.tlp'] }}</h3>
    <h3>Alamat ke - {{ $friends['alamat'] }}</h3>
@endforeach

@endsection