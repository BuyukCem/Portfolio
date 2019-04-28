</br></br>


</br></br>
</br></br>
  <?php echo validation_errors(); ?>
  <?php echo form_open('reservation/reserver') ?>
<div class="container">

  <div class="form-group ">
    <form>
          <!--
          <label>Choix de la chambre</label>
            <select class=form-control name="logement">
                  <option value=1>logement 1  entrée, douche et wc, 2 chambres à 2 lits avec coin toilette et balcon.</option>
                  <option value=2>logement 2  15 chambres doubles : entrée, douche et wc, 1 lit double</option>
                  <option value=3>logement 2  8 chambres de 3 lits séparés par une cloison mobile avec coin toilette, wc, douche.</option>
                  <option value=4>logement 4 12 chambres de 4 lits séparés par une cloison mobile avec douche, wc et balcon.</option>
                  <option value=5>logement 5  1 logement adapté pour les personnes à mobilité réduite.</option>
            </select>
            -->
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
