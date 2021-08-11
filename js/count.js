$(document).ready(function(){
    



var host = document.domain ;
var protocol = location.protocol === 'https:' ? "https://" : "http://"  ;
if(host === '127.0.0.1'){
    
    host = host+"/register/dashboard" ;
    
}
else{
    
    host = host+"/dashboard" ;
    
}


//must_be_validated


      /*  $('.test').on('click' , function (){
   console.log($("tbody tr").length);
     // $("tbody tr:first").before(row);
  
});*/
     
$('#bases_algo').on('click' , function (){
    
    
   
       
        Increment_count('basesAlgorithmes');
   //  alert('ok');
     
      
  
        
});


   
    /*
     * 
     * 
     * update
     * 
     * 
     */ 
    
 
 
    function Increment_count(course_name){
        
   //           var unknow_email = $('<h5 id="unknow_email"  class=" text-center alert alert-danger center-block"  style="margin-bottom: 0px; width: 50%;">Nom d\' utilisateur ou adresse mail introuvable.</h5>');
  
  //  var network_error = $('<h5 id="network_error"  class=" text-center alert alert-danger center-block"  style="margin-bottom: 0px; width: 50%;">Une erreur est survenue lors de l\' envoi, veuillez re-essayer.</h5>');
  
     
   /*$("#send_ok").remove();
   $("#unknow_email").remove(); 
   $("#network_error").remove();
    
    $('#loader_recovery').addClass('loader') ;*/
    
         // var course_name = 'basesAlgorithmes' ;
        
        
    $.post(
    protocol+host+"/src/Controller/statistik_controller.php", // Le fichier cible côté serveur.
    {
        course_name : course_name
    },
    backFromServer, // Nous renseignons uniquement le nom de la fonction de retour.
    'text' // Format des données reçues.
);
    
function backFromServer(data){
 
            console.log(data);
   // $('#loader_recovery').removeClass('loader') ;
    

   //console.log(data) ;
    /*
    
     if(data=='0'){
         
     unknow_email.insertAfter( $( "#recovery_advice" ) );
    }
    else if(data=='error'){
        
      //  //console.log(data.length) ; 
      
     network_error.insertAfter( $( "#recovery_advice" ) );
        
    }
    else{
        
     var send_complete =     $('<h5 id="send_ok" class="text-center alert alert-success center-block"  style="margin-bottom: 0px; width: 50%;">Un lien de reinitialisation a été envoye à l\'adresse <strong>'+data+'</strong></h5>');
   
     send_complete.insertAfter( $( "#recovery_advice" ) );
         // similar behavior as an HTTP redirect
//window.location.replace(protocol+host+"/new_user");
        
    }*/

}
        
        
    }
    


});

