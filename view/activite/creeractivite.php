<div class="col-lg-12">
    <h1>Creation d'une activité</h1>
</div>
<form action="<?= BASE_URL ?>/Activite/creer" method="POST">
    <div class="container">

        <div class="row">
            <div class="col-lg-6 ">
                <div class="form__group field">
                    <input type="text" class="form__field"  name="nomleader" value="<?= Session::get("NOM") ?>" disabled/>
                    <label class="form__label">Nom du leader :</label>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form__group field">
                    <input type="input" class="form__field" name="postal" id='postal' required />
                    <label for="name" class="form__label">Code postal</label>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class = "form__group field">
                    <input type="input" class="form__field" name="prenomleader" value="<?= Session::get("PRENOM") ?>" disabled>
                    <label class="form__label">Prénom du leader :</label>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form__group field">
                    <input type="number" class="form__field" name="postal" id='postal' required />
                    <label for="name" class="form__label">Nombre de participant maximum :</label>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="form__group field">
                    <input type="input" class="form__field" value="<?= Session::get("TELEPHONE") ?>" name="tel" required />
                    <label for="name" class="form__label">Numéro de téléphone :</label>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="form__group field">
                    <input type="input" class="form__field"  name="activite" required />
                    <label for="name" class="form__label">Nom de l'activité :</label>
                </div>
            </div>
            <div  class="col-lg-6">
                <div class="form__group field">
                    <input type="number" class="form__field"  name="montant" id='montant' required />
                    <label for="name" class="form__label">Montant de la prestation :</label>
                    <div class="form__group field price">
                        <input type="number" class="form__field"  name="montantadulte" id='montantadulte' required />
                        <label for="name" class="form__label">Prix Adulte :</label>
                    </div>
                    <div class="form__group field price">
                        <input type="number" class="form__field"  name="montantenfant" id='montantenfant' required />
                        <label for="name" class="form__label">Prix Enfant :</label>
                    </div>
                </div>
        </div>



        <div class="row">
            <div class="col-lg-6">
                <div class="form__group field">
                    <textarea type="input" class="form__field" name="description" rows="4"  required /></textarea>
                    <label for="name" class="form__label">Description de l'activité :</label>
                </div>
            </div>


                <!-- --------------------------------------------------------------------------------------- -->


            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="form__group field">
                    <input type="date" class="form__field"  name="adresse" id='adresse' required />
                    <label for="name" class="form__label" type="date" name="trip-start">Date de l'activité :</label>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form__group field">
                    <input type="number" class="form__field"  name="agemin" id='agemin' required />
                    <label for="name" class="form__label">Age minimum :</label>
                </div>

                <div class="form__group field">
                    <input type="number" class="form__field"  name="agemax" id='agemax' required />
                    <label for="name" class="form__label">Age maximum :</label>
                </div>
            </div>
        </div>

                <div class="col-lg-6">
                    <div class="form__group field">
                        <input type="input" class="form__field"  name="adresse" id='adresse' required />
                        <label for="name" class="form__label">Adresse</label>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form__group field">
                        <textarea type="input" class="form__field" name="description" rows=3"  required /></textarea>
                        <label for="name" class="form__label">Information supplémentaire</label>
                    </div>
                </div>

        <div class="row">

                <div class="col-lg-6">
                    <br>

                    <div class = "inscription-button">
                        <button type="submit" class="btn draw-border" id='submit' value="Soumettre l'activité" >Soumettre </button>
                        <button type="reset" class="btn draw-border" id='submit' value="annuler" > Annuler</button>
                    </div>
                </div>
        </div>
    </div>
</form>