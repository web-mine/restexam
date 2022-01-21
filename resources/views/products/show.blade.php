@extends('layouts.app')

@section('content')
    <div class="card">
      <h1>{{$product->name}}</h1>
      <p>{{$product->description}}</p>
    </div>


@endsection
