<?php

$additions = db_select(
    "products",
    columns: "id, title, price",
    conditions: "is_option is TRUE",
    order: "price"
);

?>
<div class="modal fade mymodal" id="buy" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="buy-form" action="/" method="POST">
                <input type="hidden" value="buy" name="type">
                <div class="modal-header justify-content-center">
                    <h5 class="modal-title" id="exampleModalLabel">Order window</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row product-block">
                        <div class="col-6">Product</div>
                        <div class="col-6">Price</div>
                    </div>
                    <div class="row product-block">
                        <div class="col-6 product-name"><b></b></div>
                        <div class="col-6 product-price"></div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <input type="hidden" name="product_id" class="product" />
                            <hr>
                            <h3>Additions:</h3>
                            <?php foreach ($additions as $addition): ?>
                                <div class="form-check form-switch">
                                    <input class="form-check-input additions-check"
                                           type="checkbox"
                                           role="switch"
                                           name="additions[]"
                                           id="addition-<?= $addition['id'] ?>"
                                           value="<?= $addition['id'] ?>"
                                           data-test = "4"
                                    >
                                    <label class="form-check-label"
                                           for="addition <?= $addition['id'] ?>"
                                    ><?= $addition['title'] ?>
                                        <b class="price"> <?= $addition['price'] ?></b><b>$</b>
                                        <b> = </b>
                                        <b class="additions-total"></b><b>$</b>
                                    </label>

                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="col-12 text-right">
                            Total: <b class="final-price"></b>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" value="buy" name="buy" class="btn btn-primary">Buy</button>
                </div>
            </form>
        </div>
    </div>
</div>