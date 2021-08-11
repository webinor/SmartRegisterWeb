$(document).ready(function(){
    
   /* XMLHttpRequest.prototype.send=function() {
        return false ;
    };*/

var is_subscribe_form_valid = false ;
var host = document.domain ;
var protocol = location.protocol === 'https:' ? "https://" : "http://"  ;
var row_customer=0;
var id_customer=0;
if(host === '127.0.0.1'){
    
    host = host+"/register/dashboard" ;
    
}
else{
    
    host = host+"/dashboard" ;
    
}

function FormatString(unformatted){


    unformatted = unformatted.trim();

    unformatted = unformatted.toLowerCase() ;

    unformatted = unformatted.normalize('NFD').replace(/[\u0300-\u036f]/g, "");

    unformatted = unformatted.replace(/[^a-zA-Z0-9 ]/g, "");

  //  unformatted = unformatted.replace(/ /g,"-")

  //  unformatted = $$.toCamelCase(unformatted) ;

    unformatted = unformatted.charAt(0).toUpperCase() + unformatted.slice(1)

    return unformatted ;
  }
     
$('input').on('ifChecked', function(event){
        
        var current_row_index=this.parentElement.parentElement.parentElement.rowIndex,
        currentColumnIndex=this.parentElement.parentElement.cellIndex,
        id=document.getElementById('customerTable').rows[current_row_index].cells[1].innerText,
        name=document.getElementById('customerTable').rows[current_row_index].cells[2].innerText,
        phone1=document.getElementById('customerTable').rows[current_row_index].cells[6].innerText,
      //  phone2=document.getElementById('customerTable').rows[current_row_index].cells[7].innerText,
        school=document.getElementById('customerTable').rows[current_row_index].cells[7].innerText,
        level=document.getElementById('customerTable').rows[current_row_index].cells[8].innerText,
        amount=document.getElementById('customerTable').rows[current_row_index].cells[9].innerText;
     
     if(current_row_index===0){
         
            return 0 ;
            
     }
      
      row_customer=current_row_index;
      id_customer=id;
       
        $('#level').val(level);
        $('#name').val(FormatString(name));
    ($('#school_name').val(FormatString(school)));
    ($('#contact').val($.trim(phone1)));
   // ($('#contact2').val($.trim(phone2)));
    $('#amount').val(amount);
    
    
        /*$('.add_upd').text('Modifier') ;
       $('.add_upd').attr('id' , 'update_customer') ;*/
        
        $('.add_upd').toggleClass('hidden');
        
      // console.log(row_customer) 
  /*console.log(  id+' ; '+
          name+' ; '+
        phone1+' ; '+
        phone2+' ; '+
        school+' ; '+
        level+' ; '+
        amount);*/
});

$('input').on('ifUnchecked', function(event){
        
        var current_row_index=this.parentElement.parentElement.parentElement.rowIndex,
        currentColumnIndex=this.parentElement.parentElement.cellIndex,
        id=document.getElementById('customerTable').rows[current_row_index].cells[1].innerText,
        name=document.getElementById('customerTable').rows[current_row_index].cells[2].innerText,
        phone1=document.getElementById('customerTable').rows[current_row_index].cells[3].innerText,
     //   phone2=document.getElementById('customerTable').rows[current_row_index].cells[4].innerText,
        school=document.getElementById('customerTable').rows[current_row_index].cells[4].innerText,
        level=document.getElementById('customerTable').rows[current_row_index].cells[5].innerText,
        amount=document.getElementById('customerTable').rows[current_row_index].cells[6].innerText;
     
     if(current_row_index===0){
         
            return 0 ;
            
     }
      
       row_customer=0;
      id_customer=0;
       
    $('#level').val($("#level optgroup option:first").val());
    $('#name').val('');
    $('#school_name').val('');
    $('#contact').val('');
    $('#contact2').val('');
    $('#amount').val('');
    
   /*  $('.add_upd').text('Ajouter') ;
       $('.add_upd').attr('id' , 'send_register') ;*/
       
        $('.add_upd').toggleClass('hidden');
        
  /*console.log(  id+' ; '+
          name+' ; '+
        phone1+' ; '+
        phone2+' ; '+
        school+' ; '+
        level+' ; '+
        amount);*/
});

$('#cancel').on('click' , function (){
    
    $('input').iCheck('uncheck');
    
});

$('#update_customer').on('click' , function (){
    
  // alert('ok')
    
    is_subscribe_form_valid = true ; 
    
    $('#register_form .must_be_validated').each(function(){

   //<script src="<?= $hote ?>build/js/custom.min.js"></script>
       validate_fields($(this));
     
     if(!$(this).is('select')){
     
   //  console.log('!select');
     
            if($(this).parent().hasClass('has-error') || !$(this).parent().find('.help-block').hasClass('hidden')){
                
           is_subscribe_form_valid = false ; 

       
        }
}
else{
    
      //  console.log('select');
    
    if($(this).parent().parent().hasClass('has-error') || !$(this).parent().parent().find('.help-block').hasClass('hidden')){
                
           is_subscribe_form_valid = false ; 

       
        }
    
}
    
});

 
 var warningo = $('<h5 id="form_top_header"  class=" alert alert-danger center-block text-center"  style="margin-bottom: 0px; width: 50%;">Certains champ sont invalides</h5>');
  
    $("#form_top_header").remove();
       $('#warning').remove();
        $('#update_ok').remove();
        $('#customer_already_exists').remove();
   
  if(is_subscribe_form_valid === false){
      
      
       
      warningo.insertAfter( $( "#register_advice" ) );
      
       $("html, body").animate({ scrollTop: 0 }, "slow");
      
   //    //console.log('pas ok');
  }
  else{
     
  
     
       
        Update(row_customer , id_customer);
   //  alert('ok');
     
      
  }
        
});
  
$('#send_register').on('click' , function (){
    
   //alert('okiiiiiiiiii')
    
    is_subscribe_form_valid = true ; 
    
    $('#register_form .must_be_validated').each(function(){

   //<script src="<?= $hote ?>build/js/custom.min.js"></script>
       validate_fields($(this));
     
     if(!$(this).is('select')){
     
   //  console.log('!select');
     
            if($(this).parent().hasClass('has-error') || !$(this).parent().find('.help-block').hasClass('hidden')){
                
           is_subscribe_form_valid = false ; 

       
        }
}
else{
    
      //  console.log('select');
    
    if($(this).parent().parent().hasClass('has-error') || !$(this).parent().parent().find('.help-block').hasClass('hidden')){
                
           is_subscribe_form_valid = false ; 

       
        }
    
}
    
});

 
 var warningo = $('<h5 id="form_top_header"  class=" alert alert-danger center-block text-center"  style="margin-bottom: 0px; width: 50%;">Certains champ sont invalides</h5>');
   $("#form_top_header").remove();
    $('#warning').remove();
        $('#register_ok').remove();
        $('#customer_already_exists').remove();
   
  if(is_subscribe_form_valid === false){
      
      
      warningo.insertAfter( $( "#register_advice" ) );
      
       $("html, body").animate({ scrollTop: 0 }, "slow");
      
   //    //console.log('pas ok');
  }
  else{
   
        Register();
   //  alert('ok');
     
      
  }
        
});

$('#send_code').on('click' , function (){
    
 
    is_subscribe_form_valid = true ; 
    
    $('#code_form .must_be_validated').each(function(){

   //<script src="<?= $hote ?>build/js/custom.min.js"></script>
       validate_fields($(this));
     
     if(!$(this).is('select')){
     
   //  
     
            if($(this).parent().hasClass('has-error') || !$(this).parent().find('.help-block').hasClass('hidden')){
                
           is_subscribe_form_valid = false ; 

       
        }
}
else{
    
 //   //console.log('select');
    
    if($(this).parent().parent().hasClass('has-error') || !$(this).parent().parent().find('.help-block').hasClass('hidden')){
                
           is_subscribe_form_valid = false ; 

       
        }
    
}
    
});

 
 var warningo = $('<h5 id="form_top_header"  class=" alert alert-danger center-block text-center"  style="margin-bottom: 0px; width: 50%;">Certains champ sont invalides</h5>');
   
   
   
  if(is_subscribe_form_valid === false){
      
      
      $("#form_top_header").remove();
      $('#warning').remove();
      $('#register_ok').remove();
       
      warningo.insertAfter( $( "#advice" ) );
      
       $("html, body").animate({ scrollTop: 0 }, "slow");
      
   //    //console.log('pas ok');
  }
  else{
     
      $("#form_top_header").remove();
      $('#warning').remove();
      $('#register_ok').remove();
     
       
        Create_code();
     //alert('ok');
     
      
  }
        
});

$('.must_be_validated').on('blur' , function (){
  
    validate_fields($(this)) ;
  
});

$('select.must_be_validated').on('change' , function (){
  
 // //console.log('ok')
  
    validate_fields($(this)) ;
  
});

$('#send_update').on('click' , function (){
    
  //   //console.log($('#specialist_in_profile').val().length);
     
    is_subscribe_form_valid = true ;
    
    
    
    $('#update_form .must_be_validated').each(function(){


       validate_fields($(this));
     
     if(!$(this).is('select')){
     
   //  //console.log('!select');
     
            if($(this).parent().hasClass('has-error') || !$(this).parent().find('.help-block').hasClass('hidden')){
                
           is_subscribe_form_valid = false ; 

       
        }
}
else{
    
 //   //console.log('select');
    
    if($(this).parent().parent().hasClass('has-error') || !$(this).parent().parent().find('.help-block').hasClass('hidden')){
                
           is_subscribe_form_valid = false ; 

       
        }
    
}
    
});

 
  var warning = $('<h5 id="update_form_top_header"  class=" text-center alert alert-danger center-block"  style="margin-bottom: 0px; width: 50%;">Certains champs sont invalide</h5>');
   

  if(is_subscribe_form_valid === false){
         
          
          
      $("#update_form_top_header").remove();
      $("#update_complete").remove();
       
      warning.insertAfter( $( "#update_statut" ) );
      
       $("html, body").animate({ scrollTop: 0 }, "slow");
  }
  else{
      
     
  
      $("#update_form_top_header").remove();
      $("#update_complete").remove();
      
     
        Update_profile();
    
       
    
  }

     
       
});

$('#send_subscribe').on('click' , function (){
    
  //  alert('ok')
  
    is_subscribe_form_valid = true ; 
    
    $('#subscribe_form .must_be_validated').each(function(){

  // //console.log($(this).parent().parent());
       validate_fields($(this));
     
    if(!$(this).is('select')){
     
   //  //console.log('!select');
     
            if($(this).parent().hasClass('has-error') || !$(this).parent().find('.help-block').hasClass('hidden')){
                
           is_subscribe_form_valid = false ; 

       
        }
}

    else{
    
 //   //console.log('select');
    
    if($(this).parent().parent().hasClass('has-error') || !$(this).parent().parent().find('.help-block').hasClass('hidden')){
                
           is_subscribe_form_valid = false ; 

        }
    
}
    
});

 
 var warningo = $('<h5 id="form_top_header"  class=" alert alert-danger center-block"  style="margin-bottom: 0px;">Certains champ sont invalides</h5>');
   
   
   
  if(is_subscribe_form_valid === false){
      
      
      $("#form_top_header").remove();
       
      warningo.insertAfter( $( "#advice" ) );
      
       $("html, body").animate({ scrollTop: 0 }, "slow");
      
    //  console.log('pas ok');
  }
  else{
     
      $("#form_top_header").remove();
     
     //  console.log('ok');
       
      // return 0;
       
         Subscribe();
     
   // //
      
  }
  
  
  

     
       
});

$('#send_recovery_mail').on('click' , function (){
    
    
  // similar behavior as an HTTP redirect
//window.location.replace(protocol+host+"/src/View/password_recovery_complete.php");

  is_subscribe_form_valid = true ;
    
  
    
    
    $('#password_recovery_form .must_be_validated').each(function(){
      
    //    //console.log($(this).attr('id'));

     validate_fields($(this));
 
            if($(this).parent().hasClass('has-error') || !$(this).parent().find('.help-block').hasClass('hidden')){
                
           is_subscribe_form_valid = false ; 
 
        }
    
});

 
 
 

  if(is_subscribe_form_valid === false){
         
          
     //  //console.log('invalid');   
   //   $("#update_form_top_header").remove();
     // $("#update_complete").remove();
       
    //  warning.insertAfter( $( "#recovery_advice" ) );
    
     $("html, body").animate({ scrollTop: 0 }, "slow");
  }
  else{
      
     
  //  //console.log('valid');  
   //   $("#update_form_top_header").remove();
    //  $("#update_complete").remove();
      
     
         Send_recovery_mail();
       
    
  }

     

       
});

$('#reset_password').on('click' , function (){
    
    
    
        
  // similar behavior as an HTTP redirect
//window.location.replace(protocol+host+"/src/View/password_recovery_complete.php");

  is_subscribe_form_valid = true ;
    
  
    
    
    $('#change_password_form .must_be_validated').each(function(){
      
    //    //console.log($(this).attr('id'));

     validate_fields($(this));
 
            if($(this).parent().hasClass('has-error') || !$(this).parent().find('.help-block').hasClass('hidden')){
                
           is_subscribe_form_valid = false ; 
 
        }
    
});

 
 
 

  if(is_subscribe_form_valid === false){
         
          
    //   //console.log('invalid');   
   //   $("#update_form_top_header").remove();
     // $("#update_complete").remove();
       
    //  warning.insertAfter( $( "#recovery_advice" ) );
    
     $("html, body").animate({ scrollTop: 0 }, "slow");
  }
  else{
      
     
   // //console.log('valid');  
   //   $("#update_form_top_header").remove();
    //  $("#update_complete").remove();
      
     
         change_password();
       
    
  }
    
   
    
       
});
 
$('.notation').on('click' , function (e){
        
  var user = $('#user').val() ,
  
    guide_name = document.location.pathname.match(/[^\/]+$/)[0].split(".")[0] ,
    
    notation =$(this).hasClass('yes') ? '1' : '0';
  
  console.log(user +" ; "+guide_name+" ; "+notation);
    
         setNote(user , guide_name , notation);
         
         e.preventDefault();
     
    
    });
    
 

   
    /*
     * 
     * 
     * update
     * 
     * 
     */ 
    
 
    

    function  setNote(user , guide_name , notation){
        
 

////console.log(level);

 var data_send_to_server = {} ;
 


    data_send_to_server = {
                 
                
      /*  first_name : first_name , 
        school_name:school_name,*/
        user:user,
        guide_name :guide_name,
        notation:notation
        /*  contact:contact,
        amount:amount*/
    };
        
      //  }
      
      $('#feedback').css('display' , 'none');
      $('#response').css('display' , 'block');
      



    $.post(
    protocol+host+"/src/Controller/guide_controller.php", // Le fichier cible côté serveur.
    data_send_to_server,
    backFromServer, // Nous renseignons uniquement le nom de la fonction de retour.
    'json' // Format des données reçues.
);
    
function backFromServer(data){
 
 

}
    

    }
    
    

});

