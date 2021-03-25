<?php
    include_once __DIR__ . "/../heder.php"
?>
    <div class="container">
        <div class="row">
            <div class="spl_nav"><button><</button><button>></button> <ul><li>HOME/</li><li>SHOP/</li><li><?=$product['title']?></li></ul></div>
        </div>
        <div class="row">
            <div class="pslider">
                <div class="image">
                    <img src="http://uploads.supermart.loc/products/<?=$product['picture']?>" alt="">
                    <a><img src="/images/zoom-icon.png" alt=""></a>
                </div>
                <div class="thumbs">
                    <ul>
                        <li><img src="/images/l7-1.png" alt=""></li>
                        <li><img src="/images/l7-2.png" alt=""></li>
                        <li><img src="/images/m1-1.png" alt=""></li>
                        <li><img src="/images/m1-2.png" alt=""></li>
                    </ul>
                </div>
            </div>
            <div class="p_about">
                <h1><?=$product['title']?></h1>
                <div><img src="/images/rating.png" alt=""><span>(5 Customers reviews)</span></div>
                <div class="p_price"><h2>$220.00</h2><h2><?=$product['price']?></h2></div>
                <p><?=$product['content']?>
                </p>
                <div class="advantage">
                    <ul>
                        <li><img src="/images/advantage_st.png" alt=""> Free Shipping On order over $99</li>
                        <li><img src="/images/advantage_st.png" alt=""> Instock</li>
                        <li><img src="/images/advantage_st.png" alt=""> Gift-wrap available</li>
                    </ul>
                </div>
                <div class="p_member">
                    <h2>1</h2>
                    <div>
                        <button>+</button>
                        <button>-</button>
                    </div>
                </div>
                <div class="add_to_cart">
                    <div>
                        <form action="/?model=basket&action=addProduct" method="post">
                            <input type="hidden" name="quantity" value="1">
                            <input type="hidden" name="product_id" value="<?=$product['id']?>">
                            <button>ADD TO CART <img src="images/w-basket.png" alt=""></button>
                        </form>
                    </div>
                    <button><img src="images/wishlist.png" alt=""></button><button><img src="images/lr.png" alt=""></button>
                </div>
                <div class="p_data">
                    <ul>
                        <li>SKU: <span>017</span></li>
                        <li>Category: <span>Outerwear, Hoodies</span></li>
                        <li>Tags: <span>Clothing, Mens</span></li>
                    </ul>
                </div>
                <div class="share">
                    Share: 
                    <a href=""><img src="/images/share-f.png" alt=""> Share</a>
                    <a href=""><img src="/images/share-t.png" alt=""> Tweet</a>
                    <a href=""><img src="/images/share-p.png" alt=""> Pin it</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="p_navigator">
                <ul>
                    <li>Description</li>
                    <li class="active">Customer review</li>
                    <li>Additional information</li>
                </ul>
            </div>
            <div class="pd_container">
                <h1>Reviews for microchip package</h1>
                <div class="reviews">
                    <img src="/images/rev_avatar.png" alt="">
                    <div>
                        <h3>Cobus Bester - <span>June 7.2016</span></h3>
                        <p>
                            You only get the picture, not the person holding it, something they don’t mention in the description, now 
                            I’ve got to find my own person.
                        </p>
                    </div>
                </div>
                <div class="reviews">
                    <img src="/images/rev_avatar.png" alt="">
                    <div>
                        <h3>Maria Sun - <span>June 7.2016</span></h3>
                        <p>
                            This is a fantastic quality print and is happily hanging framed on my wall now.
                        </p>
                    </div>
                </div>
                <div class="reviews_row">
                    <h1>Add a review</h1>
                    <label>Your email address will not be published. Required fields are marked <img src="/images/important.png" alt=""></label>
                    <label for="">Your Rating                <img src="/images/rating.png" alt=""></label>
                    <form class="review_form">
                        <div>
                            <label for="">Your Review <img src="/images/important.png" alt=""></label>
                            <textarea name="review" id="" cols="20" rows="6"></textarea>
                        </div>
                        <div>
                            <label for="">Name <img src="/images/important.png" alt=""></label>
                            <input type="text">
                        </div>
                        <div>
                            <label for="">Name <img src="/images/important.png" alt=""></label>
                            <input type="text">
                        </div>
                            <button>SUBMIT</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div id="product-list">
                <div class="product-cat"><h1>Product categories</h1><button><</button><button>></button></div>
                <div class="products">
                    <ul>
                        <li>
                            <a href="simple_product_list.html"><img src="/images/map-marker.png"></a>
                            <div class="deals-txt">
                                <a href="simple_product_list.html">Sasik External Disk-500GB <br><span>$359.00 </span></a><br><img src="/images/rating.png" alt="">
                            </div>
                        </li>
                        <li>
                            <a href="simple_product_list.html"><img src="/images/map-marker.png"></a>
                            <div class="deals-txt">
                                <a href="simple_product_list.html">Sasik External Disk-500GB <br><span>$359.00 </span></a><br><img src="/images/rating.png" alt="">
                            </div>
                        </li>
                        <li>
                            <a href="simple_product_list.html"><img src="/images/map-marker.png"></a>
                            <div class="deals-txt">
                                <a href="simple_product_list.html">Sasik External Disk-500GB <br><span>$359.00 </span></a><br><img src="/images/rating.png" alt="">
                            </div>
                        </li>
                        <li>
                            <a href="simple_product_list.html"><img src="/images/map-marker.png"></a>
                            <div class="deals-txt">
                                <a href="simple_product_list.html">Sasik External Disk-500GB <br><span>$359.00 </span></a><br><img src="/images/rating.png" alt="">
                            </div>
                        </li>
                        <li>
                            <a href="simple_product_list.html"><img src="/images/map-marker.png"></a>
                            <div class="deals-txt">
                                <a href="simple_product_list.html">Sasik External Disk-500GB <br><span>$359.00 </span></a><br><img src="/images/rating.png" alt="">
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<?php
    include_once __DIR__ . "/../footer.php"
?>