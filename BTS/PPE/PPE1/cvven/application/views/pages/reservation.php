
  <?php echo validation_errors(); ?>
  <?php echo form_open('reservation/reserver') ?>
<div class="container">

  <div class="form-group ">
    <form>
</br></br>

</br></br>
</br></br>

          <label>Date d'arrivée</label>
          <input type="text" class="form-control" placeholder="jj/mm/aaaa" name="datearrivee">

          <label>Date départ</label>
          <input type="text" class="form-control" placeholder="jj/mm/aaaa" name="datedepart">

          <label >Nombre de personnes</label>
          <input type="text" class="form-control"  placeholder="Nombre de personnes" name="nbpersonne">

          <label >Menage</label>

          <div class="radio">
                <label><input type="radio" name="menage" checked>Oui</label>
          </div>
           <div class="radio">
                <label><input type="radio" name="menage" >Non</label>
           </div>
          <label>Restauration</label>
          <div class="radio">
             <label><input type="radio" name="restauration" checked>Oui</label>
           </div>
           <div class="radio">
             <label><input type="radio" name="restauration" >Non</label>
           </div>
          <label>Activités</label>
          <div class="radio">
             <label><input type="radio" name="activites" checked>Oui</label>
           </div>
           <div class="radio">
             <label><input type="radio" name="activites" >Non</label>
           </div>
          <div class="form-group ">
              <input type="submit" name="submit" value="Enregistrer la reservation" />
          </div>
</form>
</div>
</div>
