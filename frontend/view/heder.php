<?php
    include_once __DIR__ . "/../../common/src/Service/UserService.php";

    $currentUser = UserService::getCurrentUser();
?>
<!DOCTYPE html>
<html class="no-js" lang="en" >
<head> <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SUPERMART</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/default.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/simple_product_list.css">
    <link rel="stylesheet" href="../css/card-list.css">
    <script src="../js/jquery-3.5.1.js"></script>
    <script src="../js/style.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</head>
<body class="body">
    <header>
        <div id="head">
            <div class="top-bacground" style="background-color:  #3b83d4;height: 42px; width: 100%; position: absolute;"></div>
            <div class="container">
                <div class="row">
                    <div class="top">
                        <div class="top-a">
                            <ul>
                                <li><?=!empty($currentUser['login'])
                                 ? '<a href="/">' . $currentUser['login'] . '</a></li>
                                 <img src="images/Line.png">
                                 <li><a href="/?model=auth&action=logout">SingOut</a></li>'
                                 : '<a href="/?model=site&action=login">LogIn/SingUp</a>'?></li>
                                <img src="images/Line.png">
                                <li><a href="#">USD<img src="images/currency.png"></a></li>                            
                            </ul>
                        </div>
                        <div class="top-b">
                            <ul>
                                <li><a href="#">Help</a></li>
                                <img src="images/Line.png">
                                <li><a href="#"><img src="images/heart.png">WishList</a></li> 
                                <img src="images/Line.png">
                                <li><a href="#">Engish <img src="images/currency.png"></a></li>
                                <button>DOWNLOAD APP</button>
                             </ul>
                        </div>
                        <div class="mobile-top-menu" id="mobtopmenu">
                            <a href="#home" class="active">LogIn/SingUp</a>
                            <a href="#Shop"><img src="images/heart.png" style="padding: 0;">WishList</a>
                            <a href="#Fashion">Help</a>
                            <a href="#Electronics">Contact us</a>
                            <a href="#Electronics">Download App</a>
                            <a href="javascript:void(0);" class="icon" onclick="myFunction1()"><i><img src="images/currency.png" alt=""></i></a>
                        </div>
                    </div>
                    <div id="header-with-topbar" class="">
                        <div id="logo">
                            <a href="/"><img src="images/Vector.png"></a>
                        </div>
                        <div id = "search-in">
                            <form action="#">
                                <input placeholder="Search..." type="text" name="">
                                <div><a href="#">All categories<img src="images/currency2.png"></a></div>
                                <button><img src="images/glass.png" ></a></button>
                            </form>
                        </div>
                        <div id ="basket-container">
                            <div class="bc-b"><a href="<?=!empty($currentUser['login']) ? '/?model=basket&action=view' : '/?model=site&action=login' ?>"><img src="images/bg.png"></a><span>0 items: $0.00</span></div>
                        </div>
                        <div class="mobile-basketc">
                            <div class="m-b"><a href="#"><img src="images/bg.png"></a></div>
                        </div>
                    </div>
                    <div class="navigator ">
                        <div class="dep"><div>Departmeents <img src="images/departments.png"></div></div>
                        <ul class="navigator-a">
                            <li><a href="#" class="active">Home</a>
                            <ul class="sub-menu">
                                <li><a href="index.html">Home 1</a></li>
                                <li><a href="#">Home 2</a></li>
                            </ul>
                            </li>
                            <li><a href="#">Shop</a>
                            <ul class="sub-menu">
                                <li><a href="#">Fashion</a></li>
                                <li><a href="#">Clothing</a></li>
                                <li><a href="#">Shoes</a></li>
                                <li><a href="#">Computer</a></li>
                                <li><a href="#">Phones</a></li>
                            </ul>
                            </li>
                            <li><a href="#">Fashion
                            <span class="hot">Hot</span>
                            </a>
                                <ul class="sub-menu">
                                <li><a href="#">Fashion</a></li>
                                <li><a href="#">Clothing</a></li>
                                <li><a href="#">Shoes</a></li>
                                <li><a href="#">Computer</a></li>
                                <li><a href="#">Phones</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Electronics
                            <span class="new">New</span>
                                </a>
                                <ul class="sub-menu">
                                <li><a href="#">Fashion</a></li>
                                <li><a href="#">Clothing</a></li>
                                <li><a href="#">Shoes</a></li>
                                <li><a href="#">Computer</a></li>
                                <li><a href="#">Phones</a></li>
                                </ul>
                             </li>
                            <li><a href="#">pages</a>
                            <ul class="sub-menu">
                                <li><a href="#">Fashion</a></li>
                                <li><a href="#">Clothing</a></li>
                                <li><a href="#">Shoes</a></li>
                                <li><a href="#">Computer</a></li>
                                <li><a href="#">Phones</a></li>
                            </ul>
                            </li>
                            <li><a href="#">Features</a>
                            <ul class="sub-menu">
                                <li><a href="#">Fashion</a></li>
                                <li><a href="#">Clothing</a></li>
                                <li><a href="#">Shoes</a></li>
                                <li><a href="#">Computer</a></li>
                                <li><a href="#">Phones</a></li>
                            </ul>
                            </li>
                            <li><a href="#">Blog</a>
                            <ul class="sub-menu">
                                <li><a href="#">Fashion</a></li>
                                <li><a href="#">Clothing</a></li>
                                <li><a href="#">Shoes</a></li>
                                <li><a href="#">Computer</a></li>
                                <li><a href="#">Phones</a></li>
                            </ul>
                            </li>
                            <li class="call-us-free">Call us free: <span>1-800-777-7889</span></li>
                         </ul>
                    </div>
                </div>
            </div>
            <div class="mobile-topnav" id="mobtopnav">
                <a href="#home" class="active">Home</a>
                <a href="#Shop">Shop</a>
                <a href="#Fashion">Fashion</a>
                <a href="#Electronics">Electronics</a>
                <a href="#pages">pages</a>
                <a href="#Features">Features</a>
                <a href="#Blog">Blog</a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i><img src="images/currency.png" alt=""></i></a>
             </div>
        </div>
    </header>