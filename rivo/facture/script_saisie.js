$(function(){
  $(document).on('click','.nom_image', function(){
    var image_recuperena = $(this).closest('a').html();
    var image = '<iframe id="inlineFrameExample" title="Inline Frame Example" width="1000" height="550" src="list_images/'+ image_recuperena + '"> </iframe>';
    $('#view_image').html(image)  ;
  })


  $(document).on('click','#enregistrer', function(){
    var nom  =  $('#input_nom').val();
    var ttc =  $('#input_ttc').val();

    $.ajax({
        type: "POST",
        url: "saisie_php.php",
        data: 
        {
            paramettre: "insertion",
            lenom:nom,
            lettc:ttc,
           
        },
        success: function (response) {
          alert("ok");
        },
    });   

  })

  
})