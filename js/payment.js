$(document).ready(function(){
    


var is_subscribe_form_valid = false ;
var entry_host = document.domain ;
var host = document.domain ;
var protocol = location.protocol === 'https:' ? "https://" : "http://"  ;
if(host === '127.0.0.1'){
    
    host = host+"/register/dashboard" ;
     entry_host = entry_host+"/register/" ;
    
}
else{
    
    host = host+"/dashboard" ;
    entry_host = entry_host+"/" ;
    
}


function mobileAndTabletcheck() {
  var check = false;
  
  (function(a){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino|android|ipad|playbook|silk/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))) check = true;})(navigator.userAgent||navigator.vendor||window.opera);
  
    return check ;
}; 

//alert(mobileAndTabletcheck())

if( mobileAndTabletcheck()){
    
    $('.mobile_css').addClass('define_mobile_css');
    
   /* $('.mobile_css').css({
        color: '#ffffff',
    '-webkit-box-shadow': '0 20px 50px -10px rgba(0, 0, 0, 0.6)',
    'box-shadow': '0 20px 50px -10px rgba(0, 0, 0, 0.6)',
    '-webkit-transform': 'translateY(-5px)',
    '-ms-transform': 'translateY(-5px)',
    'transform': 'translateY(-5px)'
    });*/
    
};

function FormatString(unformatted){


    unformatted = unformatted.trim();

    unformatted = unformatted.toLowerCase() ;

    unformatted = unformatted.normalize('NFD').replace(/[\u0300-\u036f]/g, "");

    unformatted = unformatted.replace(/[^a-zA-Z0-9 ]/g, "");

  //  unformatted = unformatted.replace(/ /g,"-")

  //  unformatted = $$.toCamelCase(unformatted) ;

    unformatted = unformatted.charAt(0).toUpperCase() + unformatted.slice(1);

    return unformatted ;
  }
 

//must_be_validated


      /*  $('.test').on('click' , function (){
   console.log($("tbody tr").length);
     // $("tbody tr:first").before(row);
  
});*/
      
$('.purchase_detail').on('click' , function (){
   // alert('ok')
   
   
   
   var type=$(this).parentsUntil('','.type').attr('id'),
    period="1",
    amount= (parseInt($('#'+type+' .rate').text()))+1  ;
   
    
   $('#type').val(type);
   $('#amount').val(amount);
      $('#myModal').modal('toggle');
   
        
});

$('#proceed_paiement').on('click' , function (){
    
     is_subscribe_form_valid = true ;
     
    $('#form_modal .must_be_validated').each(function(){
        
      

   //<script src="<?= $hote ?>build/js/custom.min.js"></script>
       validate_fields($(this));
     
     if(!$(this).is('select')){
     
   // console.log('!select');
   //  console.log($(this).parentsUntil('','.form-group'))
            if($(this).parentsUntil('','.form-group').hasClass('has-error') || !$(this).parentsUntil('','.form-group').find('.help-block').hasClass('hidden')){
            //   console.log('put false');
           is_subscribe_form_valid = false ; 

       
        }
}
else{
    
      //  console.log('select');
    
    if($(this).parentsUntil('','.form-group').hasClass('has-error') || !$(this).parentsUntil('','.form-group').find('.help-block').hasClass('hidden')){
         //  console.log($(this).parentsUntil('','.form-group'))   
         //  console.log('put false')
           is_subscribe_form_valid = false ; 

       
        }
    
}
    
});
    

  if(is_subscribe_form_valid === false){
      
      
      //   $("html, body").animate({ scrollTop: $( ".section-padding" ).offset().top-20 }, "slow");
      
       // console.log('pas ok');
  }
  else{
     
      
      ///  console.log('ok');
     
   //  return 0   ;
     
     
        $("#form_modal").submit();
     
        $('#myModal').modal('toggle');
      
  }
   
   
  //   console.log($('#first_name').val()+' ;; '+$('#last_name').val()+' ;; '+$('#type').val()+' ;; '+$('#amount').val());
});
/*
 * 
 * $('#proceed_paiement').on('click' , function (){
   
    var pattern = /^[a-zA-Z]+([_\- ]?[a-zA-Z0-9])*$/ ;
    
    ///^[a-zA-Z]+([_\-]?[a-zA-Z0-9])*$/
     
     if(!pattern.test($.trim($('#first_name').val()))){
         
       alert('Votre Nom doit contenir au moins 2 lettres.')
       
       return 0 ;
   }
  if( !pattern.test($.trim($('#last_name').val()))){
       alert('Votre Prenom doit contenir au moins 2 lettres.');
       return 0 ;
   }
   if(parseInt($('#amount').val())<=0){
       alert('Le montant doit etre supérieur a zero.')
       return 0 ;
   }
     $("#form_modal").submit();
     
      $('#myModal').modal('toggle');
   
  //   console.log($('#first_name').val()+' ;; '+$('#last_name').val()+' ;; '+$('#type').val()+' ;; '+$('#amount').val());
});


*/

