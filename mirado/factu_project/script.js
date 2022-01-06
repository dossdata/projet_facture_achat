$(document).on('click','#btn',function(){
   /*  $.ajax({
        URL:'script.php',
        type : 'POST',
        success:function(data){
            console.log(data);
        }
    }) */
    alert($('#nom_client').val());
    alert($('#cont').val());
})