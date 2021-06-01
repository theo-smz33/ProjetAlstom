<form method="post" action="<?=BASE_URL?>/Admin/creeradherent">
    <div class="col-lg-12">
        <h1>Creation d'un nouveau compte utilisateur</h1>
    </div>

    <div class="col-lg-6">
        <div class="form__group field">
            <input type="input" class="form__field" placeholder="Nom" name="nom" id="nom" required />
            <label for="text" class="form__label">Nom :</label>

        </div>
    </div>

    <div class="col-lg-6">
        <div class="form__group field">
            <input type="input" class="form__field" placeholder="Pseudo" name="pseudo" id='pseudo' required />
            <label for="text" class="form__label">Pseudo :</label>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="form__group field">
            <input type="input" class="form__field" placeholder="Prenom" name="prenom" id='prenom' required />
            <label for="text" class="form__label">Prénom :</label>
        </div>
    </div>


    <div class="col-lg-6">
        <div class="form__group field">
            <input type="password" class="form__field" placeholder="Password" name="password" id='password' required />
            <label for="text" class="form__label">Mot de passe :</label>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="form__group field">
            <input type="input" class="form__field" placeholder="Matricule" name="matricule" id='matricule' required />
            <label for="text" class="form__label">Matricule :</label>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="form__group field">
            <input type="password" class="form__field" placeholder="Passwordconf" name="passwordconf" id='passwordconf' required />
            <label for="text" class="form__label">Confirmer mot de passe :</label>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="form__group field">
            <input type="input" class="form__field" placeholder="Email" name="email" id='email' required />
            <label for="text" class="form__label">Adresse email :</label>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="form__group field">
            <input type="input" class="form__field" placeholder="Téléphone" name="telephone" id='telephone' required />
            <label for="text" class="form__label">Téléphone :</label>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="form__group field">
            <label for="text">Genre :</label>
            <div>
                <input type="radio" id="masculin" name="genre" value="H" checked>
                <label for="masculin">Masculin</label>
            </div>
            <div>
                <input type="radio" id="feminin" name="genre" value="F" checked>
                <label for="masculin">Féminin</label>
            </div>
            <div>
                <input type="radio" id="autre" name="genre" value="O" checked>
                <label for="masculin">Autre</label>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <br>
        <div class = "inscription-button">
            <button type="submit" class="btn draw-border" id='submit' value="Soumettre l'activité" >Créer </button>
        </div>
    </div>

</form>
</div>