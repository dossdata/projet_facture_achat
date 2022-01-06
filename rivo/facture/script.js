$(function(){
 
    $(document).on('click','#valider', function(){
      $.ajax({
          type: "POST",
          url: "authentif.php",
          data: 
          {
              paramettre: "acces_login",
              login:$('#email').val(),
              password:$('#psw').val(),
          },
          success: function (response) {
              alert(response);
          },
      });   
  })
})