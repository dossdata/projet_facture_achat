<!-- Modal  ajout utilisateur-->
<div class="modal fade" id="masque_utilisateur" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajout utilisateur</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="text-left border border-light p-5" action="#!">
            <p class="h4 mb-4 text-center">Formulaire</p>
            nom : <input type="text" id="nom" class="form-control txtuser"  >
            prenom : <input type="text" id="prenom" class="form-control txtuser" >
            login : <input type="email" id="login" class="form-control mb-4 txtuser" >
            password : <input type="password" id="password" class="form-control txtuser">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
        <button type="button" class="btn btn-primary" id="save_user">Enregistrer</button>
      </div>
    </div>
  </div>
</div>
<!-- ------xx------->

<!-- Modal  ajout patient-->
<div class="modal fade" id="masque_patient" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajout patient</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="text-left border border-light p-5" action="#!">
            <p class="h4 mb-4 text-center">Formulaire</p>
            nom : <input type="text" id="nom_patient" class="form-control txtpatient"  >
            indice : <input type="text" id="nom_indice"  class="form-control txtpatient" >
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
        <button type="button" class="btn btn-primary" id="save_patient">Enregistrer</button>
      </div>
    </div>
  </div>
</div>
<!-- ------xx------->



<!-- Modal  ajout facture-->
<div class="modal fade" id="masque_facture" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FACTURE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="text-left border border-light p-5" action="#!">
            <p class="h4 mb-4 text-center">Formulaire</p>
            nom patient : <b id="select_nom_indice"></b>
            libelle : <input type="text" class="form-control" >
            montant : <input type="email" class="form-control mb-4" >
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
        <button type="button" class="btn btn-primary">Enregistrer</button>
      </div>
    </div>
  </div>
</div>
<!-- ------xx------->