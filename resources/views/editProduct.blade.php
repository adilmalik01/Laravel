@include("partials.navbar", ["name" => "Edit Product"])

<style>
    .main {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: #f4f7fc;
    }

    .container {
        background-color: #ffffff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 600px;
        transition: transform 0.3s ease;
    }

    h1 {
        text-align: center;
        color: #333;
        font-size: 26px;
        margin-bottom: 20px;
    }

    .input-group {
        margin-bottom: 25px;
    }

    .input-group label {
        display: block;
        margin-bottom: 8px;
        color: #555;
        font-size: 14px;
        font-weight: 600;
    }

    .input-group input,
    .input-group textarea,
    .input-group select {
        width: 100%;
        padding: 14px;
        border-radius: 10px;
        border: 1px solid #ddd;
        background-color: #f9f9f9;
        font-size: 14px;
        color: #333;
        box-sizing: border-box;
        transition: border-color 0.3s, background-color 0.3s;
    }

    .input-group input:focus,
    .input-group textarea:focus,
    .input-group select:focus {
        outline: none;
        border-color: #007BFF;
        background-color: #fff;
    }

    .input-group input[type="file"] {
        border: none;
        padding: 0;
    }

    .input-group input[type="file"]::file-selector-button {
        padding: 10px;
        background-color: #007BFF;
        color: white;
        border-radius: 8px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .input-group input[type="file"]::file-selector-button:hover {
        background-color: #0056b3;
    }

    .submit-btn {
        width: 100%;
        padding: 15px;
        border: none;
        background-color: #007BFF;
        color: white;
        font-size: 16px;
        font-weight: bold;
        border-radius: 10px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .submit-btn:hover {
        background-color: #0056b3;
    }

    .submit-btn:active {
        background-color: #00408d;
    }

    /* Responsive Design */
    @media (max-width: 600px) {
        .container {
            padding: 20px;
            max-width: 90%;
        }

        h1 {
            font-size: 22px;
        }

        .submit-btn {
            padding: 12px;
            font-size: 14px;
        }
    }
</style>

<div class="main">
    <div class="container">
        <h1>Edit Product</h1>
        <form action="/updateProduct/{{ $product->id }}" method="POST" class="product-form" enctype="multipart/form-data">
            @csrf
            @method('PUT') <!-- This will ensure that the form submits as a PUT request for updating -->

            <!-- Product Name -->
            <div class="input-group">
                <label for="productName">Product Name</label>
                <input type="text" id="productName" name="productName" value="{{ old('productName', $product->product_name) }}" required placeholder="Enter product name">
            </div>

            <!-- Product Price -->
            <div class="input-group">
                <label for="productPrice">Product Price</label>
                <input type="number" id="productPrice" name="productPrice" value="{{ old('productPrice', $product->product_price) }}" required placeholder="Enter product price">
            </div>

            <!-- Product Details -->
            <div class="input-group">
                <label for="productDetails">Product Details</label>
                <textarea id="productDetails" name="productDetails" rows="4" required placeholder="Enter product details">{{ old('productDetails', $product->product_details) }}</textarea>
            </div>

            <!-- Product Category -->
            <div class="input-group">
                <label for="productCategory">Product Category</label>
                <select id="productCategory" name="productCategory" required>
                    <option value="">Select Category</option>
                    <option value="Electronics" {{ $product->product_category == 'Electronics' ? 'selected' : '' }}>Electronics</option>
                    <option value="Clothing" {{ $product->product_category == 'Clothing' ? 'selected' : '' }}>Clothing</option>
                    <option value="Home Appliances" {{ $product->product_category == 'Home Appliances' ? 'selected' : '' }}>Home Appliances</option>
                    <option value="Books" {{ $product->product_category == 'Books' ? 'selected' : '' }}>Books</option>
                    <!-- Add more categories as needed -->
                </select>
            </div>

            <!-- Product Image -->
            <div class="input-group">
                <label for="productImage">Product Image</label>
                <input type="file" id="productImage" name="productImage" accept="image/*">
                <!-- Display current image if available -->
                @if($product->image)
                <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image" width="100" height="100">
                @endif
            </div>

            <!-- Stock Quantity -->
            <div class="input-group">
                <label for="productStock">Stock Quantity</label>
                <input type="number" id="productStock" name="productStock" value="{{ old('productStock', $product->product_stock) }}" required placeholder="Enter stock quantity">
            </div>

            <!-- Submit Button -->
            <button type="submit" class="submit-btn">Update Product</button>
        </form>
    </div>
</div>