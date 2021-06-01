<form method="post" action="<?=BASE_URL?>/Z/creercreneau">
    <div class="col-lg-12">
        <h1>Creation d'un Créneau</h1>
    </div>
    <div class="col-lg-6">
        <div class="form__group field">
            <select type="number" class="form__field" placeholder="Effectif du créneau" name="id_activite" id="id_activite required >
                <option selected="selected">Sélectionner une activité </option>
            <?php
            if(isset($activites)){
                foreach ($activites as $a ): ?>
                    <option value="<?php echo $a->ID_ACTIVITE ?>"><?php echo $a->NOM; ?></option>
                <?php endforeach;
            }
            ?>
            </select>
            <label for="text" class="form__label">Pour l'activité suivante :</label>

        </div>
    </div>
    <div class="col-lg-6">
        <div class="form__group field">
            <input type="number" class="form__field" placeholder="Effectif pour le creneau" name="effectif" id="effetif" required />
            <label for="text" class="form__label">effectif :</label>

        </div>
    </div>
    <div class="col-lg-6">
        <div class="form__group field">
            <input type="date" class="form__field" placeholder="Date du Creneau" name="datecreneau" id="datecreneau" required />
            <label for="text" class="form__label">date du creneau :</label>

        </div>
    </div>
    <div class="col-lg-6">
        <div class="form__group field">
            <input type="time" class="form__field" placeholder="Heure du Creneau" name="heurecreneau" id="heurecreneau" required />
            <label for="text" class="form__label">heure du creneau :</label>

        </div>
    </div>

    <div class="col-lg-6">
        <br>
        <div class = "inscription-button">
            <button type="submit" class="btn draw-border" id='submit' value="crée" >Créer </button>
        </div>
    </div>

</form>
</div>