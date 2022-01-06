<html>
    <head>
    <link rel="shortcut icon" type="image" href="asset/images/user.jpg">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="asset/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/bootstrap/css/mdb.min.css">
    <link rel="stylesheet" href='asset/bootstrap/css/addons/datatables.min.css'>
    <link rel="stylesheet" href='asset/bootstrap/css/addons/datatables-select.min.css'>
    <link rel="stylesheet" href="asset/bootstrap/css/style.css">
    </head>
        <body>
            <h1 class="text-center">MASQUE DE SAISIE</h1>
            <hr>
            <div class="text-right">
            <?php 
                session_start();
                echo "<i class='fas fa-users'></i>&nbsp;". $_SESSION["sylenom"] . "<br>matricule : ". $_SESSION["lematricule"];
            ?>
            </div>

            <div class="row">

                <div class="col">
                    <b>LISTES DES IMAGES</b> <br>
                   <?php
                        $images = "";
                        for($i = 0; $i< 4 ; $i++){
                            $images .= "<a href='#' class='nom_image'>kab13342". $i . ".pdf </a><br>";
                        }
                        echo $images;
                   ?>
                    <div id="historique"></div>
                </div>
                
                <div class="col">
                nom : <input type="text" id="input_nom"><br><br>
                ttc : <input type="text" id="input_ttc"><hr>
                <button id="enregistrer" class="btn-primary">Enregistrer</button>
                </div>
                
                <div class="col" id="view_image">
                

                </div>
               </div>
       

<script type="text/javascript" src= "asset/bootstrap/js/jquery.min.js"></script>
    <script type="text/javascript" src="asset/bootstrap/js/popper.min.js"></script>
    <script type="text/javascript" src="asset/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="asset/bootstrap/js/addons/datatables.min.js"></script>
    <script type="text/javascript" src="asset/bootstrap/js/addons/datatables-select.min.js"></script>
    <script type="text/javascript" src="script_saisie.js"></script>    
</body>

</html>