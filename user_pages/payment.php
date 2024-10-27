<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modal Example</title>
    <style>
    .modal-img-fit {
        width: 100%;    /* Make the image span the full width of the modal */
        height: auto;   /* Maintain aspect ratio */
    }
    </style>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php include("../widgets/navbar.php"); ?>

<!-- Button to Open Modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Open Payment Modal</button>

<!-- Modal Structure -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">
        <img src="../img/gallery/public.avif" class="modal-img-fit" alt="...">
    </h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
      <div class="modal-body">
        <form id="paymentForm">
          <div class="mb-3">
            <input type="text" id="typeText" name="cardNumber" class="form-control" minlength="16" maxlength="16" placeholder="Card Number" required>
          </div>
          <div class="mb-3">
            <input type="text" id="typeName" name="nameOnCard" class="form-control" placeholder="Name on Card" required>
          </div>
          <div class="row">
            <div class="col-md-6 mb-3">
              <input type="text" id="typeExp" name="expiration" class="form-control" minlength="5" maxlength="7" placeholder="Expiration (MM/YY)" required>
            </div>
            <div class="col-md-6 mb-3">
              <input type="password" id="typeCvv" name="cvv" class="form-control" minlength="3" maxlength="3" placeholder="CVV" required>
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Submit Payment</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<?php include("../widgets/footer.php"); ?>

<!-- Bootstrap JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
