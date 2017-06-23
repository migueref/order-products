@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="col-xs-12">
      @foreach($shopping_cart as $product)
        {{$product->name}} ${{$product->price}}
      @endforeach
    </div>
    <div class="col-xs-12">
      número de productos {{$productsSize}}
      total a pagar:{{$total}}
    </div>
    @foreach($products as $product)

      <div class="col-md-4">
        <img style="height:150px;" class="col-xs-12" src="/images/products/{{$product->image}}"
    alt="img-responsive" />
        <h3>{{$product->name}}</h3>
        <h3>{{$product->price}}</h3>
        <p>{{$product->description}}</p>

        {!!Form::open(['url' => '/shopping_carts/', 'method' => 'POST', 'class' => 'inline-block']) !!}
          <input type="hidden" name="product_id" value="{{$product->id}}">
          <input type="hidden" name="product_name" value="{{$product->name}}">
          <input type="hidden" name="product_price" value="{{$product->price}}">
          <input type="hidden" name="product_description" value="{{$product->description}}">
          <label>cantidad:</label>
          <input type="number" name="qty" >
          <input type="submit" class="col-xs-12 btn btn-success" name="" value="Agregar al carrito">
          <a onclick ="eliminarProducto({{$product->id}})"class="btn btn-danger">Eliminar</a>
        {!! Form::close() !!}


      </div>
    @endforeach

    <div class="col-xs-12">
      {{ $products->links() }}
    </div>
  </div>
@endsection
