<!DOCTYPE html>
<html lang="en">

<?php
require_once '../user_pages/models/dbh.php';
require_once '../user_pages/models/productsModel.php';
require_once '../user_pages/controllers/productsController.php';

$products = new productsController();
$allProducts = $products->showAllProducts();
$brands = $products->AllBrands();
$materials = $products->AllMaterials();

$cat = $_GET['category'] ?? null;
?>

<?php include '../widgets/head.php'; ?>
<style>
    .product-item.list-view {
        display: flex;
        flex-direction: row;
        align-items: center;
        padding: 10px;
    }

    .product-item.list-view .product-img {
        width: 30%;
        margin-right: 20px;
    }

    .product-item.list-view .text-center a {
        font-size: 0.7em;
    }

    .product-item.list-view .text-center {
        text-align: left;
        width: 70%;

    }

    .product-item.list-view .d-flex {
        flex-direction: column;
        align-items: flex-start;
    }

    .product-item.list-view .product-action {
        margin-top: 10px;
    }
</style>

<body>

    <!-- Navbar Start -->
    <?php include '../widgets/navbar.php'; ?>
    <!-- Navbar End -->


    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="./index.php">Home</a>
                    <a class="breadcrumb-item text-dark" href="./products.php">Watches</a>
                    <span class="breadcrumb-item active">Watches List</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Shop Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">

            <!-- Shop Sidebar Start -->
            <div class="col-lg-3 col-md-4" id="sidebar">

                <!-- Price Filter Start -->
                <h5 class="section-title position-relative text-uppercase mb-3">
                    <span class="bg-secondary pr-3">Filter by price</span>
                </h5>

                <div class="bg-light p-4 mb-30">
                    <div class="slider-label">Price: <span id="priceRangeValue">300 JD</span></div>
                    <input type="range" class="form-range" name="priceRange" id="priceRange" min="0" max="1000" value="300" step="10">
                </div>


                <!-- Price Filter End -->

                <!-- Category Filter Start -->
                <h5 class="section-title position-relative text-uppercase mb-3">
                    <span class="bg-secondary pr-3">Filter by Category</span>
                </h5>
                <div class="bg-light p-4 mb-30">
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                        <input type="checkbox" name="category[]" class="custom-control-input" id="all" value="" <?php echo empty($cat) ? 'checked' : ''; ?>>
                        <label class="custom-control-label" for="all">All Categories</label>
                    </div>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                        <input type="checkbox" name="category[]" class="custom-control-input" id="women" value="female" <?php echo $cat === 'women' ? 'checked' : ''; ?>>
                        <label class="custom-control-label" for="women">Women</label>
                    </div>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                        <input type="checkbox" name="category[]" class="custom-control-input" id="men" value="male" <?php echo $cat === 'men' ? 'checked' : ''; ?>>
                        <label class="custom-control-label" for="men">Men</label>
                    </div>
                </div>
                <!-- Category Filter End -->


                <!-- Brand Filter Start -->
                <h5 class="section-title position-relative text-uppercase mb-3">
                    <span class="bg-secondary pr-3">Filter by brand</span>
                </h5>
                <div class="bg-light p-4 mb-30">

                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                        <input type="checkbox" name="brand[]" class="custom-control-input" id="allBrands" value="all" checked>
                        <label class="custom-control-label" for="allBrands">All Brands</label>
                    </div>
                    <?php foreach ($brands as $brand): ?>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" name="brand[]" class="custom-control-input" id="<?php echo $brand['watch_brand']; ?>" value="<?php echo $brand['watch_brand']; ?>">
                            <label class="custom-control-label" for="<?php echo $brand['watch_brand']; ?>"><?php echo $brand['watch_brand']; ?></label>
                        </div>
                    <?php endforeach; ?>
                </div>
                <!-- Brand Filter End -->

                <!-- Strap Material Filter Start -->
                <h5 class="section-title position-relative text-uppercase mb-3">
                    <span class="bg-secondary pr-3">Filter by Strap Material</span>
                </h5>
                <div class="bg-light p-4 mb-30">

                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                        <input type="checkbox" name="material[]" class="custom-control-input" id="allMaterials" value="all" checked>
                        <label class="custom-control-label" for="allMaterials">All Materials</label>
                    </div>
                    <?php foreach ($materials as $material): ?>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" name="material[]" class="custom-control-input" id="<?php echo $material['strap_material']; ?>" value="<?php echo $material['strap_material']; ?>">
                            <label class="custom-control-label" for="<?php echo $material['strap_material']; ?>"><?php echo $material['strap_material']; ?></label>
                        </div>
                    <?php endforeach; ?>
                </div>
                <!-- Strap Material Filter End -->



            </div>
            <!-- Shop Sidebar End -->



            <!-- Shop Product Start -->
            <div class="col-lg-9 col-md-8">
                <div class="row pb-3">

                    <div class="col-12 pb-1">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div>
                                <button class="btn btn-sm btn-light"><i class="fa fa-th-large"></i></button>
                                <button class="btn btn-sm btn-light ml-2"><i class="fa fa-bars"></i></button>
                            </div>
                            <div class="ml-2">
                                <div class="btn-group">
                                    <button type="button" id="sortButton" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">Sorting</button>
                                    <div class="dropdown-menu dropdown-menu-right" id="sort">
                                        <a class="dropdown-item" href="#" data-sort="latest">Latest</a>
                                        <a class="dropdown-item" href="#" data-sort="oldest">Oldest</a>
                                        <a class="dropdown-item" href="#" data-sort="high">Highest Price</a>
                                        <a class="dropdown-item" href="#" data-sort="low">Lowest Price</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div id="productList" class="row">
                        <?php
                        foreach ($allProducts as $product) { ?>
                            <div class="col-lg-4 col-md-6 col-sm-6 pb-1">
                                <div class="product-item bg-light mb-4">
                                    <div class="product-img position-relative overflow-hidden">
                                        <img class="img-fluid w-100" src="<?php echo $product['watch_img']; ?>" alt="<?php echo $product['watch_name']; ?>">
                                        <div class="product-action">

                                            <form action="../user_pages/controllers/cart" method="POST" style="display:inline;">
                                                <input type="hidden" name="product_id" value="<?= htmlspecialchars($product['watch_id']) ?>">
                                                <button type="submit" class="btn btn-outline-dark btn-square"><i class="fa fa-shopping-cart"></i></button>
                                            </form>

                                            <a class="btn btn-outline-dark btn-square" href="../user_pages/wishlist.php?id=<?= $product['watch_id'] ?>"><i class="far fa-heart"></i></a>
                                            <a class="btn btn-outline-dark btn-square" href="../user_pages/product-details.php?id=<?= $product['watch_id'] ?>"><i class="fa fa-search"></i></a>

                                        </div>
                                    </div>
                                    <div class="text-center py-4">
                                        <a class="h6 text-decoration-none text-truncate" href=""><?php echo $product['watch_name']; ?></a>
                                        <div class="d-flex align-items-center justify-content-center mt-2">
                                            <h5><?php echo $product['watch_price']; ?> JOD</h5>
                                            <h6 class="text-muted ml-2"><del><?php echo $product['watch_price'] + rand(10, 20); ?> JOD</del></h6>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>

                    <div class="col-12">
                        <nav>
                            <ul class="pagination justify-content-center" id="pagination">

                                <li class="page-item disabled"><a class="page-link" href="#">Previous</span></a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Shop Product End -->


        </div>
    </div>
    <!-- Shop End -->


    <!-- Footer Start -->
    <?php include '../widgets/footer.php'; ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../mail/jqBootstrapValidation.min.js"></script>
    <script src="../mail/contact.js"></script>
    <script src="./fliteringProducts.js"></script>
    <script src="../js/main.js"></script>


</body>

</html>