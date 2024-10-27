<?php  include("../widgets/navbar.php");?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="icon" href="./assets/logotitle.png" type="image/png"> <!-- Favicon -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .header3, hr, .text-item, a {
          
        }
        .Total {
         
        }
        .btn {
          
            
        }
        .btn:hover {
          
        }
        .card {
            border-radius: 15px;
        }
    </style>
</head>
<body>
  <div class="container py-4">
    <div class="row">
      <!-- Cart Section -->
      <div class="col-md-6">
        <div class="card shopping-cart">
          <div class="card-body">
            <h3 class="mb-5 pt-2 text-center fw-bold text-uppercase header3">Your Products</h3>
  
            <!-- Cart items will be injected here -->
            <div class="cart-items-container"></div>
  
            <!-- Discount and Total price -->
            <div class="d-flex justify-content-between px-3">
              <p class="fw-bold">Discount:</p>
              <p class="fw-bold">-</p>
            </div>
            <div class="d-flex justify-content-between p-2 mb-2 Total">
              <h5 class="fw-bold mb-0">Total:</h5>
              <h5 class="fw-bold mb-0 total-price">$0.00</h5>
            </div>
          </div>
        </div>
      </div>

      <!-- Payment Section -->
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <h3 class="mb-5 pt-2 text-center fw-bold text-uppercase header3">Payment</h3>
            <form class="mb-5" id="paymentForm">
              <div class="form-outline mb-5">
                <input type="text" id="typeText" class="form-control form-control-lg" size="17" minlength="16" maxlength="16" />
                <label class="form-label" for="typeText">Card Number</label>
                <div id="cardNumberError" class="error-message"></div>
              </div>
              <div class="form-outline mb-5">
                <input type="text" id="typeName" class="form-control form-control-lg" size="17" />
                <label class="form-label" for="typeName">Name on card</label>
                <div id="nameOnCardError" class="error-message"></div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-5">
                  <div class="form-outline">
                    <input type="text" id="typeExp" class="form-control form-control-lg" size="" minlength="5" maxlength="7" />
                    <label class="form-label" for="typeExp">Expiration</label>
                    <div id="expirationError" class="error-message"></div>
                  </div>
                </div>
                <div class="col-md-6 mb-5">
                  <div class="form-outline">
                    <input type="password" id="typeCvv" class="form-control form-control-lg" size="3" minlength="3" maxlength="3" />
                    <label class="form-label" for="typeCvv">CVV</label>
                    <div id="cvvError" class="error-message"></div>
                  </div>
                </div>
              </div>

              <input type="checkbox" id="Terms" name="Terms" value="agree" required>
              <label for=""><p class="mb-5">I have read <a href="terms&conditions/termsAndPolicy.html">Terms & Conditions</a> and agree</p></label>
              <div id="paymentSuccessMessage" style="color: green; display: none; text-align: center;"></div><br>
              <button type="submit" class="btn btn-lg btn-primary bg-danger text-white">Buy now</button>
              <a href="index.html"><i class="fas fa-angle-left me-2 back-shopping"></i>Back to shopping</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="addToCart.js"></script>
  <script src="cart.js"></script>
</body>
</html>
<?php  include("../widgets/footer.php");?>
