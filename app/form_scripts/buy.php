<?php

function buy(array $productData = [])
{
    $db = DB::connect();
    try {

        $db->beginTransaction();

        $product = db_find('products', $productData['product_id']);

        $db->commit();

        alert('success', 'Thanks, we are call you!');
    } catch (PDOException $exception) {
        $db->rollBack();
        alert('danger', 'Sorry, buy not success :(');
    } finally {
        redirect();
    }
}



