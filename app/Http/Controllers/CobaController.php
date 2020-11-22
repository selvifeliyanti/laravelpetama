<?php

namespace App\Http\Controllers;
use App\Models\friends;
use Illuminate\Http\Request;


class CobaController extends Controller
{
   
    public function index()
    {
        $friends = friends::paginate(3);

        return view('index',compact('friends'));
    }
    public function create()
    {
        
        return view('create');
    }
    public function store(Request $request)
    {
        // Validate the request...

        $friends = new friends;

        $friends->nama = $request->nama;
        $friends->no_tlpn = $request->no_tlpn;
        $friends->alamat = $request->alamat;

        $friends->save();
    }
}
