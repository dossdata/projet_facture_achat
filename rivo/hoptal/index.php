<!-- https://mdbootstrap.com/docs/b4/jquery/modals/additional/   -->

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Facture</title>
    <link rel="shortcut icon" type="image" href="asset/images/user.jpg">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="asset/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/bootstrap/css/mdb.min.css">
    <link rel="stylesheet" href='asset/bootstrap/css/addons/datatables.min.css'>
    <link rel="stylesheet" href='asset/bootstrap/css/addons/datatables-select.min.css'>
    <link rel="stylesheet" href="asset/bootstrap/css/style.css">


</head>

<body class="index">
    <div class="login">
            <div class="msg" style="color:green; "></div>
            <span>Login</span><input id="email" class="email" required pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}" type="text"><br>
        <span>Password</span><input id="psw" class="psw" type="password"><br>
            <button id="valider" class="btn btn-primary active">E N T E R</button>  
    </div>

    <div class="ecran" style="display:none">
        <div class="row">
                <div class="col-md-2">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon3">Code</span>
                        <input type="text" class="form-control idecran idvaleur1" aria-describedby="basic-addon3">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon3">Marque</span>
                        <!-- <input type="text" class="form-control idecran idvaleur2"  aria-describedby="basic-addon3"> -->
                        <select id="list_mark" class="form-control" aria-describedby="basic-addon3">
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon3">Année</span>
                        <input type="text" class="form-control idecran idvaleur3"  aria-describedby="basic-addon3">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">Etat</span>
                            <input type="text"  class="form-control idecran idvaleur4" aria-describedby="basic-addon3">
                    </div>   
                </div>
                
        </div>
        <div class="row">
                <div class="col-md-2">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon3">Matricule</span>
                        <input type="text" class="form-control idecran idvaleur5" aria-describedby="basic-addon3">
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon3">Utilisateur</span>
                        <input type="text" class="form-control idecran idvaleur6"  aria-describedby="basic-addon3">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon3">Affectation</span>
                        <input type="text" class="form-control idecran idvaleur7"  aria-describedby="basic-addon3">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">Supervision</span>
                            <input type="text" class="form-control idecran idvaleur8" aria-describedby="basic-addon3">
                    </div>   
                </div>
                
        </div>
    </div>




    <script type="text/javascript" src= "asset/bootstrap/js/jquery.min.js"></script>
    <script type="text/javascript" src="asset/bootstrap/js/popper.min.js"></script>
    <script type="text/javascript" src="asset/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="asset/bootstrap/js/addons/datatables.min.js"></script>
    <script type="text/javascript" src="asset/bootstrap/js/addons/datatables-select.min.js"></script>
    <script type="text/javascript" src="model/js/authentif.js"></script>
</body>
</html>