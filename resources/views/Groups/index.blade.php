@extends('layouts.app')

@section('title', 'Groups')

@section('content')
<a href="/groups/create" class="card-link btn-primary">Tambah group</a>
@foreach ($groups as $group)

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <a href="/groups/{{$group['id']}}" class="card-title"> {{ $group['name'] }}</a>

    <p class="card-text"> {{ $group['description'] }}</p>
    <hr>
    <a href=" " class="card-link btn-primary">Tambah anggota teman</a>

  @foreach ($group->friends as $friend)
  <li> {{$friend->nama}} </li>
@endforeach
    <hr>




    <a href="/groups/{{$group['id']}}/edit" class="card-link btn-warning">Edit group </a>
    <form action="/groups/{{ $group['id']}}" method="POST">
    @csrf 
    @method('Delete')
    <button class="card-link btn-danger">Delete group </a>
    </form>
  </div>
</div>


@endforeach
<div>
    {{$groups->links()}}
 </div>
@endsection 
 12  resources/views/Groups/show.blade.php 
@@ -0,0 +1,12 @@
@extends('layouts.app')

@section('title', 'cobaaaa')
@section('content')
<div class="card">
    <div class="card-body">
        <h3>Nama Group :{{$group['name']}}</h3>

        <h3>description :{{$group['description']}}</h3>
    </div>
</div>
@endsection 
 3  resources/views/layouts/app.blade.php 
@@ -22,11 +22,12 @@
    <div class="navbar-nav">
      <a class="nav-link active" href="/">Home <span class="sr-only">(current)</span></a>
      <a class="nav-link" href="/friends">Friends</a>
      <a class="nav-link" href="/groups">Groups</a>

    </div>
  </div>
</nav>
    <a href="/friends/create" class="card-link btn-primary">Tambah Teman</a>


     @yield('content')

 20  routes/web.php 
@@ -1,4 +1,5 @@
<?php
use App\Http\Controllers\groupscontroller;
use App\Http\Controllers\cobacontroller;
use Illuminate\Support\Facades\Route;

@@ -14,10 +15,15 @@
*/

route::get('', [Cobacontroller::class, 'index']);
route::get('/friends', [Cobacontroller::class, 'index']);
route::get('/friends/create', [Cobacontroller::class, 'create']);
route::post('/friends', [Cobacontroller::class, 'store']);
route::get('/friends/{id}', [Cobacontroller::class, 'show']);
route::get('/friends/{id}/edit', [Cobacontroller::class, 'edit']);
route::put('/friends/{id}', [Cobacontroller::class, 'update']);
route::delete('/friends/{id}', [Cobacontroller::class, 'destroy']); 
//route::get('/friends', [Cobacontroller::class, 'index']);
//route::get('/friends/create', [Cobacontroller::class, 'create']);
//route::post('/friends', [Cobacontroller::class, 'store']);
//route::get('/friends/{id}', [Cobacontroller::class, 'show']);
//route::get('/friends/{id}/edit', [Cobacontroller::class, 'edit']);
//route::put('/friends/{id}', [Cobacontroller::class, 'update']);
//route::delete('/friends/{id}', [Cobacontroller::class, 'destroy']);

route::resources([
    'friends' =>cobacontroller::class,
    'groups' =>groupscontroller::class,
]);