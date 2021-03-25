<?php
    include_once __DIR__ . "/../heder.php"
?>
    <div class="container">
        <div class="row">
            <div id="product-list">
                <div class="tab">
                    <div class="product-cat"><h1>Product categories</h1><button><</button><button>></button></div>
                    <ul>
                        <li class="active"><a href="#"><img src="/images/electronics-top.png" alt="">Electronics</a></li>
                        <li><a href=""><img src="/images/mobile-tab.png" alt="">Mobile</a></li>
                        <li><a href=""><img src="/images/fashion-tab.png" alt="">Fashion</a></li>
                        <li><a href=""><img src="/images/burses-top.png" alt="">Burses</a></li>
                        <li><a href=""><img src="/images/bags-top.png" alt="">Bags</a></li>
                        <li><a href=""><img src="/images/watches-top.png" alt="">Watches</a></li>
                        <li><a href=""><img src="/images/gifts-top.png" alt="">Gifts</a></li>
                        <li><a href=""><img src="/images/kitchen-top.png" alt="">Kitchen</a></li>
                        <li><a href=""><img src="/images/foods-top.png" alt="">foods</a></li>
                        <li><a href=""><img src="/images/clothings-top.png" alt="">Clothing</a></li>
                    </ul>
                    <div class="mobile-tab">
                        <ul>
                            <li class="active"><a href="#"><img src="/images/electronics-top.png" alt="">Electronics</a></li>
                            <li><a href=""><img src="/images/mobile-tab.png" alt="">Mobile</a></li>
                            <li><a href=""><img src="/images/fashion-tab.png" alt="">Fashion</a></li>
                            <li><a href=""><img src="/images/burses-top.png" alt="">Burses</a></li>
                            <li><a href=""><img src="/images/bags-top.png" alt="">Bags</a></li>
                        </ul>
                        <ul>
                            <li><a href=""><img src="/images/watches-top.png" alt="">Watches</a></li>
                            <li><a href=""><img src="/images/gifts-top.png" alt="">Gifts</a></li>
                            <li><a href=""><img src="/images/kitchen-top.png" alt="">Kitchen</a></li>
                            <li><a href=""><img src="/images/foods-top.png" alt="">foods</a></li>
                            <li><a href=""><img src="/images/clothings-top.png" alt="">Clothing</a></li>
                        </ul>
                    </div>
                </div>
                <div class="products">
                    <ul>
                      <?php for ($i=0; $i < sizeof($all); $i++) : ?>
                        <li>
                            <a href="/?model=product&action=view&id=<?=$all[$i]['id']?>"><img src="http://uploads.supermart.loc/products/<?=$all[$i]['picture']?>" class="img-responsive"></a>
                            <div class="deals-txt">
                                <a href="/?model=product&action=view&id=<?=$all[$i]['id']?>"><?=$all[$i]['title']?><br><span><?=$all[$i]['price']?></span></a><br><img src="/images/rating.png" alt="">
                            </div>
                        </li>
                        <?php endfor; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<?php
    include_once __DIR__ . "/../footer.php"
?>