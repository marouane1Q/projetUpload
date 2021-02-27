@extends('store.storeLayout') 
@section('content')
    <div class="section">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="section-title">
                        <h3 class="title">Nouveau produit</h3>

                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row">


                        @foreach($products as $product)
                        <div class="col-md-3">
                            <div class="product">
                                <div class="product-img">
                                    <img src="uploads/products/{{$product->id}}/{{$product->image_name}}" alt="">
                                    <div class="product-label">
                                        <span class="sale">Offre</span>
                                    </div>
                                </div>
                                <div class="product-body">
                                    <p class="product-category">{{$product->category->name}}</p>
                                    <h3 class="product-name"><a href="{{route('user.view',['id'=>$product->id])}}">{{$product->name}}</a></h3>
                                    <h4 class="product-price">DH {{$product->discount}} <del class="product-old-price">DH {{$product->price}}</del></h4>
                                    <div class="product-rating">
                                    </div>
                                    
                                </div>
                                <div class="add-to-cart">
                                    <a class="add-to-cart-btn" href="{{route('user.view',['id'=>$product->id])}}">Commander</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection