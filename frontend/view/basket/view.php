<?php
include_once __DIR__ . "/../heder.php";
?>
    <div class="container">
        <div class="row head-card-list">
            <h1>YOUR CARD</h1>
            <a href="/">< RETURN TO SHOP</a>
        </div>
        <?php if(empty($items) || !is_array($items)) : ?>
            <div style="margin: 50px;">
                <p style="font-weight: 800; font-size: 40px;">
                    Empty Basket!
                </p>
            </div>
        <?php else : ?>
        <div class="row">
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th style="width: 50%;">PRODUCT</th>
                        <th style="width: 13%;">PRICE</th>
                        <th style="width: 13%;">QUANTITY</th>
                        <th style="width: 12%;">TOTAL</th>
                        <th style="width: 12%;"></th>
                    </tr>
                </thead>
                <tbody class="table-hover">
                    <?php foreach ($items as $key=>$item) : ?>
                    <tr>
                        <td>
                            <div class="pr-img">
                                <a href="/?model=product&action=view&id=<?=$item['product_id']?>">
                                    <img class="responsive" src="http://upoad.supermart.loc/products/<?=$item['product']['picture']?>">
                                    <?=$item['product']['title']?>
                                </a>
                            </div>
                        </td>
                        <td><?=$item['product']['price']?></td>
                        <td>
                            <form action="/?model=basket&action=change" method="post" class="number-input">
                                <input type="hidden" name="product_id" value="<?=$item['product']['id']?>">
                                <input type="number" name="quantity" value="<?=$item['quantity']?>" min="0">
                                <input type="submit" value="Change">
                            </form>
                        </td>
                        <td><?=$items[$key]['product']['total']?></td>
                        <td>
                            <form action="/?model=basket&action=delete" method="post">
                                <input type="hidden" name="product_id" value="<?=$item['product']['id']?>">
                                <button><img src="/images/delete_btn.png" alt=""></button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach?>
                </tbody>
            </table>
        </div>
        <div class="row">
            <div class="card-btn">
                <h1>total: <span><?=$total?></span></h1>
                <a href="/?model=order&action=index" class="btn btn-dark">Create Order</a>
            </div>
        </div>
        <?php endif; ?>
    </div>

<?php
    include_once __DIR__ . "/../footer.php";
?>