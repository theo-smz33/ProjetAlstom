<form method="post" action="<?=BASE_URL?>/Admin/creerprestataire">
    <div class="col-lg-12">
        <h1>Creation d'un nouveau prestataire</h1>
    </div>

    <div class="col-lg-6">
        <div class="form__group field">
            <input type="input" class="form__field" placeholder="Nom" name="nom" id='nom' required />
            <label for="text" class="form__label">Nom du prestataire:</label>
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
            <input type="input" class="form__field" placeholder="adresse" name="adresse" id='adresse' required />
            <label for="text" class="form__label">Adresse :</label>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="form__group field">
            <input type="input" class="form__field" placeholder="Code postal" name="cp" id='cp' required />
            <label for="text" class="form__label">Code postal :</label>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="form__group field">
            <input type="input" class="form__field" placeholder="Ville" name="ville" id='ville' required />
            <label for="text" class="form__label">Ville :</label>
        </div>
    </div>


    <div class="col-lg-6">
        <br>
        <div class = "inscription-button">
            <button type="submit" class="btn draw-border" id='submit' value="Ajouter le préstataire" >Créer </button>
        </div>
    </div>

</form>
</div>