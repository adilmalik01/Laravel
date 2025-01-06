@include('partials.navbar',['name' => 'products'])


<style>
    .main {
        width: 100%;
        min-height: 100vh;
        display: grid;
        grid-template-columns: 3fr 3fr 3fr;
        gap: 10px;
        padding: 30px 0;
        transition: 0.3s;
    }

    .product {
        text-align: center;
        border-radius: 10px;
        cursor: pointer;
        transition: 0.3s;
    }


    .product:hover {
        transform: scale(1.05);
    }
</style>


<div class="main">

    @foreach ($products as $product)
    <div class="product">
        <img width="400" src={{$product["product_image"]}} alt="">
        <h2>{{ $product["product_title"] }}</h2>
        <p>{{ $product["product_price"] }}</p>
        <p>{{$product["format"]}}</p>
    </div>
    @endforeach

</div>