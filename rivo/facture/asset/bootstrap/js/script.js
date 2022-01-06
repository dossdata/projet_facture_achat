$(function(){
 
    $(document).on('click','#valider', function(){

      $.ajax({
          type: "POST",
          url: "authentif.php",
          data: 
          {
              param: "entersession",
              postemail: $("#email").val(),
              postpsw: $("#psw").val(),
          
              
          },
          success: function (response) {
              var reponse = response.split(',');
          
              if (reponse[0] == 'YES'){  
                  window.location.assign("http://localhost:86/facture/saisie.html");
                  // alert(response);
                          
              } else {
                  $(".msg").css("display", "inherit");
                  $(".msg").html(response);
              };
          },
      });   
  })
})