<?php  include("../widgets/navbar.php");?>
    <!-- Cart Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-lg-8 table-responsive mb-5">
                <table class="table table-light table-borderless table-hover text-center mb-0">
                    <thead class="thead-dark">
                        <tr>
                            <th>Products</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Remove</th>
                        </tr>
                    </thead>
                    
            
            <!-- // require "dbconnection.php";
            //     $query="SELECT watches.watch_id, watches.watch_name, watches.watch_img,watches.watch_price, cart_items.quantity
            //      INNER JOIN cart_items ON cart_items.watch_id = watches.watch_id
            //      WHERE products.id = :product_id;" ;
            //      $stmt = $dbconnection->prepare($query);
            //      $stmt->execute(['id' => $query]);
            //      $product = $stmt->fetch(PDO::FETCH_ASSOC);
             
            //     if($users->rowCount()==0){
            //     echo ("empty table");
            //     }else{
            //         foreach($cart_items as $cart_item)
            //   {  echo "  <tr>
            //     <td>$cart_item<img src='./{$cart_item['image']}' alt= srcset= style=width:100px> </td>
            //     <td>$cart_item[watch_name] </td>
            //     <td>$cart_item[watch_price] </td>
            //     <td>$cart_item[watch_quentity] </td>
            //     <td>$cart_item[Total]  </td>
            //      <td><a href='$cart_item[cart_item_id]' class='btn btn-danger'>Delete</a>  </td>
            //    </tr> ";
// }
//                 }?>  -->
                    <tbody class="align-middle">
                        <tr>
                            <td class="align-middle"><img src="img/product-1.jpg" alt="" style="width: 50px;"> Product Name</td>
                            <td class="align-middle">$150</td>
                            <td class="align-middle">
                                <div class="input-group quantity mx-auto" style="width: 100px;">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary bg-danger text-white btn-minus" >
                                        <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" class="form-control form-control-sm bg-secondary qun border-0 text-center" value="1">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary bg-danger text-white btn-plus">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle">$150</td>
                            <td class="align-middle"><button class="btn btn-sm btn-danger bg-danger text-white btn-delete"><i class="fa fa-times"></i></button></td>
                        </tr>
                        <tr>
                            <td class="align-middle"><img src="img/product-2.jpg" alt="" style="width: 50px;"> Product Name</td>
                            <td class="align-middle">$150</td>
                            <td class="align-middle">
                                <div class="input-group quantity mx-auto" style="width: 100px;">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-minus bg-danger text-white" id="min" >
                                        <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" class="form-control form-control-sm  qun bg-secondary border-0 text-center" value="1" id="qun">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-plus bg-danger text-white" id="plus">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle">$150</td>
                            <td class="align-middle"><button class="btn btn-sm btn-danger bg-danger text-white btn-delete"><i class="fa fa-times"></i></button></td>
                        </tr>
                        <tr>
                            <td class="align-middle"><img src="img/product-3.jpg" alt="" style="width: 50px;"> Product Name</td>
                            <td class="align-middle">$150</td>
                            <td class="align-middle">
                                <div class="input-group quantity mx-auto" style="width: 100px;">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-minus bg-danger text-white" >
                                        <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" class="form-control form-control-sm  qun bg-secondary border-0 text-center" value="1">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-plus  bg-danger text-white">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle">$150</td>
                            <td class="align-middle"><button class="btn btn-sm btn-danger bg-danger text-white btn-delete"><i class="fa fa-times"></i></button></td>
                        </tr>
                        <tr>
                            <td class="align-middle"><img src="img/product-4.jpg" alt="" style="width: 50px;"> Product Name</td>
                            <td class="align-middle">$150</td>
                            <td class="align-middle">
                                <div class="input-group quantity mx-auto" style="width: 100px;">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-minus bg-danger text-white" >
                                        <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" class="form-control form-control-sm qun bg-secondary border-0 text-center" value="1">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-plus bg-danger text-white">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle">$150</td>
                            <td class="align-middle"><button class="btn btn-sm btn-danger bg-danger text-white btn-delete"><i class="fa fa-times"></i></button></td>
                        </tr>
                        <tr>
                            <td class="align-middle"><img src="img/product-5.jpg" alt="" style="width: 50px;"> Product Name</td>
                            <td class="align-middle">$150</td>
                            <td class="align-middle">
                                <div class="input-group quantity mx-auto" style="width: 100px;">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-minus bg-danger text-white" >
                                        <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" class="form-control qun form-control-sm bg-secondary border-0 text-center" value="1">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-plus bg-danger text-white">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle">$150</td>
                            <td class="align-middle"><button class="btn btn-sm btn-danger bg-danger text-white btn-delete"><i class="fa fa-times"></i></button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-4">
                <form class="mb-30" action="">
                    <div class="input-group">
                        <input type="text" class="form-control border-0 p-4" placeholder="Coupon Code">
                        <div class="input-group-append">
                            <button class="btn btn-primary bg-danger text-white">Apply Coupon</button>
                        </div>
                    </div>
                </form>
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Cart Summary</span></h5>
                <div class="bg-light p-30 mb-5">
                    <div class="border-bottom pb-2">
                        <div class="d-flex justify-content-between mb-3">
                            <h6>Subtotal</h6>
                            <h6 class="price">$150</h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Shipping</h6>
                            <h6 class="font-weight-medium">$10</h6>
                        </div>
                    </div>
                    <div class="pt-2">
                        <div class="d-flex justify-content-between mt-2">
                            <h5>Total</h5>
                            <h5>$160</h5>
                        </div>
                        <button type="button" class="btn btn-primary bg-danger text-white font-weight-bold my-2 py-3 w-100">Check Out</button>

  

                </div>
            </div>
        </div>
    </div>
    <!-- Cart End -->


    <!-- Footer Start -->
    <?php  include("../widgets/footer.php");?>

    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>

