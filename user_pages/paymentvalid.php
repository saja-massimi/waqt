<?php

// Initialize variables to store errors and form data
$errors = ['cardNumber' => '', 'nameOnCard' => '', 'expiration' => '', 'cvv' => ''];
$successMessage = '';

// Process form when submit button is pressed
if (isset($_POST['submitBtn'])) {
    // Validation functions
    function validateCardNumber($cardNumber) {
        return preg_match('/^\d{16}$/', str_replace(' ', '', $cardNumber));
    }

    function validateExpiration($expiration) {
        return preg_match('/^(0[1-9]|1[0-2])\/(\d{2})$/', $expiration);
    }

    function validateCVV($cvv) {
        return preg_match('/^\d{3}$/', $cvv);
    }

    // Get and validate form inputs
    $cardNumber = $_POST['cardNumber'] ?? '';
    $nameOnCard = $_POST['nameOnCard'] ?? '';
    $expiration = $_POST['expiration'] ?? '';
    $cvv = $_POST['cvv'] ?? '';

    if (!validateCardNumber($cardNumber)) {
        $errors['cardNumber'] = "Please enter a valid card number.";
    }

    if (empty($nameOnCard)) {
        $errors['nameOnCard'] = "Name on card is required.";
    }

    if (!validateExpiration($expiration)) {
        $errors['expiration'] = "Please enter a valid expiration date (MM/YY).";
    }

    if (!validateCVV($cvv)) {
        $errors['cvv'] = "CVV must be exactly 3 digits.";
    }

    // If no errors, process payment (dummy success message for example)
    if (!array_filter($errors)) {
        $successMessage = "Payment successful!";
        // Here you would add code to process the payment
    }
}


if(isset($_POST['add_student'])){
$fname=$_POST['fname'];
// echo $fname;
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];
$file_image=$_FILES['image']['name'];
$tempname=$_FILES['image']['tmp_name'];
echo $file_image;
$folder='image/'.$file_image;

move_uploaded_file($tempname,$folder);
// INSERT INTO `crud`(`user_id`, `user_name`, `user_email`, `user_mobile`, `user_password`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]')

$query="INSERT INTO `crud`(`user_name`, `user_email`, `user_mobile`,`image`, `user_password`) VALUES (:user_name,:user_email,:user_mobile,:user_image,:user_password)";
$statment=$dbconnection->prepare($query);
$data=[
    'user_name' => $fname,
    'user_email' => $email,
    'user_mobile' => $mobile,
    'user_image'=>$folder,
    'user_password' => $password,
    
];

$statment->execute($data);
header('location:index.php?message=user add sucessfully');
}


?>

   
    <?php if ($successMessage): ?>
    <p style="color:green;"><?= $successMessage; ?></p>
<?php endif; ?>