@include('partials.navbar',['name' => 'Login'])

<style>
    .main {
        width: 100%;
        height: 40vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .container {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        width: 300px;
    }

    h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #333;
    }

    .input-group {
        margin-bottom: 15px;
    }

    .input-group label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
        color: #555;
    }

    .input-group input {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 14px;
        color: #333;
    }

    .input-group input:focus {
        border-color: #007bff;
        outline: none;
    }

    .submit-btn {
        text-align: center;
    }

    .submit-btn button {
        background-color: #007bff;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        width: 100%;
        font-size: 16px;
    }

    .submit-btn button:hover {
        background-color: #0056b3;
    }
</style>
<div class="main">

    <div class="container">
        <h2>Register</h2>
        <form action="/login-form" method="post">

          @csrf

            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="submit-btn">
                <button type="submit">Login</button>
            </div>
        </form>
    </div>
</div>