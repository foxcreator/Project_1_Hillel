<?php if (!empty($content['price'])) :
    $products = db_select(
    "products",
    columns: "id, title, price, description",
    conditions: "is_option is FALSE",
    order: "price"
    );
    $products = array_chunk($products, 3);
?>
<section id="price">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="price-content pb-60 col-lg-10">
                <div class="title text-center">
                    <h1 class="mb-10"><?= $content['price']['title'] ?></h1>
                    <p><?= $content['price']['description'] ?></p>
                </div>
                <?php foreach ($products as $row): ?>
                <div class="row">
                    <?php foreach ($row as $item): ?>
                    <div class="col-lg-4">
                        <div class="price-item"
                             data-id ="<?= $item['id'] ?>"
                             data-name="<?= $item['title'] ?>"
                             dtat-price="<?= $item['price'] ?>"
                             data-bs-toggle="modal"
                             data-bs-target="#buy"
                        >
                            <div class="title justify-content-between d-flex">
                                <h4><?= $item['title'] ?></h4>
                                <p class="price float-right"><?= $item['price'] ?> $</p>
                            </div>
                            <p><?= $item['description'] ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section

    <?php endif;