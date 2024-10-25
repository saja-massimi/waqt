<?php
// require 'C:/xampp/htdocs/php-project/waqt/user_pages/models/contactModel.php';
// require "C:/xampp/htdocs/php-project/waqt/user_pages/models/Dbh.php";
// require "C:/xampp/htdocs/php-project/waqt/user_pages/contact.php";




if(isset($_POST['submit_contact'])=="insertContactInfo"){
    $contact_name=$_POST['name'];
    echo $contact_name;
    $contact_email=$_POST['email'];
    $contact_phone=$_POST['phone_number'];
    $contact_subject=$_POST['subject'];
    $contact_message=$_POST['message'];
 $insert=new contactModel();
 $insert->insertContactInfo($contact_name, $contact_email, $contact_phone, $contact_subject, $contact_message);}
else{
    echo "no need";
}

?>
