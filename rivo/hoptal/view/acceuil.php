<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Facture</title>
    <link rel="shortcut icon" type="image" href="asset/images/user.jpg">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="../asset/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../asset/bootstrap/css/mdb.min.css">
    <link rel="stylesheet" href='../asset/bootstrap/css/addons/datatables.min.css'>
    <link rel="stylesheet" href='../asset/bootstrap/css/addons/datatables-select.min.css'>
    <link rel="stylesheet" href="../asset/bootstrap/css/style.css">
</head>
<body>
<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark primary-color fixed-top">

  <!-- Navbar brand -->
  <a class="navbar-brand" href="#">HOPITAL</a>

  <!-- Collapse button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Collapsible content -->
  <div class="collapse navbar-collapse" id="basicExampleNav">

    <!-- Links -->
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#masque_facture">Facture</a>
      </li>

      <!-- Dropdown -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Parametre</a>
        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#masque_utilisateur">Utilisateur</a>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#masque_patient">Patient</a>
        </div>
      </li>
      
    </ul>
    <!-- Links -->

  </div>
  <!-- Collapsible content -->

</nav>
<!--/.Navbar-->
<div id="liste_facture">
    <hr>
<div class='mb-3 text-center'><h4>SUIVI GLOBAL</h4></div>
<table id="dtBasicExample" class="table" width="100%">
  <thead>
    <tr>
      <th class="th-sm">Name
      </th>
      <th class="th-sm">Position
      </th>
      <th class="th-sm">Office
      </th>
      <th class="th-sm">Age
      </th>
      <th class="th-sm">Start date
      </th>
      <th class="th-sm">Salary
      </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Tiger Nixon</td>
      <td>System Architect</td>
      <td>Edinburgh</td>
      <td>61</td>
      <td>2011/04/25</td>
      <td>$320,800</td>
    </tr>
    <tr>
      <td>Garrett Winters</td>
      <td>Accountant</td>
      <td>Tokyo</td>
      <td>63</td>
      <td>2011/07/25</td>
      <td>$170,750</td>
    </tr>
    <tr>
      <td>Ashton Cox</td>
      <td>Junior Technical Author</td>
      <td>San Francisco</td>
      <td>66</td>
      <td>2009/01/12</td>
      <td>$86,000</td>
    </tr>
    <tr>
      <td>Cedric Kelly</td>
      <td>Senior Javascript Developer</td>
      <td>Edinburgh</td>
      <td>22</td>
      <td>2012/03/29</td>
      <td>$433,060</td>
    </tr>
    <tr>
      <td>Airi Satou</td>
      <td>Accountant</td>
      <td>Tokyo</td>
      <td>33</td>
      <td>2008/11/28</td>
      <td>$162,700</td>
    </tr>
    <tr>
      <td>Brielle Williamson</td>
      <td>Integration Specialist</td>
      <td>New York</td>
      <td>61</td>
      <td>2012/12/02</td>
      <td>$372,000</td>
    </tr>
    <tr>
      <td>Herrod Chandler</td>
      <td>Sales Assistant</td>
      <td>San Francisco</td>
      <td>59</td>
      <td>2012/08/06</td>
      <td>$137,500</td>
    </tr>
    <tr>
      <td>Rhona Davidson</td>
      <td>Integration Specialist</td>
      <td>Tokyo</td>
      <td>55</td>
      <td>2010/10/14</td>
      <td>$327,900</td>
    </tr>
    <tr>
      <td>Colleen Hurst</td>
      <td>Javascript Developer</td>
      <td>San Francisco</td>
      <td>39</td>
      <td>2009/09/15</td>
      <td>$205,500</td>
    </tr>
    <tr>
      <td>Sonya Frost</td>
      <td>Software Engineer</td>
      <td>Edinburgh</td>
      <td>23</td>
      <td>2008/12/13</td>
      <td>$103,600</td>
    </tr>
    <tr>
      <td>Jena Gaines</td>
      <td>Office Manager</td>
      <td>London</td>
      <td>30</td>
      <td>2008/12/19</td>
      <td>$90,560</td>
    </tr>
    <tr>
      <td>Quinn Flynn</td>
      <td>Support Lead</td>
      <td>Edinburgh</td>
      <td>22</td>
      <td>2013/03/03</td>
      <td>$342,000</td>
    </tr>
    <tr>
      <td>Charde Marshall</td>
      <td>Regional Director</td>
      <td>San Francisco</td>
      <td>36</td>
      <td>2008/10/16</td>
      <td>$470,600</td>
    </tr>
    <tr>
      <td>Haley Kennedy</td>
      <td>Senior Marketing Designer</td>
      <td>London</td>
      <td>43</td>
      <td>2012/12/18</td>
      <td>$313,500</td>
    </tr>
    <tr>
      <td>Tatyana Fitzpatrick</td>
      <td>Regional Director</td>
      <td>London</td>
      <td>19</td>
      <td>2010/03/17</td>
      <td>$385,750</td>
    </tr>
    <tr>
      <td>Michael Silva</td>
      <td>Marketing Designer</td>
      <td>London</td>
      <td>66</td>
      <td>2012/11/27</td>
      <td>$198,500</td>
    </tr>
    <tr>
      <td>Paul Byrd</td>
      <td>Chief Financial Officer (CFO)</td>
      <td>New York</td>
      <td>64</td>
      <td>2010/06/09</td>
      <td>$725,000</td>
    </tr>
    <tr>
      <td>Gloria Little</td>
      <td>Systems Administrator</td>
      <td>New York</td>
      <td>59</td>
      <td>2009/04/10</td>
      <td>$237,500</td>
    </tr>
    <tr>
      <td>Bradley Greer</td>
      <td>Software Engineer</td>
      <td>London</td>
      <td>41</td>
      <td>2012/10/13</td>
      <td>$132,000</td>
    </tr>
    <tr>
      <td>Dai Rios</td>
      <td>Personnel Lead</td>
      <td>Edinburgh</td>
      <td>35</td>
      <td>2012/09/26</td>
      <td>$217,500</td>
    </tr>
    <tr>
      <td>Jenette Caldwell</td>
      <td>Development Lead</td>
      <td>New York</td>
      <td>30</td>
      <td>2011/09/03</td>
      <td>$345,000</td>
    </tr>
    <tr>
      <td>Yuri Berry</td>
      <td>Chief Marketing Officer (CMO)</td>
      <td>New York</td>
      <td>40</td>
      <td>2009/06/25</td>
      <td>$675,000</td>
    </tr>
    <tr>
      <td>Caesar Vance</td>
      <td>Pre-Sales Support</td>
      <td>New York</td>
      <td>21</td>
      <td>2011/12/12</td>
      <td>$106,450</td>
    </tr>
  </tbody>
  <tfoot>
    <tr>
      <th>Name
      </th>
      <th>Position
      </th>
      <th>Office
      </th>
      <th>Age
      </th>
      <th>Start date
      </th>
      <th>Salary
      </th>
    </tr>
  </tfoot>
</table>

</div>

<?php include("modal.php") ?>


<script type="text/javascript" src= "../asset/bootstrap/js/jquery.min.js"></script>
    <script type="text/javascript" src="../asset/bootstrap/js/popper.min.js"></script>
    <script type="text/javascript" src="../asset/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../asset/bootstrap/js/addons/datatables.min.js"></script>
    <script type="text/javascript" src="../asset/bootstrap/js/addons/datatables-select.min.js"></script>

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
</body>
</html>
