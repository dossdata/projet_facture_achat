<?php


$param = $_POST["param"];



if($param == "entersession"){
  
  $mail = $_POST["postemail"];
  $mdp = $_POST["postpsw"]; 


      if (!empty($_POST)) {
        

        if (isset($mail, $mdp ) && !empty($mail) && !empty($mdp)){

          //formulaire complet
          // on recupère les données en les protégeant
          // $peudo= strip_taps($_POST["login"]);

          if(!filter_var($mail, FILTER_VALIDATE_EMAIL)){
            $msg = "E-mail invalide!!!";
          }
          $psw = password_hash($mdp, PASSWORD_ARGON2I);

          // on enregistre en BDD


          include("connect.php");

            $ins = $base->prepare("SELECT * FROM facture.agent_saisie WHERE agent_saisie.login=:email");
            $ins->execute(array("email"=>$mail));
            // $resultat=$ins->fetchAll();

            while($resultat=$ins->fetch()){
              $username=$resultat['login'];
              $password=$resultat['mdp'];
              $id=$resultat['matricule'];
              
            }

            
            if (isset($username) && isset($password)) {
              
                  if(isset($mail) && isset($mdp) ){
                    
                    if($mail == $username && password_verify($mdp, $password)){ // Si- les infos correspondent...
                      
                        session_start();
                        $_SESSION['Admin'] = [
                        "email" => $username
                        ];
                        
                        // exit;

                        if (isset($_SESSION['Admin'])){
                        echo $msg ="YES".",";
                        echo (implode(",",$_SESSION['Admin']));
                        // header('Location: /localhost/datatable/inventaire.php');
                        }
                      
                    }
                    else{ // Sinon
                   echo   $msg = "Erreur mot de passe";
                        // header('Location: /espaceclient/?failed=true');
                    }

                }
            }
            else{
                  
                echo  $msg ="E-mail invalide!";
                }
          
        }else{
         echo $msg ="Veuillez bien remplir les champs";
            }

      }
  }
?>

