@include('partials.navbar',['name' => 'products'])


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

<style>
    .product-container {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        padding: 20px;
    }

    .product {
        background: #f9f9f9;
        border-radius: 8px;
        padding: 20px;
        width: calc(33.33% - 20px);
        box-sizing: border-box;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }

    .product:hover {
        transform: translateY(-5px);
    }

    .product-info {
        margin-bottom: 20px;
    }

    .product-name {
        font-size: 1.5em;
        font-weight: bold;
        color: #333;
        margin: 0;
    }

    .price {
        font-size: 1.2em;
        color: #4CAF50;
        margin: 10px 0;
    }

    .product-details {
        font-size: 1em;
        color: #777;
    }

    .product-actions {
        display: flex;
        gap: 10px;
    }

    .action-btn {
        padding: 10px 15px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        display: flex;
        align-items: center;
        gap: 5px;
        transition: background-color 0.3s ease;
    }

    .delete-btn {
        background-color: #f44336;
        color: white;
    }

    .edit-btn {
        background-color: #ffa500;
        color: white;
    }

    .delete-btn:hover {
        background-color: #d32f2f;
    }

    .edit-btn:hover {
        background-color: #ff8c00;
    }

    .action-btn i {
        font-size: 1.2em;
    }

    @media screen and (max-width: 768px) {
        .product {
            width: calc(50% - 20px);
        }
    }

    @media screen and (max-width: 480px) {
        .product {
            width: 100%;
        }
    }
</style>



<div class="product-container">
    @foreach ($products as $product)
    <div class="product">
        <div class="product-info">
            <h2 class="product-name">{{ $product["product_name"] }}</h2>
            <p class="price">$ {{ number_format($product['product_price'], 2) }}</p>
            <p class="product-details">{{ $product["product_details"] }}</p>
        </div>

        <div class="product-actions">
            <button class="action-btn delete-btn">
                <a onclick="return confirm('are you sure ?')" href="/product/delete/{{$product["id"]}}">
                    <i class="fas fa-trash-alt"></i> Delete

                    
                </a>
            </button>
            <button class="action-btn edit-btn">
                <i class="fas fa-edit"></i> Edit
            </button>
        </div>
    </div>
    @endforeach
</div>