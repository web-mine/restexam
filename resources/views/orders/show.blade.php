@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Order</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('dinner_tables.index') }}"> terug</a>
        </div>
    </div>
</div>


<a class="btn btn-primary" href="{{ route('orders.order_lines.create', ['order' => $order->id]) }}">Regel toevoegen</a>
    @isset($order->order_lines)
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Aantal</th>
                    <th scope="col">Omschrijving</th>
                    <th scope="col">Prijs</th>

                </tr>
            </thead>
        <tbody>
        @foreach ($order->order_lines as $order_line)

        <tr>
            <td>{{$order_line->amount}}</td>
            <td>{{$order_line->name}}</td>
            <td>{{$order_line->amount * $order_line->price}}</td>
            {{-- <td><a href={{route('products.show', ['product' => $product->id])}}>Bekijken</a></td> --}}
        </tr>
        @endforeach
        </tbody>
    </table>

    @else
        <p> Er zijn geen doelen</p>
    @endif
<form action="{{ route('orders.update', ['order' => $order->id]) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="hidden" value='0' name="open">
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-danger">Sluit order</button>
    </div>
</form>
@endsection