<script>
       var plusButtons = document.getElementsByClassName('btn-plus');
var minButtons = document.getElementsByClassName('btn-minus');
var qunFields = document.getElementsByClassName("qun");
var deleteButtons = document.getElementsByClassName("btn-delete"); // الحصول على جميع أزرار الحذف



// Add event listener for each '+' button
for (let i = 0; i < plusButtons.length; i++) {
    plusButtons[i].addEventListener('click', function() {
        let qunValue = parseInt(qunFields[i].value) || 0;  // Get current quantity value
        qunFields[i].value = qunValue + 1;  // Increment value
    });
}

// Add event listener for each '-' button
for (let i = 0; i < minButtons.length; i++) {
    minButtons[i].addEventListener('click', function() {
        let qunValue = parseInt(qunFields[i].value) || 0;  // Get current quantity value
        if (qunValue > 0) {  // Prevent going below zero
            qunFields[i].value = qunValue - 1;  // Decrement value
        }
    });
}



//   btn-delete=>Swal.fire({
//   title: "Are you sure?",
//   text: "You won't be able to revert this!",
//   icon: "warning",
//   showCancelButton: true,
//   confirmButtonColor: "#3085d6",
//   cancelButtonColor: "#d33",
//   confirmButtonText: "Yes, delete it!"
// }).then((result) => {
//   if (result.isConfirmed) {
//     Swal.fire({
//       title: "Deleted!",
//       text: "Your file has been deleted.",
//       icon: "success"
//     });
//   }
// });
for (let i = 0; i < deleteButtons.length; i++) {
        deleteButtons[i].addEventListener('click', function() {
            let row = this.parentElement.parentElement; // الحصول على الصف الذي يحتوي على زر الحذف
            row.remove(); // حذف الصف
        });
    }
    
</script>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="../mail/jqBootstrapValidation.min.js"></script>
    <script src="..js\main.js"></script>

    <!-- Template Javascript -->
     <!-- js code -->

    <script src="js/main.js"></script>


</body>

</html>
