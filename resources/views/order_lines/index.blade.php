@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
    @parent
    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <div class="row">
        <div class="col"><h1>Alle products</h1></div>
        <div class="col  d-flex justify-content-end">
            <a class=' align-self-end btn btn-primary' href={{route('products.create')}}>Maak een nieuw product</a>
        </div>
    </div>

    @isset($products)
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Naam</th>
                    <th scope="col">Omschrijving</th>
                    <th scope="col">Prijs</th>
                    <th scope="col"></th>
                </tr>
            </thead>
        <tbody>
        @foreach ($products as $product)

        <tr>
            <th>{{$product->name}}</th>
            <td>{{$product->description}}</td>
            <td>{{$product->price}}</td>
            <td><a href={{route('products.show', ['product' => $product->id])}}>Bekijken</a></td>
        </tr>
        @endforeach
        </tbody>
    </table>

    @else
        <p> Er zijn geen doelen</p>
    @endif
@endsection
