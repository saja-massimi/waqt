<!DOCTYPE html>
<html lang="en">
<?php
include '../user_pages/models/dbh.php';
include '../user_pages/models/productsModel.php';
include '../user_pages/controllers/productsController.php';

$products = new productsController();
$allProducts = $products->showAllProducts();

?>

<head>
    <meta charset="utf-8">
    <title>WAQT</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="products watches" name="keywords">
    <meta content="all watches" name="description">
    <link href="../img/logo1.png" rel="icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">

</head>

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
            <div class="col-lg-3 col-md-4">

                <!-- Price Filter Start -->
                <h5 class="section-title position-relative text-uppercase mb-3">
                    <span class="bg-secondary pr-3">Filter by price</span>
                </h5>
                <div class="bg-light p-4 mb-30">
                    <form method="GET" action="">
                        <div class="slider-label">Price: <span id="priceRangeValue">50 JD</span></div>
                        <input type="range" class="form-range" name="priceRange" id="priceRange" min="0" max="1000" value="50" step="10">
                </div>
                <!-- Price Filter End -->

                <!-- Category Filter Start -->
                <h5 class="section-title position-relative text-uppercase mb-3">
                    <span class="bg-secondary pr-3">Filter by Category</span>
                </h5>
                <div class="bg-light p-4 mb-30">
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                        <input type="checkbox" name="category[]" class="custom-control-input" id="all" value="all" checked>
                        <label class="custom-control-label" for="all">All Categories</label>
                    </div>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                        <input type="checkbox" name="category[]" class="custom-control-input" id="women" value="women">
                        <label class="custom-control-label" for="women">Women</label>
                    </div>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                        <input type="checkbox" name="category[]" class="custom-control-input" id="men" value="men">
                        <label class="custom-control-label" for="men">Men</label>
                    </div>
                </div>
                <!-- Category Filter End -->

                <!-- Brand Filter Start -->
                <h5 class="section-title position-relative text-uppercase mb-3">
                    <span class="bg-secondary pr-3">Filter by brand</span>
                </h5>
                <div class="bg-light p-4 mb-30">
                    <?php
                    // Fetch brands dynamically from the database
                    $brands = $db->query("SELECT DISTINCT watch_brand FROM watches")->fetchAll();
                    ?>
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
                    <?php
                    // Fetch strap materials dynamically from the database
                    $materials = $db->query("SELECT DISTINCT strap_material FROM watches")->fetchAll();
                    ?>
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

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary w-100">Apply Filters</button>
                </form>

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
                                    <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">Sorting</button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">Latest</a>
                                        <a class="dropdown-item" href="#">Popularity</a>
                                        <a class="dropdown-item" href="#">Best Rating</a>
                                    </div>
                                </div>
                                <div class="btn-group ml-2">
                                    <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">Showing</button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">10</a>
                                        <a class="dropdown-item" href="#">20</a>
                                        <a class="dropdown-item" href="#">30</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php

                    foreach ($allProducts as $product) { ?>
                        <div class="col-lg-4 col-md-6 col-sm-6 pb-1">
                            <div class="product-item bg-light mb-4">
                                <div class="product-img position-relative overflow-hidden">
                                    <img class="img-fluid w-100" src="<?php echo $product['watch_img']; ?>" alt="<?php echo $product['watch_name']; ?>">
                                    <div class="product-action">
                                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                                        <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                                <div class="text-center py-4">
                                    <a class="h6 text-decoration-none text-truncate" href=""><?php echo $product['watch_name']; ?></a>
                                    <div class="d-flex align-items-center justify-content-center mt-2">
                                        <h5><?php echo $product['watch_price']; ?> JOD</h5>
                                        <h6 class="text-muted ml-2"><del><?php echo $product['watch_price'] - 10; ?> JOD</del></h6>
                                    </div>

                                </div>
                            </div>
                        </div>
                    <?php } ?>



                    <div class="col-12">
                        <nav>
                            <ul class="pagination justify-content-center">
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
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>


    <script>
        const priceRange = document.getElementById('priceRange');
        const priceRangeValue = document.getElementById('priceRangeValue');

        // Update the price label as the slider is moved
        priceRange.addEventListener('input', function() {
            priceRangeValue.innerHTML = this.value.toString() + ' JD';
        });
    </script>
    <!-- Template Javascript -->
    <script src="../js/main.js"></script>
</body>

</html>