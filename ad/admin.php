<?php
include_once '../db/connection.php';
$object=new Connection();
$Connection=$object->Connect();

$query = "SELECT id,product_order,total FROM product_order";
$result = $Connection->prepare($query);
$result->execute();
$data=$result->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head >
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>518H0144-Lean bootstrap, php, mysql</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/carousel.css">
    <link rel="stylesheet" href="../css/style.css">
    <!-- https://animate.style/#usage -->
    <link rel="stylesheet" href="../css/anamite.css">
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
                        <a href="../index.html" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a href="../aboutUS.html" class="nav-link">About US</a>
                    </li>
                    <li class="nav-item active">
                        <a href="../intro.html" class="nav-link">Introduction</a>
                    </li>
                    <li class="nav-item active">
                        <a href="../benefits.html" class="nav-link">Benefits</a>
                    </li>
                    <li class="nav-item active">
                        <a href="../contact.html" class="nav-link">Contact</a>
                    </li>
                </ul>
                <form class="form-inline mt-2 mt-md-0">
                    <a style="cursor:pointer;" class="nav-link text-white" href="../index.html">
                        EXIT
                    </a>
                </form>
            </div>
        </nav>
    </header>
    <hr>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <button data-toggle="modal" id="newBtn" type="button" class="mt-4 btn btn-success">
                    New Order
                </button>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table id="tableOrders" class="table table-striped table-bordered table-condensed" style="width:100%;">
                        <thead class="text-center">
                            <tr>
                                <th>ID</th>
                                <th>Order</th>
                                <th>Total</th>
                                <th>Opinions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach ($data as $dat){

                            ?>
                            <tr>
                                <td> <?php echo $dat['id'] ?></td>
                                <td> <?php echo $dat['product_order'] ?></td>
                                <td> <?php echo $dat['total'] ?></td>
                                <td></td>
                            </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalCRUD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div role="document" class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="formOrders" >
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="order" class="col-form-label">Order:</label>
                            <input type="text" id="order" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="total" class="col-form-label">Total:</label>
                            <input type="text" id="total" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                            <button type="submit" id="btnSaveOrder" class="btn btn-success">Save</button>
                    </div>
                </form>
            </div> 
        </div>
    </div>
    
    
    <!-- I use javacript - bootstrap -->
    <!-- I use javacript - bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="../js/cart.js"></script>
    <script src="../js/wow.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.29.2/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    
    <script src="./adm.js"></script>
    
    <!-- https://sweetalert2.github.io/#download -->
    <footer class="page-footer font-small indigo">


        <div class="container text-center text-md-left">


            <div class="footer-copyright text-center py-3">© Trần Phúc Chương - 518H0144:
                <a href="./index.html"> FreshFoods.com</a>
            </div>

    </footer>
</body>


</html>