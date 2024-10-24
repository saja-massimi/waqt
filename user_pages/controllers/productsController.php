<?php


class productsController extends productsModel
{
    public function showAllProducts()
    {
        $results = $this->getAllProducts();

        if (!empty($results)) {
            return $results;
        } else {
            return "No products found.";
        }
    }
}
