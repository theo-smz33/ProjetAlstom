<form method="post" action="<?=BASE_URL?>/Admin/modifcreneau/<?= $creneau->NUM_CRENEAU ?>">
    <div class="col-lg-12">
        <h1>modification d'un creneau</h1>
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
            <input type="date" class="form__field" value="<?= $creneau->DATE_CRENEAU ?>" name="datecreneau" id='datecreneau' required />
            <label for="text" class="form__label">date du creneau:</label>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="form__group field">
            <input type="number" class="form__field" value="<?= $creneau->HEURE_CRENEAU ?>" name="heurecreneau" id='heurecreneau' required />
            <label for="text" class="form__label">Heure du créneau:</label>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="form__group field">
            <input type="number" class="form__field" value="<?= $creneau->EFFECTIF_CRENEAU ?>" name=effectif" id='effectif' required />
            <label for="text" class="form__label">effectif :</label>
        </d</div>
    </div>

    <div class="col-lg-6">
        <div class="form__group field">
            <input type="input" class="form__field" value="<?= $creneau->STATUT ?>" name="statut" id='statut' required />
            <label for="text" class="form__label">Code postal :</label>
        </div>
    </div>

    <div class="col-lg-6">
        <br>
        <div class = "inscription-button">
            <button type="submit" class="btn draw-border" id='submit' value="modifier le préstataire" >Modifier le prestataire </button>
        </div>
    </div>

</form>
</div>