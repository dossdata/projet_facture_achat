<?php 
  session_start();
  if($_SESSION["nom"] == "deconecter"){
    header('Location: http://localhost/hoptal/');
  }
?>
<html>
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Facture</title>
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
      <link rel="stylesheet" href="../asset/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="../asset/bootstrap/css/mdb.min.css">
      <link rel="stylesheet" href='../asset/bootstrap/css/addons/datatables.min.css'>
      <link rel="stylesheet" href='../asset/bootstrap/css/addons/datatables-select.min.css'>
      <link rel="stylesheet" href="../asset/bootstrap/css/style.css">
      <link rel="stylesheet" href="../model/css/acceil.css">
  </head>
  <body>
  
  <?php include("navebar.php") ?>
    <div id="liste_facture">
  <hr>
  
  <div class='mb-3 text-center'><h4>SUIVI GLOBAL</h4></div>
    <?php //include("datatable.php") ?>
  </div>

  <?php include("modal.php") ?>

  <?php include("card_bod.php") ?>

  <script type="text/javascript" src= "../asset/bootstrap/js/jquery.min.js"></script>
  <script type="text/javascript" src="../asset/bootstrap/js/popper.min.js"></script>
  <script type="text/javascript" src="../asset/bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../asset/bootstrap/js/addons/datatables.min.js"></script>
  <script type="text/javascript" src="../asset/bootstrap/js/addons/datatables-select.min.js"></script>

  <!-- script databtable --------->
      <script>
          $(document).ready(function () {
            $('#dtBasicExample').DataTable();
            $('.dataTables_length').addClass('bs-select');

            $('#dtVerticalScrollExample').DataTable({
                  "scrollY": "200px",
                  "scrollCollapse": true,
                  });
          });
      </script>
<!-- script databtable fint--------->

      <script src="../model/js/aceuil.js"></script>
</body>
</html>
