$(function(){
    var id_global = "";
    let nom = $('#nom'),
        prenom = $('#prenom'),
        login = $('#login'),
        password = $('#password'),
        nom_patient =$('#nom_patient'),
        nom_indice = $('#nom_indice'),
        tete_table_patient = '<table class="table table-striped">'+
                            '<thead>'+
                                '<tr>'+
                                    '<th scope="col">id</th>'+
                                    '<th scope="col">Nom</th>'+
                                    '<th scope="col">Indice</th>'+
                                '</tr>'+
                            '</thead>';
    load_premier();

    $(document).on('click','.sign_ut', function(){
       var data_valeur = JSON.parse('{"param":"deconnection"}');
       ajax_all("../controler/acceuil_script.php","json",data_valeur);
    })

    
    $(document).on('click','#save_patient', function(){
        var data_valeur = JSON.parse('{"param":"save_patient","nom_patient":"'+nom_patient.val()+'","nom_indice":"'+ nom_indice.val() +'"}');
        ajax_all("../controler/acceuil_script.php","",data_valeur);
          alert("Enregistrement OK !");
        $('.txtpatient').val("");
        nom_patient.focus();        
     })    

    $(document).on('click','#save_user', function(){
        var data_valeur = JSON.parse('{"param":"save_user","nom":"'+nom.val()+'","prenom":"'+prenom.val()+'","login":"'+login.val()+'","password":"'+password.val()+'"}');
        ajax_all("../controler/acceuil_script.php","",data_valeur);
        alert("Enregistrement OK !");
        $('.txtuser').val("");
        nom.focus();
    })
   
    function load_premier(){
        var data_valeur = JSON.parse('{"param":"select_nom_patient"}');
        var reponse = ajax_all("../controler/acceuil_script.php","json",data_valeur);
        var all_nom_indice = "";
        var all_liste_patient = "";
        for(var i = 0; i <reponse.length; i ++){
            all_nom_indice += "<option>"+ reponse[i]["nom"] + "_" + reponse[i]["id"] + "</option>";
            all_liste_patient += "<tr><td class='id_patient'>"+ reponse[i]["id"] + "</td><td contenteditable='true' class='edit_nom_patiant'>"+ reponse[i]["nom"] + "</td><td contenteditable='true' class='edit_indice_patient'>"+ reponse[i]["indice"] + "</td></tr>"
        }
        $('#select_nom_indice').html("<select class='form-control'><option></option>"+ all_nom_indice +"</select><br>")

        console.log(reponse);
        $('#list_des_patients').html(tete_table_patient + "<tbody>" + all_liste_patient + "</tbody></table>" );
    }

    $(document).on('keyup','.edit_indice_patient',function(e){
        var test_keyup = e.keyCode;
        var id_patient = $(this).closest('tr').find('.id_patient').html();
        if(test_keyup == 9 || test_keyup == 13){
            var data_valeur = JSON.parse('{"param":"update_patient_indice","id_patient":"'+id_patient+'", "indice_indice":"'+$(this).text()+'"}');
            ajax_all("../controler/acceuil_script.php","json",data_valeur);
            //load_premier();
        }
    })

    $(document).on('keyup','.edit_nom_patiant',function(e){
        var test_keyup = e.keyCode;
        var id_patient = $(this).closest('tr').find('.id_patient').html();
        if(test_keyup == 9 || test_keyup == 13){
            var data_valeur = JSON.parse('{"param":"update_nom","id_patient":"'+id_patient+'", "nom_nom":"'+$(this).text()+'"}');
            ajax_all("../controler/acceuil_script.php","json",data_valeur);
            load_premier();
        }
    })

 $(document).on('click','#list_des_patients table tr',function(){
    id_global = $(this).closest('tr').find('.id_patient').html();
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

    // code key
    document.onkeydown = function(e)
	{
        //alert(e.keyCode);
		if(e.keyCode==46)
		{
			
            alert(id_global + "io no suprimena");
			CancelEvent(e);
            var data_valeur = JSON.parse('{"param":"deleterow","id_patient":"'+id_global+'"}');    
            ajax_all("../controler/acceuil_script.php","",data_valeur);
            alert("Suppression OK !");
            load_premier();

		}
	}
   
	function CancelEvent(e)
	{
		if(e)
		{
			e.stopPropagation();
			e.preventDefault();
		}
		if(window.event)
		{
			window.event.cancelBubble = true;
			window.event.returnValue  = false;
			return;
		}
	}
//--------------------x-----------------------------

})

