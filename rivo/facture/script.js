$(function(){
 
    $(document).on('click','#valider', function(){
      $.ajax({
          type: "POST",
          url: "authentif.php",
          data: 
          {
              paramettre: "acces_login_agent",
              login:$('#email').val(),
              password:$('#psw').val(),
          },
          success: function (response) {
              if(response > 0){
                  window.location.href = "saisie.php";
              }else{
                alert("tsy misy login");
              }
          },
      });   
  })
})