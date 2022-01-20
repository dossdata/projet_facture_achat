
<nav class="navbar navbar-expand-lg navbar-dark primary-color fixed-top">
  <a class="navbar-brand" href="#">HOPITAL</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="basicExampleNav">
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
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Parametre</a>
        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#masque_utilisateur">Utilisateur</a>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#masque_patient">Patient</a>
        </div>
      </li>      
    </ul>

    <form class="form-inline">
      <div class="md-form my-0">
      <i class="fas fa-sign-in-alt"></i>&nbsp;<a href="http://localhost/hoptal/" class="sign_ut">Deconnexion</a>
      </div>
    </form>
  </div>
 </nav>