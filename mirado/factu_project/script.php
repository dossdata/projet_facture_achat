<?php
 include "connect.php";
/* 
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //$sql = "INSERT INTO client ( nom, contact)
  //VALUES ( 'Doe', '033')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "New record created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null; 
  */
/*------------------------ */

    
    $nom = mysqli_real_escape_string($conn, $_POST['nom']);
    $contact = mysqli_real_escape_string($conn, $_POST['contact']);
 
 
    if(mysqli_query($conn, "INSERT INTO client(nom, contact) VALUES('" . $nom . "', '" . $contact . "')")) 
    {
     echo '1';
    } else {
       echo "Error: " . $sql . "" . mysqli_error($conn);
    }
 
    mysqli_close($conn);
 
