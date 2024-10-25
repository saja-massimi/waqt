<?php

class productsModel extends Dbh
{
    private $watch_name;
    private $watch_description;
    private $watch_img;
    private $watch_price;
    private $watch_category;
    private $watch_brand;
    private $strap_material;

    public function __construct($watch_name = null, $watch_description = null, $watch_img = null, $watch_price = null, $watch_category = null, $watch_brand = null, $strap_material = null)
    {
        $this->watch_name = $watch_name;
        $this->watch_description = $watch_description;
        $this->watch_img = $watch_img;
        $this->watch_price = $watch_price;
        $this->watch_category = $watch_category;
        $this->watch_brand = $watch_brand;
        $this->strap_material = $strap_material;
    }

    protected function getAllProducts()
    {
        $sql = "SELECT * FROM watches";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result ? $result : [];
    }

    protected function getBrands()
    {
        $sql = "SELECT DISTINCT watch_brand FROM watches";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result ? $result : [];
    }

    protected function getAllBrands()
    {

        $sql = "SELECT DISTINCT watch_brand FROM watches";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result ? $result : [];
    }

    protected function getAllMaterials(){
        $sql = "SELECT DISTINCT strap_material FROM watches";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result ? $result : [];
    }
}
