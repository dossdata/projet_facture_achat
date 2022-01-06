<?php

$param = $post["param"];

if($param == "test"){
  echo("sdds");
    // $mail = $_POST["mail"];
    // $psw = $_POST["psw"]; 
  
  
    //     if (!empty($_POST)) {
          
  
    //       if (isset($mail, $psw ) && !empty($mail) && !empty($psw)){
  
    //         //formulaire complet
    //         // on recupère les données en les protégeant
    //         // $peudo= strip_taps($_POST["login"]);
  
    //         if(!filter_var($mail, FILTER_VALIDATE_EMAIL)){
    //           $msg = "E-mail invalide!!!";
    //         }
    //         $psw = password_hash($psw, PASSWORD_ARGON2I);
  
    //         // on enregistre en BDD
  
  
    //         include("connect.php");
  
    //           $ins = $base->prepare("SELECT * FROM facture.session WHERE `session`.`email`=:email");
    //           $ins->execute(array("email"=>$mail));
    //           // $resultat=$ins->fetchAll();
  
    //           while($resultat=$ins->fetch()){
    //             $username=$resultat['email'];
    //             $password=$resultat['password'];
    //             $id=$resultat['id'];
                
    //           }
  
              
    //           if (isset($username) && isset($password)) {
                
    //                 if(isset($mail) && isset($psw) ){
                      
    //                   if($mail == $username && password_verify($psw, $password)){ // Si- les infos correspondent...
                        
    //                       session_start();
    //                       $_SESSION['Admin'] = [
    //                       "email" => $username
    //                       ];
                          
    //                       // exit;
  
    //                       if (isset($_SESSION['Admin'])){
    //                       echo $msg ="YES".",";
    //                       echo (implode(",",$_SESSION['Admin']));
    //                       // header('Location: /localhost/datatable/inventaire.php');
    //                       }
                        
    //                   }
    //                   else{ // Sinon
    //                  echo   $msg = "Erreur mot de passe";
    //                       // header('Location: /espaceclient/?failed=true');
    //                   }
  
    //               }
    //           }
    //           else{
                    
    //               echo  $msg ="E-mail invalide!";
    //               }
            
    //       }else{
    //        echo $msg ="Veuillez bien remplir les champs";
    //           }
  
    //     }
    }
?>