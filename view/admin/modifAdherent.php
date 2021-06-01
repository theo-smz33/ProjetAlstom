<?php
#var_dump($adherent);
$adherent = $adherent[0];
?>
<form method="post" action="<?=BASE_URL?>/Admin/modifAdherent/<?= $adherent->ID_ADHERENT ?>">
    <div class="col-lg-12">
        <h1>Modification du profil</h1>
    </div>

    <div class="col-lg-6">
        <div class="form__group field">
            <input type="input" class="form__field" value="<?= $adherent->PSEUDO ?>" name="pseudo" id='pseudo' />
            <label for="text" class="form__label">Pseudo :</label>
        </div>
        </di</div>

    <div class="col-lg-6">
        <div class="form__group field">
            <input type="input" class="form__field" value="<?= $adherent->NOM ?>" name="nom" id='nom' />
            <label for="text" class="form__label">Nom :</label>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="form__group field">
            <input type="input" class="form__field" value="<?= $adherent->PRENOM ?>" name="prenom" id='prenom'  />
            <label for="text" class="form__label">Prénom :</label>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="form__group field">
            <input type="input" class="form__field" value="<?= $adherent->MATRICULE ?>" name="matricule" id='matricule'  />
            <label for="text" class="form__label">Matricule :</label>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="form__group field">
            <input type="input" class="form__field" value="<?= $adherent->TELEPHONE ?>" name="telephone" id='telephone'  />
            <label for="text" class="form__label">Téléphone :</label>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="form__group field">
            <input type="email" class="form__field" value="<?= $adherent->ADRESSE_MAIL ?>" name="email" id='email' />
            <label for="text" class="form__label">email :</label>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="form__group field">
            <label for="text" class="">Genre :</label>
            <div>
                <input type="radio" id="masculin" name="genre" value="M" <?php echo ($adherent->GENRE == 'M') ? "checked" : ""; ?>>
                <label for="masculin">Masculin</label>
            </div>
            <div>
                <input type="radio" id="feminin" name="genre" value="F" <?php echo ($adherent->GENRE == 'F') ? "checked" : ""; ?>>
                <label for="masculin">Féminin</label>
            </div>
            <div>
                <input type="radio" id="autre" name="genre" value="O" <?php echo ($adherent->GENRE == 'O') ? "checked" : ""; ?>>
                <label for="masculin">Autre</label>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="form__group field">
            <label for="text" class="">Grade :</label>
            <div>
                <input type="radio" id="grade" name="grade" value="A" <?php echo ($adherent->GRADE == 'A') ? "checked" : ""; ?>>
                <label for="masculin">Administateur</label>
            </div>
            <div>
                <input type="radio" id="grade" name="grade" value="L" <?php echo ($adherent->GRADE == 'L') ? "checked" : ""; ?>>
                <label for="masculin">Laeder</label>
            </div>
            <div>
                <input type="radio" id="autre" name="grade" value="M" <?php echo ($adherent->GRADE == 'M') ? "checked" : ""; ?>>
                <label for="masculin">Adherent</label>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="form__group field">
            <button type="submit" class="btn draw-border" formaction="<?=BASE_URL?>/Adherent/changepass">Réinitialiser </button>
            <label for="text" class="form__label" class="reinitpassword">Réinitialisation du mots de passe :</label>
        </div>
    </div>
    <div class="col-lg-6">
        <br>
        <div class = "inscription-button">
            <button type="submit" class="btn draw-border" id='submit'>Modifier le profil</button>
         </div
        <div class = "inscription-button">
            <button type="submit" class="btn draw-border" formaction="<?=BASE_URL?>" value="Annuler" >Annuler </button>
        </div>
    </div>

</form>
</div>

