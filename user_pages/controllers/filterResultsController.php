<?php
include_once '../models/Dbh.php';

$db = new Dbh();
$connection = $db->connect();



$priceRange = isset($_GET['priceRange']) ? (int) $_GET['priceRange'] : 1000;
$categories = isset($_GET['categories']) ? explode(',', $_GET['categories']) : [];
$brands = isset($_GET['brands']) ? explode(',', $_GET['brands']) : [];
$materials = isset($_GET['materials']) ? explode(',', $_GET['materials']) : [];

$query = "SELECT * FROM watches WHERE watch_price <= ?";
$params = [$priceRange];

if (!in_array('all', $categories) && !empty($categories)) {
    $query .= " AND watch_category IN (" . implode(', ', array_fill(0, count($categories), '?')) . ")";
    $params = array_merge($params, $categories);
}

if (!in_array('all', $brands) && !empty($brands)) {
    $query .= " AND watch_brand IN (" . implode(', ', array_fill(0, count($brands), '?')) . ")";
    $params = array_merge($params, $brands);
}

if (!in_array('all', $materials) && !empty($materials)) {
    $query .= " AND strap_material IN (" . implode(', ', array_fill(0, count($materials), '?')) . ")";
    $params = array_merge($params, $materials);
}

$stmt = $connection->prepare($query);
$stmt->execute($params);
$watches = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<?php

foreach ($watches as $watch) { ?>
    <div class="col-lg-4 col-md-6 col-sm-6 pb-1">
        <div class="product-item bg-light mb-4">
            <div class="product-img position-relative overflow-hidden">
                <img class="img-fluid w-100" src="<?php echo $watch['watch_img']; ?>" alt="<?php echo $watch['watch_name']; ?>">
                <div class="product-action">
                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                    <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                </div>
            </div>
            <div class="text-center py-4">
                <a class="h6 text-decoration-none text-truncate" href=""><?php echo $watch['watch_name']; ?></a>
                <div class="d-flex align-items-center justify-content-center mt-2">
                    <h5><?php echo $watch['watch_price']; ?> JOD</h5>
                    <h6 class="text-muted ml-2"><del><?php echo $watch['watch_price'] - 10; ?> JOD</del></h6>
                </div>

            </div>
        </div>
    </div>
<?php } ?>