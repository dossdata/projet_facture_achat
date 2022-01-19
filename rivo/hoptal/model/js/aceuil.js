$(function(){
    $(document).on('click','.sign_ut', function(){
        var data_valeur = JSON.parse('{"param":"deconnection","nom":"nomtest","prenom":"prenomtest"}');
       console.log(ajax_all("../controler/acceuil_script.php","json",data_valeur));
    })

function ajax_all(myurl,mydatatype,mydata){
    var valeur_azo;
        $.ajax({
            type: "POST",
            url: myurl,
            dataType:mydatatype,
            data:mydata,
            async:false,
            success: function (response) {
                valeur_azo = response;
            },
        });  
        return valeur_azo; 
    }
})