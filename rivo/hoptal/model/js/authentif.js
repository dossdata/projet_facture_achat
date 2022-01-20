$(function(){
    let login = $('#email'),
        password = $('#psw');
    
    $(document).on('click','#valider', function(){
        enter_acceuil();
    })


  $(document).on('keyup','.psw', function(e){
    if(e.keyCode == "13"){
        enter_acceuil()
    }
  })

  function enter_acceuil(){
    $.ajax({
        type: "POST",
        url: "controler/authentif_script.php",
        dataType:"json",
        data: 
        {
            paramettre: "acces_login_agent",
            login:login.val(),
            password:password.val(),
        },
        success: function (response) {
            if(response > 0){
                window.location.href = "view/acceuil.php";
            }else{
              alert("tsy misy login");
            }
        },
    });  
  }

})