 <?php include_once($_SERVER['DOCUMENT_ROOT']."/template/head.php"); ?>
    <div class="mobile-nav-container">
        <ul class="navbar-nav mr-auto">
            <div id="mobile-header-user-control">
                <a href="#" class="nav-link text-dark text-center">Welcome, cmaz!</a>
                <a class="btn btn-dark ml-2" href="#">
                    <i class="fas fa-user-times"></i> Logout</a>
            </div>
            <li class="nav-item active">
                <a class="nav-link" href="/">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/listings.php">Products</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link " href="#" id="navbarDropdown">Catagories</a>
                <div class="" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">A Cat</a>
                </div>
            </li>
        </ul>
    </div>
    <div class="global-container">
        <div class="mobile-basket-widget">
            <div class="mobile-basket-widget-inner">
                <div class="mobile-basket-widget-title">
                    My Basket
                </div>
                <div class="float-right">
                    <div class="mobile-basket-widget-total">
                        <span class="mobile-basket-widget-items">2</span> x <span class="mobile-basket-widget-price">£2.70</span>
                    </div>
                    <a href="/cart.php" class="btn btn-dark mobile-basket-widget-btn">View Cart</a>
                </div>
            </div>
        </div>
        <!--◤◢◣◥◤ ◢◣◆◢◣◥◤◢◣◥◤◢[LEFT SIDE - HEADER]◥◤◢◣◥◤◢◣◥◤ ◢◣◆◢◣◥◤◢◣◥-->
        <!-- Navigation Section [Start]-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <!--[Mobile Navigation]-->
            <div class="nav-inner">
                <div class="left">
                    <a class="navbar-brand" href="index.html"><img src="images/logo2.png" height="50px"></a>
                    
                    <ul class="navbar-nav mr-auto collapse navbar-collapse">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">Home</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="productlist.html">Products</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="categories.html">Categories</a>
                        </li>
                    </ul>
                </div>
                <div class="right">
                    <!--◤◢◣◥◤ ◢◣◆◢◣◥◤◢◣◥◤◢[RIGHT SIDE - HEADER]◥◤◢◣◥◤◢◣◥◤ ◢◣◆◢◣◥◤◢◣◥-->
                    <button class="navbar-toggler float-right" type="button" id="mobile-nav-open">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!--[Register Link]-->
                        <div class="register"> <a href="register.html" class="small">Need an account?</a> </div>
                        <!--[Username Form]-->
                        <form class="form-inline mr-2">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><span class="fa fa-at"></span></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                        </form>
                        <!--[Password Form]-->
                        <form class="form-inline">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><span class="fa fa-lock"></span></span>
                                </div>
                                <input type="text" class="form-control" placeholder="password" aria-label="password" aria-describedby="basic-addon1">
                            </div>
                        </form>
                        <button type="button" class="btn btn-outline-dark ml-2">Login</button>
                    </div>
                </div>
            </div>
        </nav><!-- Navigation Section [End]-->
        <!--◤◢◣◥◤◢◣◆◢◣◥◤◢◣◥◤◢◣◥◤◢◣◆◢◣◥◤◢◣◥◤◢◣◥◤◢◣◆◢◣◥◤◢◣◥-->
        <div class="container py-5">
            <!-- Main content [Start] -->
            <img src="images/index-header.jpg" class="img-fluid" alt="Responsive image">
            <h1>Popular Categories</h1>
            <div class="row ">
                <!--◤◢◣◥◤ ◢◣◆◢◣◥◤◢◣◥◤◢◣◥◤ ◢◣◆◢◣◥◤◢◣◥◤◢◣◥◤ ◢◣◆◢◣◥◤◢◣◥-->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <img class="card-img-top" src="images/2.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Category Name </h5>
                        </div>
                    </div>
                </div>
                <!--◤◢◣◥◤ ◢◣◆◢◣◥◤◢◣◥◤◢◣◥◤ ◢◣◆◢◣◥◤◢◣◥◤◢◣◥◤ ◢◣◆◢◣◥◤◢◣◥-->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <img class="card-img-top" src="images/3.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Category Name </h5>
                        </div>
                    </div>
                </div>
                <!--◤◢◣◥◤ ◢◣◆◢◣◥◤◢◣◥◤◢◣◥◤ ◢◣◆◢◣◥◤◢◣◥◤◢◣◥◤ ◢◣◆◢◣◥◤◢◣◥-->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <img class="card-img-top" src="images/1.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Category Name </h5>
                        </div>
                    </div>
                </div>
                <!--◤◢◣◥◤ ◢◣◆◢◣◥◤◢◣◥◤◢◣◥◤ ◢◣◆◢◣◥◤◢◣◥◤◢◣◥◤ ◢◣◆◢◣◥◤◢◣◥-->
            </div> <!-- Row END -->
            <h1> Popular Products</h1>
            <div class="row ">
                <!--◤◢◣◥◤ ◢◣◆◢◣◥◤◢◣◥◤◢◣◥◤ ◢◣◆◢◣◥◤◢◣◥◤◢◣◥◤ ◢◣◆◢◣◥◤◢◣◥-->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <img class="card-img-top" src="images/product1.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">£9.99</h5>
                        </div>
                    </div>
                </div>
                <!--◤◢◣◥◤ ◢◣◆◢◣◥◤◢◣◥◤◢◣◥◤ ◢◣◆◢◣◥◤◢◣◥◤◢◣◥◤ ◢◣◆◢◣◥◤◢◣◥-->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <img class="card-img-top" src="images/product2.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">£45.00 </h5>
                        </div>
                    </div>
                </div>
                <!--◤◢◣◥◤ ◢◣◆◢◣◥◤◢◣◥◤◢◣◥◤ ◢◣◆◢◣◥◤◢◣◥◤◢◣◥◤ ◢◣◆◢◣◥◤◢◣◥-->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <img class="card-img-top" src="images/product3.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">£19.00</h5>
                        </div>
                    </div>
                </div>
                <!--◤◢◣◥◤ ◢◣◆◢◣◥◤◢◣◥◤◢◣◥◤ ◢◣◆◢◣◥◤◢◣◥◤◢◣◥◤ ◢◣◆◢◣◥◤◢◣◥-->
            </div> <!-- Row END -->
        </div>
    </div>
    <!--◤◢◣◥◤ ◢◣◆◢◣◥◤◢◣◥◤◢◣◥◤ ◢◣◆◢◣◥◤◢◣◥◤◢◣◥◤ ◢◣◆◢◣◥◤◢◣◥-->
    <footer class="bg-light text-center text-muted fixed-bottom">
        <div class="text-center text-dark p-3">
            © 2021 Copyright: <a href="https://cmaz.co.uk">cmaz.co.uk</a>
        </div>
    </footer>
</div>


<?php include_once($_SERVER['DOCUMENT_ROOT']."/template/foot.php"); ?>

 