$(".momo-PrepaidAccountAmount").change(function(){
   
    var current_form =   $(this).parents('div').last().attr('id');
    
  //  console.log(current_form);
   
    $(`#${current_form} .final_amount`).val($(`#${current_form} .momo-PrepaidAccountAmount`).val());
    
  /*  
     console.log("==== "+$("#myModal_premium .momo-PrepaidAccountAmount").val());
   
         var totalprice = ($(`#${current_form} .final_amount`).val());
    var currentFormAmount = ($(`#${current_form} .momo-PrepaidAccountAmount`).val()) ;
     console.log(totalprice +'  '+ currentFormAmount);*/
})

$('#signin').on('click' , function (){
    
   // 
    
    is_subscribe_form_valid = true ; 
    
    $('#login_form .must_be_validated').each(function(){

   //<script src="<?= $hote ?>build/js/custom.min.js"></script>
       validate_fields($(this));
     
     if(!$(this).is('select')){
     
    // console.log('!select');
   //  console.log($(this).parentsUntil('','.form-group'))
            if($(this).parentsUntil('','.form-group').hasClass('has-error') || !$(this).parentsUntil('','.form-group').find('.help-block').hasClass('hidden')){
           //    console.log('put false')
           is_subscribe_form_valid = false ; 

       
        }
}
else{
    
      //  console.log('select');
    
    if($(this).parentsUntil('','.form-group').hasClass('has-error') || !$(this).parentsUntil('','.form-group').find('.help-block').hasClass('hidden')){
         //  console.log($(this).parentsUntil('','.form-group'))   
         //  console.log('put false')
           is_subscribe_form_valid = false ; 

       
        }
    
}
    
});

 
 var warningo = '<h5 id="form_top_header"  class=" alert alert-danger center-block text-center"  style="margin-bottom: 0px; width: 50%;">Certains champ sont invalides</h5>';
   
   
   
  if(is_subscribe_form_valid === false){
      
      
      $("#form_top_header").remove();
      $('#warning').remove();
      $('#register_ok').remove();
       
    //  warningo.insertAfter( $( "#register_form" ) );
      $( "#register_form" ).prepend(warningo)
       $("html, body").animate({ scrollTop: $( ".section-padding" ).offset().top-20 }, "slow");
      
    console.log('pas ok');
  }
  else{
     
      $("#form_top_header").remove();
      $('#warning').remove();
      $('#register_ok').remove();
     
       
        Login();
   //  alert('ok');
     
      
  }
        
});


