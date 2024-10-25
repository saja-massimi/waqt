<?php
class contactModel 
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


        try {

            $dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;
            $conn = new PDO($dsn, $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
            echo $conn;
        } catch (PDOException $e) {
            echo ("Connection failed: " . $e->getMessage());
        }
    
        $sql = "INSERT INTO `contact_us`(`id`, `name`, `email`, `phone_number`, `subject`, `message`) VALUES (':name,':email',':phone_number',':subject',':messege')";
         $conntect=new Dbh();
        $stmt =$this->$conn->prepare($conn,$sql);
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