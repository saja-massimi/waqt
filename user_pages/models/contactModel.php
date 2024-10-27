<?php
class contactModel extends Dbh
{
    private $name;
    private $email;
    private $phone_number;
    private $subject;
    private $message;
    private $status;
    private $created_at;

    public function __construct($name = null, $email = null,$phone_number=null, $subject = null, $message = null, $status = null, $created_at= null)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone_number = $phone_number;
        $this->subject= $subject;
        $this->message = $message;
        $this->status = $status;
        $this->created_at = $created_at;
    }

    public function insertContactInfo($name,$email,$phone_number,$subject,$message)
    {
        $host = "localhost";
        $username = "root";
        $password = "";
        $dbname = "tick&style";


      
        $sql = "INSERT INTO `contact_us`(`id`, `name`, `email`, `phone_number`, `subject`, `message`) VALUES (':name,':email',':phone_number',':subject',':messege')";
    
        $stmt =$this->connect()->prepare($sql);
        $stmt->execute([':name', $name],[':email', $email],[':phone_number', $phone_number],[':subject',$subject],[':message', $message]);
         
           // Execute the statement
           if($stmt->execute()) {
               return "Data inserted successfully!";
           } else {
               return "Failed to insert data.";
           }
       
     return true;
    }
}

?>