$('#signup').on('click' , function (){
    
   // 
    
    is_subscribe_form_valid = true ; 
    
    $('#register_form .must_be_validated').each(function(){

   //<script src="<?= $hote ?>build/js/custom.min.js"></script>
       validate_fields($(this));
     
     if(!$(this).is('select')){
     
    // console.log('!select');
   //  console.log($(this).parentsUntil('','.form-group'))
            if($(this).parentsUntil('','.form-group').hasClass('has-error') || !$(this).parentsUntil('','.form-group').find('.help-block').hasClass('hidden')){
               console.log('put false')
           is_subscribe_form_valid = false ; 

       
        }
}
else{
    
      //  console.log('select');
    
    if($(this).parentsUntil('','.form-group').hasClass('has-error') || !$(this).parentsUntil('','.form-group').find('.help-block').hasClass('hidden')){
         //  console.log($(this).parentsUntil('','.form-group'))   
         //  console.log('put false')
           is_subscribe_form_valid = false ; 

       
        }
    
}
    
});

 
 var warningo = '<h5 id="form_top_header"  class=" alert alert-danger center-block text-center"  style="margin-bottom: 0px; width: 50%;">Certains champ sont invalides</h5>';
   
   
   
  if(is_subscribe_form_valid === false){
      
      
      $("#form_top_header").remove();
      $('#warning').remove();
      $('#register_ok').remove();
       
    //  warningo.insertAfter( $( "#register_form" ) );
      $( "#register_form" ).prepend(warningo)
       $("html, body").animate({ scrollTop: $( ".section-padding" ).offset().top-20 }, "slow");
      
    console.log('pas ok');
  }
  else{
     
      $("#form_top_header").remove();
      $('#warning').remove();
      $('#register_ok').remove();
     
       
        Register();
    // alert('ok');
     
      
  }
        
});

