<?php
include_once './db/connection.php';
$object=new Connection();
$Connection=$object->Connect();
?>
<!DOCTYPE html>
<html lang="en">
<head >
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>518H0144-Lean bootstrap, php, mysql</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/carousel.css">
    <link rel="stylesheet" href="./css/style.css">
    <!-- https://animate.style/#usage -->
    <link rel="stylesheet" href="./css/anamite.css">
</head>

<body>
    <header>
        <!-- https://getbootstrap.com/docs/4.5/components/navbar/ -->
        <nav class="navbar fixed-top navbar-expand-md navbar-dark fixed-top text-white" style="background :#2eb26e">
            <a class="text-white navbar-brand" href="#">
                <i class="fa fa-pagelines animate flash">TDTU FreshFoods</i>
            </a>
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggle-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto menu">
                    <li class="nav-item active">
                        <a href="./index.html" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a href="./aboutUS.html" class="nav-link">About US</a>
                    </li>
                    <li class="nav-item active">
                        <a href="./intro.html" class="nav-link">Introduction</a>
                    </li>
                    <li class="nav-item active">
                        <a href="./benefits.html" class="nav-link">Benefits</a>
                    </li>
                    <li class="nav-item active">
                        <a href="./contact.html" class="nav-link">Contact</a>
                    </li>
                </ul>
                <form class="form-inline mt-2 mt-md-0">
                    <a class="text-white nav-link" href="#">
                        <i class="text-warning fa fa-shopping-cart" aria-hidden="true">
                        </i> Shopping Cart
                        <i style="color:yellow" id="cart_n"></i>
                    </a>
                    
                    
                </form>
            </div>
        </nav>
    </header>
    <hr>
    <br>
    <div class="container mt-3">
        <main role="main">
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Product</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Price</th>
                                </tr>
                            </thead>
                            
                            <tbody id="table">
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <hr class="featuretee-divider">
        </main>
    </div>    
    <!-- I use javacript - bootstrap -->
    <!-- I use javacript - bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="./js/cart.js"></script>
    <script src="./js/wow.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.29.2/dist/sweetalert2.all.min.js"></script>
    
    <!-- https://sweetalert2.github.io/#download -->
    <footer class="page-footer font-small indigo">


        <div class="container text-center text-md-left">


            <div class="footer-copyright text-center py-3">© Trần Phúc Chương - 518H0144:
                <a href="./index.html"> FreshFoods.com</a>
            </div>

    </footer>
</body>



</html>