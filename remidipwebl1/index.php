<?php
    session_start();
    if (empty($_SESSION['cart']["arrCart"]))
        $_SESSION['cart']["arrCart"]=array(); 					
?>

<!doctype html>

<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSS -->
        <style>
        .header{
            padding:12px 100px;
            position: fixed;
            left: 0;
            top: 0;
            z-index: 99;
            width: 100%;
            background-color: var(#0c1023);
        }

        .topnav {
            background-color:transparent;
            overflow: hidden;
        }
        
        .topnav a {
            float: left;
            color:var(#ffffff);
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
            font-size: 17px;
        }
        
        .topnav a:hover {
            background-color: gray;
            opacity: 0.3;
            color:white;
            border-radius: 15%;
            animation: infinite;
            animation-duration: 0.2s;
            transform: scale(1.2);
            
        }
        .topnav a.active {
            color:var(#eaa023);
        }
        </style>

        <!-- Bootstrap CSS -->
        <link   href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
                rel="stylesheet" 
                integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
                crossorigin="anonymous">

        <title>Fine Dining</title>

    </head>

    <body>

        <!-- Navbar -->
        <header class="header">
                <div class="topnav">
                    <a class="active" href="#">Home</a>
                    <a href="cart.php">Cart</a>
                </div>
        </header>
        <!-- End Navbar -->

        <br><br><br>

        <!-- Product 1 -->
        <div class="row d-flex justify-content-center row-cols-1 row-cols-md-2 g-4" style="margin-top: 0.5rem;">
            <div class="card col-sm-4" style="width: 15rem; right: 5rem;">
                <img 
                width="35%" 
                src="https://images.squarespace-cdn.com/content/v1/5a2eb9dfcd39c382eaa90f58/1514560311827-GJ8HMX9KQZ8S00A0TDAE/DSC_1875.JPG?format=1000w"
                class="card-img-top" style="margin-top: 0.5rem;">
                <div class="card-body">
                    <h5 class="card-title">Borough Market Tasting Plate</h5>
                    <p class="lead">Rp. 40.000</p>
                    <a href="addCart.php?brg=Borough Market Tasting Plate&hrg=40000&jml=1" class="btn btn-primary">Order</a>
                </div>
            </div>
            <div class="card col-sm-4" style="width: 15rem; right: 2.5rem;">
                <img 
                src="data:image/jpeg;base64,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"
                class="card-img-top" 
                width="35%"
                style="margin-top: 0.5rem;">
                <div class="card-body">
                    <h5 class="card-title">Twice Baked Sussex Goat Cheese Souffle</h5>
                    <p class="lead">Rp. 55.000</p>
                    <a href="addCart.php?brg=Twice Baked Sussex Goat Cheese Souffle&hrg=55000&jml=1" class="btn btn-primary">Order</a>
                </div>
            </div>
        </div>
        <!-- End Product 1 -->

        <!-- Product 2 -->
        <div class="row d-flex justify-content-center row-cols-1 row-cols-md-2 g-4" style="margin-top: 0.5rem;">
            <div class="card col-sm-4" style="width: 15rem; right: 5rem;">
                <img 
                width="35%"
                src="https://www.sprinklesandsprouts.com/wp-content/uploads/2016/04/Smoked-Cod-TartFEATURE.jpg"
                class="card-img-top" 
                style="margin-top: 0.5rem;">
                <div class="card-body">
                    <h5 class="card-title">Smoked Cod Tartlet Au Gratin</h5>
                    <p class="lead">Rp. 50.000</p>
                    <a href="addCart.php?brg=Smoked Cod Tartlet Au Gratin&hrg=50000&jml=1" class="btn btn-primary">Order</a>
                </div>
            </div>
            <div class="card col-sm-4" style="width: 15rem; right: 2.5rem;">
                <img 
                width="35%"
                src="https://www.thespruceeats.com/thmb/Vi7QnJAoYB5o7CJ3loLRXM9iwn8=/4000x3000/smart/filters:no_upscale()/potato-leek-soup-recipe-1375808-hero-5c3be5b546e0fb0001ccc5c9.jpg"
                class="card-img-top" 
                style="margin-top: 0.5rem;">
                <div class="card-body">
                    <h5 class="card-title">Classic Creamy Leek and Potato</h5>
                    <p class="lead">Rp. 35.000</p>
                    <a href="addCart.php?brg=Classic Creamy Leek and Potato&hrg=35000&jml=1" class="btn btn-primary">Order</a>
                </div>
            </div>
        </div>
        <!-- End Product 2 -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
                integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
                crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" 
                integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" 
                crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" 
                integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" 
                crossorigin="anonymous">
        </script>

                <a href="logout.php">
                    <button type="button" class="btn btn-danger">Log out</button>
                </a>
    </body>
</html>