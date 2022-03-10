@extends('master') @section("content")
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img class="detail_img" src="{{ $products['gallery'] }}" />
        </div>
        <div class="col-sm-6">
            <a href="/">Go Back</a>
            <h2>{{ $products["name"] }}</h2>
            <h3>Price : {{ $products["price"] }}</h3>
            <h4>Description : {{ $products["discription"] }}</h4>
            <h4>Category: {{ $products["category"] }}</h4>
            <br />
            <form action="/add_to_cart" method="POST">
                @csrf <input type="hidden" name="product_id" value={{
                    $products["id"]
                }}
                >
                <button class="btn btn-primary">Add To cart</button>
            </form>

            <br /><br />
            <button class="btn btn-success">Buy now</button>
        </div>
    </div>
</div>

@endsection
