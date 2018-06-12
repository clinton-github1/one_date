<?php

include "../shared/contact_db_connect.php";
class Contact{
    
    public function __construct(){
        
        $database= new Database();
        $db=$database->getConnection();
        
        if(isset($db, $_POST['submit'])){
            $ID= rand(3000,10000);
            $Name= mysqli_real_escape_string($db, $_POST['name']);
            $Email= mysqli_real_escape_string($db, $_POST['email']);
            $Message= mysqli_real_escape_string($db, $_POST['message']);
            
            $sql= "INSERT INTO contact (ID, Name, Email, Message) VALUES ('$ID', '$Name', '$Email', '$Message')";
            
            if(!mysqli_query($db,$sql)){
                
                echo "records not sent";
            }
            
            echo "<script>alert('Message sent!!') , window.open('contact-us.php' , '_self')</script>";
            mysqli_close($db);
        }
        
    }
    
    
}

$contact= new Contact();

?>