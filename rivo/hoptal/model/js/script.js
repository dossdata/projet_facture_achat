$(function(){
    let login = $('#email'),
        password = $('#psw');
    $(document).on('click','#valider', function(){
      $.ajax({
          type: "POST",
          url: "controler/authentif.php",
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
  })


})