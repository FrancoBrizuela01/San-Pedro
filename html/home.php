<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="media.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <title>Panaderia San Pedro</title>
</head>

<body>
    <nav class="navbar">
        <div class="content">
            <div class="logo">
                <a href="#">San Pedro</a>
            </div>
            <ul class="menu-list">
                <div class="icon cancel-btn">
                    <i class="fas fa-times"></i>
                </div>
                <li><a href="#">Home</a></li>
                <li><a href="#">Staff</a></li>
                <li><a href="#">Supplier</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="#">Register sale</a></li>
                <li><a href="#">Statistics</a></li>
            </ul>
            <div class="icon menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>


    <div class="container">


    </div>

    <div class="content">
        <div class="txt-home">
            <h1>Hi @nombre</h1>
            <h2>manage your business in the best way</h2>

            <p class="blink txt">Look at your business statistcs</p>
            <button class="btn-stats">See stats</button>
        </div>
        <div class="img-home">
            <img src="img/home.svg" alt="instant analysis">
        </div>
    </div>

    <footer class="footer">
        <p>
            Copyright © 2021. <a href="#">@SanPedro</a> <br />
            All Rights Reserved
        </p>
    </footer>


    <script>
        const body = document.querySelector("body");
        const navbar = document.querySelector(".navbar");
        const menuBtn = document.querySelector(".menu-btn");
        const cancelBtn = document.querySelector(".cancel-btn");
        menuBtn.onclick = () => {
            navbar.classList.add("show");
            menuBtn.classList.add("hide");
            body.classList.add("disabled");
        }
        cancelBtn.onclick = () => {
            body.classList.remove("disabled");
            navbar.classList.remove("show");
            menuBtn.classList.remove("hide");
        }
        window.onscroll = () => {
            this.scrollY > 20 ? navbar.classList.add("sticky") : navbar.classList.remove("sticky");
        }
    </script>

</body>

</html>