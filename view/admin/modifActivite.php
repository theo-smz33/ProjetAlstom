<?php
    var_dump($activite);
    var_dump($leader);
?>
<div class="col-lg-12">
    <h1>Modification d'une activité</h1>
</div>
<form action="<?= BASE_URL ?>/Admin/modifActivite" method="POST">
    <div class="container">

        <div class="col-lg-6 ">
            <div class="form__group field">
                <input type="text" class="form__field"  name="nomleader" value="<?= $prestataire->nom ?>" />
                <label class="form__label">Nom du leader :</label>
            </div>
        </div>

        <div class="col-lg-6">
            <div class = "form__group field">
                <input type="input" class="form__field" name="prenomleader"  value="<?= $prestataire->mail?>" >
                <label class="form__label">Prénom du leader :</label>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form__group field">
                <input type="input" class="form__field" value="tel" value="<?= $prestataire->tel?>" name="tel"  />
                <label for="name" class="form__label">Numéro de téléphone :</label>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form__group field">
                <input type="input" class="form__field" value="<?= $prestataire->adresse?>" name="activite"  />
                <label for="name" class="form__label">Nom de l'activité :</label>
            </div>
     </div>

        <div class="col-lg-6">
            <br>
            <div class = "inscription-button">
                <button type="submit" class="btn draw-border" id='submit' value="Soumettre l'activité" >Modifier le prestataire </button>
            </div>
        </div>
    </div>
</form>