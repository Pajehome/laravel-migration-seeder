<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Packet;

class PacketController extends Controller
{
    public function index(){
        $packets = Packet::all();
        return view('packet', compact('packets'));
    }

     public function show($id){
         $packet = Packet::findOrfail($id);
         return view('detail', compact('packet'));
     }
}
