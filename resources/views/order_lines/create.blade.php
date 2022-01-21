@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Product toevoegen</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('orders.edit', ['order' => $order->id]) }}"> terug</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('orders.order_lines.store', ['order' => $order->id]) }}" method="POST">
    @csrf

     <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <label for="amount">aantal</label>
                <input type="number" name="amount" class="form-control">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
          <div class="form-group">
            <label for="name">Product</label>
            <select name="product_id" required class="form-control">
              <option selected disabled>Selecteer een product</option>
              @foreach($products as $product)
                <option value="{{$product->id}}">{{$product->name}}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Opslaan</button>
        </div>
    </div>

</form>
@endsection
