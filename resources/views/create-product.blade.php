@include("partials.navbar",["name"=>"Add Product"])

<style>
    .main {
        width: 100%;
        min-height: 50vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    /* Form container */
    .container {
        background-color: white;
        padding: 30px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        width: 100%;
        max-width: 400px;
    }

    h1 {
        text-align: center;
        color: #333;
        margin-bottom: 20px;
    }

    /* Input groups */
    .input-group {
        margin-bottom: 20px;
    }

    .input-group label {
        display: block;
        margin-bottom: 5px;
        color: #555;
        font-weight: bold;
    }

    .input-group input,
    .input-group textarea {
        width: 100%;
        padding: 12px;
        border-radius: 8px;
        border: 1px solid #ccc;
        font-size: 14px;
        color: #333;
        background-color: #f9f9f9;
        box-sizing: border-box;
    }

    .input-group input:focus,
    .input-group textarea:focus {
        outline: none;
        border-color: #007BFF;
        background-color: #fff;
    }

    /* Submit button */
    .submit-btn {
        width: 100%;
        padding: 12px;
        border: none;
        background-color: #007BFF;
        color: white;
        font-size: 16px;
        font-weight: bold;
        border-radius: 8px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .submit-btn:hover {
        background-color: #0056b3;
    }

    .submit-btn:active {
        background-color: #00408d;
    }
</style>
<div class="main">

    <div class="container">
        <h1>Add New Product</h1>
        <form action="/addProduct" method="POST" class="product-form">
            @csrf
            <div class="input-group">
                <label for="productName">Product Name</label>
                <input type="text" id="productName" name="productName" required placeholder="Enter product name">
            </div>

            <div class="input-group">
                <label for="productPrice">Product Price</label>
                <input type="number" id="productPrice" name="productPrice" required placeholder="Enter product price">
            </div>

            <div class="input-group">
                <label for="productDetails">Product Details</label>
                <textarea id="productDetails" name="productDetails" rows="4" required placeholder="Enter product details"></textarea>
            </div>

            <button type="submit" class="submit-btn">Add Product</button>
        </form>
    </div>
</div>