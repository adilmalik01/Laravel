<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
    }

    .navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px 50px;
        background-color: #4f6f4f;
    }

    .navbar .logo a {
        color: white;
        font-size: 24px;
        text-decoration: none;
        font-weight: bold;
    }

    .nav-links {
        display: flex;
        list-style: none;
    }

    .nav-links li {
        margin-left: 30px;
    }

    .nav-links a {
        color: white;
        text-decoration: none;
        font-size: 18px;
        transition: color 0.3s ease;
    }

    .nav-links a:hover {
        color: #00bcd4;
    }

    .menu-icon {
        display: none;
        cursor: pointer;
    }

    .menu-icon .bar {
        width: 30px;
        height: 4px;
        background-color: white;
        margin: 6px 0;
        transition: 0.3s;
    }

    .nav-links {
        width: 65%;
        justify-content: space-between;
    }

    .link,
    .account {
        display: flex;
    }


    .bgImage {
        background-image: url('https://mrwallpaper.com/images/hd/download-laptop-wallpaper-5ce5t5pniq83sl6c-2.jpg');
        background-size: cover;
        position: relative;
        background-position: center;
        height: 30vh;
        color: white;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .bgImage h1{
        position: relative;
        z-index: 99999;
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }

    .opacity {
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        background-color: rgba(0, 0, 0, 0.6);
    }

    @media screen and (max-width: 768px) {
        .nav-links {
            display: none;
            width: 100%;
            position: absolute;
            top: 80px;
            left: 0;
            background-color: #333;
            flex-direction: column;
            align-items: center;
        }

        .nav-links li {
            margin: 20px 0;
        }

        .nav-links.active {
            display: flex;
        }

    }
</style>

<header>
    <nav class="navbar">
        <div class="logo">
            <a href="#">MySite</a>
        </div>
        <ul class="nav-links">
            <div class="link">
                <li><a href="/">Home</a></li>
                <li><a href="products">Products</a></li>
                <li><a href="about">About</a></li>
                <li><a href="service">Services</a></li>
                <li><a href="contact">Contact</a></li>
            </div>

            <div class="account">
                <li><a href="login">Login</a></li>
                <li><a href="registar">Register</a></li>
            </div>
        </ul>
        <div class="menu-icon" id="menu-icon">
            <span class="bar"></span>
            <span class="bar"></span> 
            <span class="bar"></span>
        </div>
    </nav>

    <div class="bgImage">
        <div class="opacity"></div>
         <h1>Home > {{$name}}</h1>
    </div>
</header>


<script>
    const menuIcon = document.getElementById("menu-icon");
    const navLinks = document.querySelector(".nav-links");

    menuIcon.addEventListener("click", () => {
        navLinks.classList.toggle("active");
    });
</script>