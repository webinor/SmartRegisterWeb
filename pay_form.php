
<!-- Modal -->
<div class="modal fade" id="myModal_full" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" style="margin-top: 120px;" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Achat d'un code d'activation</h4>
        <h5 class="modal-title" id="myModalLabel">Vous recevrez votre code d'activation par sms</h5>
      </div>
      <div class="modal-body">
        <form>
  <div class="form-group">
    <label for="first_name">Votre Nom</label>
    <input type="text" class="form-control fname must_be_validated" placeholder="Votre Nom" value="">
    <span id="unknow_user" class="help-block hidden "><?="Nom incorrect"?></span>
    
  </div>
            
              <div class="form-group">
    <label for="lname">Votre Prénom</label>
    <input type="text" class="form-control lname must_be_validated" placeholder="Votre Prénom" value="">
    <span id="unknow_user" class="help-block hidden "><?="Prénom incorrect"?></span>
  </div>
            
              <div class="form-group">
    <label for="exampleInputEmail1">Votre numéro de téléphone ( MTN Mobile money )</label>
    <input type="number" class="form-control phone must_be_validated" placeholder="Votre numéro de téléphone" value="">
    <span id="unknow_user" class="help-block hidden "><?=CONTACT_WARNING?></span>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Montant</label>
    <select name="momoamount" class="form-control momo-PrepaidAccountAmount must_be_validated" autocomplete="off" autocorrect="off">
<option value="">Selectionner un des codes suivants</option>
<option value="Professionnel:1300:1">Code valide 1 Mois : 1299 FCFA</option>
<option value="Professionnel:2500:3">Code valide 3 Mois : 2499 FCFA</option>
<option value="Professionnel:5000:10">Code valide 10 Mois : 4999 FCFA</option>
</select>
    <span id="unknow_user" class="help-block hidden "><?= "Selectionnez un fotfait" ?></span>
  </div>
            <input type="hidden" name="amount" class="final_amount">
</form>
          <div>
              <img src="images/CM_MTNMOBILEMONEY.png" alt="MTN MOMO" width="50" height="50">
          </div>
          <div class=" col-sm-12 ">
        
    </div>
      </div>
      <div class="modal-footer">
          
        <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
        <button  type="button" class="btn btn-primary init_pay">Proceder au paiement</button>
        <div  class="center-block loader_pay" style=""></div>
      </div>
    </div>
  </div>
</div>



    <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="myModal_premium" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" style="margin-top: 120px;" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Achat d'un code d'activation</h4>
        <h5 class="modal-title" id="myModalLabel">Vous recevrez votre code d'activation par sms</h5>
      </div>
      <div class="modal-body">
     <form>
  <div class="form-group">
    <label for="first_name">Votre Nom</label>
    <input type="text" class="form-control fname must_be_validated" placeholder="Votre Nom" value="">
    <span id="unknow_user" class="help-block hidden "><?="Nom incorrect"?></span>
    
  </div>
            
              <div class="form-group">
    <label for="lname">Votre Prénom</label>
    <input type="text" class="form-control lname must_be_validated" placeholder="Votre Prénom" value="">
    <span id="unknow_user" class="help-block hidden "><?="Prénom incorrect"?></span>
  </div>
            
              <div class="form-group">
    <label for="exampleInputEmail1">Votre numéro de téléphone ( MTN Mobile money )</label>
    <input type="number" class="form-control phone must_be_validated" placeholder="Votre numéro de téléphone" value="">
    <span id="unknow_user" class="help-block hidden "><?=CONTACT_WARNING?></span>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Montant</label>
    <select name="momoamount" class="form-control momo-PrepaidAccountAmount must_be_validated" autocomplete="off" autocorrect="off">
<option value="">Selectionner un des codes suivants</option>
<option value="Premium:1000:1">Code valide 1 Mois : 999 FCFA</option>
<option value="Premium:2000:3">Code valide 3 Mois : 1999 FCFA</option>
<option value="Premium:3500:10">Code valide 10 Mois : 3499 FCFA</option>
</select>
    <span id="unknow_user" class="help-block hidden "><?= "Selectionnez un fotfait" ?></span>
  </div>
            <input type="hidden" name="amount" class="final_amount">
</form>
          <div>
              <img src="images/CM_MTNMOBILEMONEY.png" alt="MTN MOMO" width="50" height="50">
          </div>
          <div class=" col-sm-12 ">
        
    </div>
      </div>
      <div class="modal-footer">
          
        <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
        <button  type="button" class="btn btn-primary init_pay">Proceder au paiement</button>
        <div  class="center-block loader_pay" style=""></div>
      </div>
    </div>
  </div>
</div>


    <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="myModal_basik" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" style="margin-top: 120px;" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Achat d'un code d'activation</h4>
        <h5 class="modal-title" id="myModalLabel">Vous recevrez votre code d'activation par sms</h5>
      </div>
      <div class="modal-body">
        <form>
  <div class="form-group">
    <label for="first_name">Votre Nom</label>
    <input type="text" class="form-control fname must_be_validated" placeholder="Votre Nom" value="">
    <span id="unknow_user" class="help-block hidden "><?="Nom incorrect"?></span>
    
  </div>
            
              <div class="form-group">
    <label for="lname">Votre Prénom</label>
    <input type="text" class="form-control lname must_be_validated" placeholder="Votre Prénom" value="">
    <span id="unknow_user" class="help-block hidden "><?="Prénom incorrect"?></span>
  </div>
            
              <div class="form-group">
    <label for="exampleInputEmail1">Votre numéro de téléphone ( MTN Mobile money )</label>
    <input type="number" class="form-control phone must_be_validated" placeholder="Votre numéro de téléphone" value="">
    <span id="unknow_user" class="help-block hidden "><?=CONTACT_WARNING?></span>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Montant</label>
    <select name="momoamount" class="form-control momo-PrepaidAccountAmount must_be_validated" autocomplete="off" autocorrect="off">
<option value="">Selectionner un des codes suivants</option>
<option value="Basique:500:1">Code valide 1 Mois : 499 FCFA</option>
<option value="Basique:1000:3">Code valide 3 Mois : 999 FCFA</option>
<option value="Basique:2000:10">Code valide 10 Mois : 1999 FCFA</option>
</select>
    <span id="unknow_user" class="help-block hidden "><?= "Selectionnez un fotfait" ?></span>
  </div>
            <input type="hidden" name="amount" class="final_amount">
</form>
          <div>
              <img src="images/CM_MTNMOBILEMONEY.png" alt="MTN MOMO" width="50" height="50">
          </div>
          <div class=" col-sm-12 ">
        
    </div>
      </div>
      <div class="modal-footer">
          
        <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
        <button type="button" class="btn btn-primary init_pay">Proceder au paiement</button>
        <div  class="center-block loader_pay" style=""></div>
      </div>
    </div>
  </div>
</div>

