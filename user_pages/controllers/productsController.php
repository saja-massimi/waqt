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

    public function AllBrands(){

    $results = $this->getAllBrands();

    if (!empty($results)) 
        return $results;
    else 
        return "No Brands found.";
    

}


    public function AllMaterials(){
        $results = $this->getAllMaterials();

    if (!empty($results)) {
        return $results;
    } else {
        return "No Material found.";
    }

    
    }





}