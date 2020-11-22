@extends('layouts.app')

@section('title', 'friends')

@section('content')
<form action="/friends" method="POST">
@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Nama</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="nama"aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">No Telepon</label>
    <input type="text" class="form-control" name="no_tlpn"id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Alamat</label>
    <input type="Text" class="form-control" name="alamat"id="exampleInputPassword1">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection