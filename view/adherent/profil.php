<form method="post" action="<?=BASE_URL?>/Adherent/profil/">
    <div class="col-lg-12">
        <h1>Modification du profil</h1>
    </div>

    <div class="col-lg-6">
        <div class="form__group field">
            <input type="input" class="form__field" value="<?= Session::get("NOM") ?>" name="nom" id='nom' />
            <label for="text" class="form__label">Nom :</label>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="form__group field">
            <input type="input" class="form__field" value="<?= Session::get("PRENOM") ?>" name="prenom" id='prenom'  />
            <label for="text" class="form__label">Prénom :</label>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="form__group field">
            <input type="input" class="form__field" value="<?= Session::get('PSEUDO') ?>" name="pseudo" id='pseudo' />
            <label for="text" class="form__label">Pseudo :</label>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="form__group field">
            <input type="email" class="form__field" value="<?= Session::get("ADRESSE_MAIL") ?>" name="email" id='email' />
            <label for="text" class="form__label">email :</label>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="form__group field">
            <input type="input" class="form__field" value="<?= Session::get("TELEPHONE") ?>" name="telephone" id='telephone'  />
            <label for="text" class="form__label">Téléphone :</label>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="form__group field">
            <input type="input" class="form__field" value="<?= Session::get("MATRICULE") ?>" name="matricule" id='matricule'  />
            <label for="text" class="form__label">Matricule :</label>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="form__group field">
            <label for="text" class="">Genre :</label>
            <div>
                <input type="radio" id="masculin" name="genre" value="M" <?php echo (Session::get('GENRE') == 'M') ? "checked" : ""; ?>>
                <label for="masculin">Masculin</label>
            </div>
            <div>
                <input type="radio" id="feminin" name="genre" value="F" <?php echo (Session::get('GENRE') == 'F') ? "checked" : ""; ?>>
                <label for="masculin">Féminin</label>
            </div>
            <div>
                <input type="radio" id="autre" name="genre" value="O" <?php echo (Session::get('GENRE') == 'O') ? "checked" : ""; ?>>
                <label for="masculin">Autre</label>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class = "form__group field">
            <button class="fill" type="submit" formaction="<?=BASE_URL?>Adherent/resetmpd/">Réinitialiser</button>
            <label for="text" class="form__label">Modifier le mot de passe :</label>
        </div>
    </div>

    <div class="col-lg-6">
        <div class = "inscription-button">
            <button type="submit" class="btn draw-border" id='submit' value="Modifier le profil" >Modifier votre profil</button>
        </div
        <div class = "inscription-button">
            <button type="submit" class="btn draw-border" formaction="<?=BASE_URL?>" value="Annuler" >Annuler </button>
        </div>
    </div>
</form>
