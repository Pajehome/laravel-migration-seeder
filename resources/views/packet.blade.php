@extends('layout.base')
@section('content')
 <ul>
    @foreach($packets as $packet)
     <li><a href="{{route('detail', $packet->id)}}">{{$packet->name}}</a></li>
    @endforeach 
 </ul>
@endsection