@extends('layout.base')
@section('content')
 <h2>{{$packet->title}}</h2>
 <p>{{$packet->description}}</p>
 <h6>{{$packet->price}}</h6>
 <img src="{{$packet->image}}" alt="">
@endsection