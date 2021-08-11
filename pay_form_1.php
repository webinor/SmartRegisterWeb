
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
    <label for="lname">Votre Prenom</label>
    <input type="text" class="form-control lname must_be_validated" placeholder="Votre Prenom" value="">
    <span id="unknow_user" class="help-block hidden "><?="Prenom incorrect"?></span>
  </div>
            
              <div class="form-group">
    <label for="exampleInputEmail1">Votre numero de telephone</label>
    <input type="number" class="form-control phone must_be_validated" placeholder="Votre numero de telephone" value="650910717">
    <span id="unknow_user" class="help-block hidden "><?=CONTACT_WARNING?></span>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Montant</label>
    <select name="momoamount" class="form-control momo-PrepaidAccountAmount must_be_validated" autocomplete="off" autocorrect="off">
<option value="">Selectionner un forfait</option>
<option value="Professionnel:1500:1">1 Mois à 1500 FCFA</option>
<option value="Professionnel:3000:3">3 Mois à 3000 FCFA</option>
<option value="Professionnel:5000:10">10 Mois à 5000 FCFA</option>
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
    <label for="lname">Votre Prenom</label>
    <input type="text" class="form-control lname must_be_validated" placeholder="Votre Prenom" value="">
    <span id="unknow_user" class="help-block hidden "><?="Prenom incorrect"?></span>
  </div>
            
              <div class="form-group">
    <label for="exampleInputEmail1">Votre numero de telephone</label>
    <input type="number" class="form-control phone must_be_validated" placeholder="Votre numero de telephone" value="650910717">
    <span id="unknow_user" class="help-block hidden "><?=CONTACT_WARNING?></span>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Montant</label>
    <select name="momoamount" class="form-control momo-PrepaidAccountAmount must_be_validated" autocomplete="off" autocorrect="off">
<option value="">Selectionner un forfait</option>
<option value="Premium:1000:1">1 Mois à 1000 FCFA</option>
<option value="Premium:2000:3">3 Mois à 2000 FCFA</option>
<option value="Premium:3500:10">10 Mois à 3500 FCFA</option>
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
    <label for="lname">Votre Prenom</label>
    <input type="text" class="form-control lname must_be_validated" placeholder="Votre Prenom" value="">
    <span id="unknow_user" class="help-block hidden "><?="Prenom incorrect"?></span>
  </div>
            
              <div class="form-group">
    <label for="exampleInputEmail1">Votre numero de telephone</label>
    <input type="number" class="form-control phone must_be_validated" placeholder="Votre numero de telephone" value="650910717">
    <span id="unknow_user" class="help-block hidden "><?=CONTACT_WARNING?></span>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Montant</label>
    <select name="momoamount" class="form-control momo-PrepaidAccountAmount must_be_validated" autocomplete="off" autocorrect="off">
<option value="">Selectionner un forfait</option>
<option value="Basique:500:1">1 Mois à 500 FCFA</option>
<option value="Basique:1000:3">3 Mois à 1000 FCFA</option>
<option value="Basique:2000:10">10 Mois à 2000 FCFA</option>
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

