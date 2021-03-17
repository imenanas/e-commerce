
@extends('layouts.app')

@section('main')
<div class="grid">

@foreach ($products as $product)
<div class="grid_item">
    <div class="img_container"><img src="https://picsum.photos/400/200" alt=""></div>
      <ul class="product_list">
           <li>{{$product->name}}</li>
           <li>{{$product->price}}</li>
           <li>{{$product->description}}</li>
   
      </ul>
      <button class="btn_commander">commander</button>

    </div>



@endforeach
</div>
@endsection