$('#send_code').on('click' , function (){
    
   // //console.log('!se');
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

$(".init_pay").click(function(){
    
    //alert('okiiiiiiiiii')
    
    var current_form =   $(this).parents('div').last().attr('id');
    
    is_subscribe_form_valid = true ; 
    
    $(`#${current_form} .must_be_validated`).each(function(){

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
      
      
     // warningo.insertAfter( $( "#register_advice" ) );
      
     //  $("html, body").animate({ scrollTop: 0 }, "slow");
      
   console.log('pas ok');
  }
  else{
   
        init_pay($(this));
   //  alert('ok');
     
      
  }
     
   
 
   
});
/*
$('.benchmarck').click(function(){
    
   // alert($(this).attr('id'));
   

   
   var id_element=$(this).attr('id');
   
   benchmark(id_element);
    
});
*/
   
    /*
     * 
     * 
     * update
     * 
     * 
     */ 
    
    
    function identify_operator(phone_number) {



    //   myapp.alert(translate[lang]["success"], translate[lang]["service_unavailable"]);

    let pattern = /^6{1}[56789]{1}[0-9]{7}$/,
    isValid=false,
      mtn = 0,
      orange = 0,
      nexttel = 0,
      inconnu = 0;

    //  console.log("phone_number_"+phone_number);


      if (pattern.test(phone_number) ) {
        
        let indicatif = parseInt(phone_number.substring(1, 2)),
          chiffres = parseInt(phone_number.substring(1, 3));

       //   console.log("indicatif_"+indicatif);
       //   console.log("chiffres_"+chiffres);

          if ((indicatif == 5 && chiffres >= 50 && chiffres < 55) || (indicatif == 7) || (indicatif == 8)) {
          //     console.log("Mtn_"+phone_number);
            isValid=true;
            return { "isContactValid":isValid , operator:"Mtn Mobile Money"} ;
          }
          else if ((indicatif == 5 && chiffres >= 55 && chiffres < 60) || (indicatif == 9)) {
           //    console.log("Orange_"+phone_number);
            isValid=true;
           return {"isContactValid":isValid , operator: "Orange Money"};
          }
          else if (indicatif == 6) {
            //  console.log("Nexttel_"+phone_number);
            return false;
          }
          else {
             // console.log("Inconnu_"+phone_number);
           return  false;
          }

      }
      else{
        return { "isContactValid":isValid , operator:"UNKNOW"} 
      }

      // end=index;

   
  }
 
    function init_pay(current_button){
      
     var current_form =   current_button.parents('div').last().attr('id');
        
     //   console.log(current_form);
        
      //  return 0 ;
        
    var payment_details=identify_operator($(`#${current_form} .phone`).val());

  //  console.log(payment_details["isContactValid"]);
   // console.log(payment_details["operator"]);

         if (payment_details["isContactValid"]===true) {
           
           
            $('#payment_type').val(payment_details["operator"]);


   


    var phone = $(`#${current_form} .phone`).val();
    var totalprice = ($(`#${current_form} .final_amount`).val());
    var currentFormAmount = ($(`#${current_form} .momo-PrepaidAccountAmount`).val()),
            first_name=$(`#${current_form} .fname`).val().trim(),
            last_name=$(`#${current_form} .lname`).val().trim();

  //  console.log("totalprice == "+totalprice);
  //  console.log("currentFormAmount == "+currentFormAmount);

 if (totalprice!=="" && totalprice===currentFormAmount) {

  
  //  console.log("soumission du formulaire");
  
     $(`#${current_form} .init_pay`).attr('disabled' ,'disabled'); 
     $(`#${current_form} .loader_pay`).addClass('loader') ;
    
  //  return 0; 

    $.ajax({
            url: protocol+host+"/src/Controller/payment_controller.php",
            method: "POST",
            data: {
                phone: phone,
                first_name:first_name,
                last_name:last_name,
                payment_details: totalprice
            },
            success: function (url) {
                
              //  console.log(url);
             
           

                   $(`#${current_form} .init_pay`).removeAttr('disabled' ,'disabled');
                   
                    $(`#${current_form} .loader_pay`).removeClass('loader') ;
                    
                
                window.location.replace(url);

                   // console.log("soumission du formulaire "+formId);

                 //  $(`#formmobile`).submit();

                  //  $('#myModalPayment').modal('hide')



                    //window.location.href = $("#path_site").val() + "/viewdetails" + "/" + data1;
                
            } 
        });


 } else {

    //console.log("erreur sur les montants");
     
 }
   
} else {
           
            //console.log("Contact telephonique incorrect");
}
    }
    
    function  validate_fields(field){
        
       
        if(field.is("input[type=text]") ){
       
   
       
    
        if( field.val().length > 0  ){
         
         console.log(field.hasClass("fname"));
         
         if( field.hasClass("fname") || field.hasClass("lname")    ){
       // console.log('ok id '); 
           var pattern = /^[a-zA-Z]+([_\- ]?[a-zA-Z0-9])*$/ ;
      
     if( pattern.test($.trim(field.val()))){
         
       //  console.log('ok');
                    has_success(field);
                    
           //     console.log('zohhhhhh');
        
        
    }
         else{
      //   console.log('pas ok');
     // console.log('zehhh');
        has_error(field);
        
        
        is_subscribe_form_valid = false ;
        
        
         }
         
        }
 
         else  if( field.attr('id') ==="f_name" || field.attr('id') ==="l_name" || field.attr('id') ==="city" ){
          
            var pattern = /^[a-zA-Z]+([_\- ]?[a-zA-Z0-9])*$/ ;
     
     if( pattern.test($.trim(field.val()))){
         
         
                    has_success(field);
                    
           //  console.log('zohhhhhh');
        
        
    }
         else{
        
  //   console.log('zehhh');
        has_error(field);
        
        
        is_subscribe_form_valid = false ;
         }
         
      }
        
                
                else  if( field.attr('id') ==="name" || field.attr('id') ==="school_name" ){
          
            var pattern = /^[a-zA-Z]+([_\- ]?[a-zA-Z0-9])*$/ ;
     
     if( pattern.test($.trim(field.val()))){
         
         
                    has_success(field);
                    
               //     //console.log('zohhhhhh');
        
        
    }
         else{
        
      //   //console.log('zehhh');
        has_error(field);
        
        
        is_subscribe_form_valid = false ;
         }
         
      }
        else{
            
            
            /*
             * 
             * @type RegExp
             * à revoir
             */
            
            
            
              var pattern_mail = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/ ;
     
   /*  if( field.val().length > 3 && pattern_mail.test($.trim(field.val())) ){
         
      //  has_success(field);
        
       // //console.log('1');
    }
    
  
    else {
        
    //    has_error(field);
        
     //    is_subscribe_form_valid = false ; 
           
    }*/
            
            
            
        }
    }
    else{
        
     console.log('pas ok');
        has_error(field);
        
        is_subscribe_form_valid = false ;  
        
    
        
    }
    }
    
    
    else if(field.is("input[type=email]") ){
      
        var pattern = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/ ;
     
     if( field.val().length > 4 && pattern.test($.trim(field.val()))){
         
        has_success(field);
        
       // //console.log('1');
    }
    
    else if(  field.val().length > 4 && ! pattern.test($.trim(field.val()))){
        
        has_error(field);
        
         is_subscribe_form_valid = false ; 
    }
    else {
        
        has_error(field);
        
         is_subscribe_form_valid = false ; 
         //   //console.log('3');
    }
    }
    
    
    
    else if(field.is("input[type=password]") ){
      
    
        
     if(field.attr('id') ==="password" || field.attr('id') ==="user_password"){
         
     if( field.val().length > 5 ){
         
        /*field.parentsUntil('','.form-group').removeClass('has-error');
        field.parentsUntil('','.form-group').find('.help-block').addClass('hidden');
        field.parent().addClass('has-success');*/
        has_success(field);
        
    }
    
    else {
        
        has_error(field);
        
         is_subscribe_form_valid = false ; 
        
    }
    
     }
     else{
         
       
        if( field.val().length > 5  &&  field.val() === $("#password").val()  ){
         
        has_success(field);
        
        has_success($("#password"));
        
        
    }
    
    else  {
        
      //  alert($("#password").val() === 'undefined');
        field.parent().removeClass('has-success');
        field.parent().find('.help-block').removeClass('hidden');
        field.parent().addClass('has-error');
        
        $("#password").parent().removeClass('has-success');
     //   $("#password").parent().find('.help-block').removeClass('hidden');
     //   $("#password").parent().addClass('has-error');
        
         is_subscribe_form_valid = false ; 
        
    }
    
        
     }
     
    }
  
     else if (field.is("input[type=number]")) {
         
          if(field.hasClass("phone") ){
            
          
                
            var pattern = /^6{1}[56789]{1}[0-9]{7}$/ ;
     
     if(pattern.test($.trim(field.val()))){
         
         
      
       has_success(field);
      
         
     }
     else{
         
        has_error(field);
      
         
     }
     
    

        

        }
        if(field.attr('id') ==="contact2"   ){
            
              if(field.val().length > 0){
                
            var pattern = /^6{1}[56789]{1}[0-9]{7}$/ ;
     
     if(pattern.test($.trim(field.val()))){
         
         
      
       has_success(field);
      
         
     }
     else{
         
        has_error(field);
      
         
     }
     
    
}else{
    
    
    has_success(field);
}
        

        }
        
          
     
        }
        
        else if (field.is("select")) {
        
   
     if(field.val().length > 0){
         
         
      
        field.parentsUntil('','.form-group').removeClass('has-error');
        field.parentsUntil('','.form-group').find('.help-block').addClass('hidden');
        field.parentsUntil('','.form-group').addClass('has-success');
      
     // console.log("Ok");
     }
     else{
         
        field.parentsUntil('','.form-group').removeClass('has-success');
        field.parentsUntil('','.form-group').find('.help-block').removeClass('hidden');
        field.parentsUntil('','.form-group').addClass('has-error');
      
   // console.log("Pas ok");
         
     }
 
            

     
        }
        
          else if (field.is("input[type=date]")) {
        
       
         function isValidDate(dateString) {
  var regEx = /^\d{4}-\d{2}-\d{2}$/;
  if(!dateString.match(regEx)) return false;  // Invalid format
  var d = new Date(dateString);
  if(!d.getTime() && d.getTime() !== 0) return false; // Invalid date
  return d.toISOString().slice(0,10) === dateString;
}
  
    // //console.log(($("#birthday").val()));
      

            
            if(isValidDate($.trim(field.val()))){
         
         
      
        has_success(field);
      
         
     }
     else{
         
        has_error(field);
      
         
     }
                 
     
        }
        
         else if (field.is("textarea")) {
        
       
        if(field.val().length > 0){
         
         
      
        has_success(field);
      
         
     }
     else{
         
        has_error(field);
      
         
     }
                 
     
        }
        
      
      
        
    }
    
    function has_success(field){
        
        field.parentsUntil('','.form-group').removeClass('has-error');
        field.parentsUntil('','.form-group').find('.help-block').addClass('hidden');
        field.parentsUntil('','.form-group').addClass('has-success');
        
     //   //console.log('c est ok');
        
        
    }
    
    function has_error(field){
        
        field.parentsUntil('','.form-group').removeClass('has-success');
        field.parentsUntil('','.form-group').find('.help-block').removeClass('hidden');
        field.parentsUntil('','.form-group').addClass('has-error');
        
      //  //console.log(field.parent().find('.help-block'));
        
    }

    function Register(){
        
    
    $('#signup').attr('disabled' ,'disabled'); 
       
     $('#loader_register').addClass('loader') ;
     
         
    var level = $('#level').val();
     var city = $('#city').val();
    var first_name = FormatString($('#f_name').val());
    var last_name = FormatString($('#l_name').val());
    var contact =  $.trim($('#contact').val());
    

////console.log(level);

 var data_send_to_server = {} ;
 


    data_send_to_server = {
                 
                
        first_name : first_name , 
        last_name:last_name,
        level :level,
        city:city,
        contact:contact
    };
        
      //  }



    $.post(
    protocol+host+"/src/Controller/register_controller.php", // Le fichier cible côté serveur.
    data_send_to_server,
    backFromServer, // Nous renseignons uniquement le nom de la fonction de retour.
    'json' // Format des données reçues.
);
    
function backFromServer(data){
 
    $('#signup').removeAttr('disabled' ,'disabled');
    
    $('#loader_register').removeClass('loader') ;
    
     var warning = '<h5 id="warning" class="text-center alert alert-danger center-block"  style="margin-bottom: 0px; width: 50%;">Une erreur s\'est produite veuillez ressayer</h5>';
 
    var exists = '<h5 id="exists" class="text-center alert alert-danger center-block"  style="margin-bottom: 0px; width: 50%;">Ce numero de telephone est deja utilise, essayez un autre</h5>';

    var register_complete =  '<h5 id="register_ok" class="text-center alert alert-success center-block"  style="margin-bottom: 0px; width: 50%;">Compte creer avec succes, vous recevrez votre mot de passe par SMS</h5>';
   
   //console.log(data) ;
  
   //  return 0; 
    
    if(data['statut']=='1'){
        
     //   alert('register_by'  in data);
        
      //  var row = ( 'register_by'  in data ) ? $('<tr class="even pointer"><td class="a-center "><input type="checkbox" class="flat" name="table_records"></td><td>0</td><td>'+data['first_name']+'</td><td>'+data['contact']+'</td><td>'+data['contact2']+'</td><td>'+data['school_name']+'</td><td>'+data['level']+'</td><td>'+data['amount']+'</td><td>'+data['register_date']+'</td><td>'+data['register_by']+'</td><tr>') : $('<tr class="even pointer"><td class="a-center "><input type="checkbox" class="flat" name="table_records"></td><td>0</td><td>'+data['first_name']+'</td><td>'+data['contact']+'</td><td>'+data['contact2']+'</td><td>'+data['school_name']+'</td><td>'+data['level']+'</td><td>'+data['amount']+'</td><td>'+data['register_date']+'</td><tr>');
        
     //    var row =  $('<tr class="even pointer"><td class="a-center "><input type="checkbox" class="flat" name="table_records"></td><td>0</td><td>'+data['first_name']+'</td><td>'+data['contact']+'</td><td>'+data['school_name']+'</td><td>'+data['level']+'</td><td>'+data['amount']+'</td><td>'+data['register_date']+'</td>'+  ( 'register_by'  in data ) ? '<td>'+data['register_by']+'</td>' : '' +'<tr>');
       
       
            $('#warning').remove();
       $('#register_ok').remove();
       $('#exists').remove();
       
    //  warningo.insertAfter( $( "#register_form" ) );
      $( "#register_form" ).prepend(register_complete)
        
        //$("#mainTable").ajax.reload();;
         // similar behavior as an HTTP redirect
//window.location.replace(protocol+host+"/new_user");
  
   
    // register_complete.insertAfter( $( "#advice" ) );
     
     // $("html, body").animate({ scrollTop: 0 }, "slow");
      
       $('html, body').animate({
                    scrollTop: $( ".section-padding" ).offset().top-20
                }, "slow");
        
    }
    else   if(data['statut']=='0'){
        
     //   alert('register_by'  in data);
        
      //  var row = ( 'register_by'  in data ) ? $('<tr class="even pointer"><td class="a-center "><input type="checkbox" class="flat" name="table_records"></td><td>0</td><td>'+data['first_name']+'</td><td>'+data['contact']+'</td><td>'+data['contact2']+'</td><td>'+data['school_name']+'</td><td>'+data['level']+'</td><td>'+data['amount']+'</td><td>'+data['register_date']+'</td><td>'+data['register_by']+'</td><tr>') : $('<tr class="even pointer"><td class="a-center "><input type="checkbox" class="flat" name="table_records"></td><td>0</td><td>'+data['first_name']+'</td><td>'+data['contact']+'</td><td>'+data['contact2']+'</td><td>'+data['school_name']+'</td><td>'+data['level']+'</td><td>'+data['amount']+'</td><td>'+data['register_date']+'</td><tr>');
        
     //    var row =  $('<tr class="even pointer"><td class="a-center "><input type="checkbox" class="flat" name="table_records"></td><td>0</td><td>'+data['first_name']+'</td><td>'+data['contact']+'</td><td>'+data['school_name']+'</td><td>'+data['level']+'</td><td>'+data['amount']+'</td><td>'+data['register_date']+'</td>'+  ( 'register_by'  in data ) ? '<td>'+data['register_by']+'</td>' : '' +'<tr>');
       
       
            $('#warning').remove();
       $('#register_ok').remove();
       $('#exists').remove();
       
    //  warningo.insertAfter( $( "#register_form" ) );
      $( "#register_form" ).prepend(warning)
        
        //$("#mainTable").ajax.reload();;
         // similar behavior as an HTTP redirect
//window.location.replace(protocol+host+"/new_user");
  
   
    // register_complete.insertAfter( $( "#advice" ) );
     
     // $("html, body").animate({ scrollTop: 0 }, "slow");
      
       $('html, body').animate({
                    scrollTop: $( ".section-padding" ).offset().top-20
                }, "slow");
        
    }
    else{
        
       
       $('#warning').remove();
       $('#register_ok').remove();
       $('#exists').remove();
       
       $( "#register_form" ).prepend(exists)
       
 
        
        $("html, body").animate({ scrollTop: $( ".section-padding" ).offset().top-20 }, "slow");
        
    }

}
    

    }
    
    function Login(){
        
    $('#loader_connect').addClass('loader') ;
    
    
  // $('#'+current_form_id+' #unknow_password').addClass('hidden');

//$('#'+current_form_id+' #unknow_password').parent().removeClass('has-error');


    var user_name_or_email =$.trim($('#contact').val()) ; 
    var password = $.trim($('#password').val());
   
  
        
 
    $.post(
    protocol+host+"/src/Controller/connect_user_controller.php", // Le fichier cible côté serveur.
    {
       
        contact : user_name_or_email,
        password : password
    },
    backFromServer, // Nous renseignons uniquement le nom de la fonction de retour.
    'json' // Format des données reçues.
);
    
function backFromServer(data){
    
 // console.log(data);  
  
 // return 0 ;
    
         $('#loader_connect').removeClass('loader') ;
         
  $('#username_already_use').remove();
       $('#email_already_use').remove();
        $('#username_email_already_use').remove();
        $('#password_error').remove();
        $('#subscribe_ok').remove();
    
    if(data['user_name_or_emal_error']){
        
             var warning_username = $('<h5 id="username_already_use" class="text-center alert alert-danger center-block"  style="margin-bottom: 0px; width: 50%;">'+data['user_name_or_emal_error']+'</h5>');
     var warning_email = $('<h5 id="email_already_use" class="text-center alert alert-danger center-block"  style="margin-bottom: 0px; width: 50%;">Adresse email incorrecte </h5>');
 

       var pattern = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/ ;
     
     if( pattern.test($.trim(user_name_or_email))){
        
//$('#'+current_form_id+' #unknow_user').text('Adresse email incorrecte');

 warning_email.insertAfter( $( "#login_advice" ) );

        //alert('Adresse email incorrecte');

//$('#'+current_form_id+' #unknow_user').removeClass('hidden');

//$('#'+current_form_id+' #unknow_user').parent().addClass('has-error');
     }
     else{
         
          $( "#login_form" ).prepend(warning_username);
  //   warning_username.insertAfter( $( "#login_advice" ) );    
//alert('Nom d\'utililsateur incorrect');

//$('#'+current_form_id+' #unknow_user').text('Nom d\'utililsateur incorrect');

//$('#'+current_form_id+' #unknow_user').removeClass('hidden');

//$('#'+current_form_id+' #unknow_user').parent().addClass('has-error');

     }
    }
            else if (data['password_error']) {
  
      var password_error = $('<h5 id="password_error" class="text-center alert alert-danger center-block"  style="margin-bottom: 0px; width: 50%;">'+data['password_error']+'</h5>');
   
  // password_error.insertAfter( $( "#login_advice" ) );
   
    $( "#login_form" ).prepend(password_error);
  //    $('#'+current_form_id+' #unknow_password').text('Mot de passe incorrect');
       
       // alert('Mot de passe incorrect');

//$('#'+current_form_id+' #unknow_password').removeClass('hidden');

//$('#'+current_form_id+' #unknow_password').parent().addClass('has-error');
             
            }
 else if (data['activation_error']) {
  
        var subscribe_complete =     $('<h5 id="subscribe_ok" class="text-center alert alert-success center-block"  style="margin-bottom: 0px; width: 50%;">Ce compte n\'est pas encore activé, veuillez contacter votre administrateur.'/*, un lien d\'activation a été envoye à l\'adresse '+data['email']*/+'</h5>');
   
    subscribe_complete.insertAfter( $( "#login_advice" ) );
//alert('Ce compte n\'est pas encore activé, un lien d\'activation a été envoye à l\'adresse '+data['email']);

//$('#'+current_form_id+' #not_activated').text('Ce compte n\'est pas encore activé, un lien d\'activation a été envoye à l\'adresse '+data['email']);

//$('#'+current_form_id+' #not_activated').removeClass('hidden');

//$('#'+current_form_id+' #not_activated').parent().addClass('has-error');
             
            }
    
    else{
    
  //alert('ok')
       // $('#modal_login').modal('hide');
      
      window.location.replace(protocol+entry_host+"support");
         // similar behavior as an HTTP redirect
//window.location.replace("subscribe_complete.php");
        
    }
    
 $("html, body").animate({ scrollTop: $( ".section-padding" ).offset().top-20  }, "slow");
}
    
    }

    function benchmark(id_element){
        
   
        
 
    $.post(
    protocol+host+"/src/Controller/retrieve.php", // Le fichier cible côté serveur.
    {
       
        id_element : id_element
    },
    backFromServer, // Nous renseignons uniquement le nom de la fonction de retour.
    'json' // Format des données reçues.
);
    
function backFromServer(data){
    
  console.log(data);  
  
 

}
    
    }


});

