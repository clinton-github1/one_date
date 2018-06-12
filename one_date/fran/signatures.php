<?php

include "header.php";

include "../shared/petition_db_connect.php";
?>

<div class="tell-othrs"><a href="tell-others.php" class="pg-links">Dites-le autour de vous</a></div>

<?php

class Signatures{
    
    public function allSignatures(){
    
    $database= new Database();
    $db= $database->getConnection();
    
    $sql= "SELECT * FROM petition ORDER BY ID DESC";
    $result= $db->query($sql);
    
    if($result->num_rows>0){
        
        echo "<table width=100%; border= 1><tr><th>Code</th><th>Nom</th><th>Email Address</th><th>Ville</th><th>Pays</th></tr>";
        
        while($row=mysqli_fetch_assoc($result)){
            
            echo "<tr><td>" . $row['ID'] . "</td>" . "<td>" . $row['Name']. "</td>" . "<td>" . $row['Email']. "</td>" . "<td>" . $row['City'] . "</td>"  . "<td>" . $row['Country'] . "</td></tr>";
            
        }
        
        echo "</table>";
        return $db;
    }
    }
}

$signature= new Signatures();
$signature->allSignatures();

include "footer.php";

?>