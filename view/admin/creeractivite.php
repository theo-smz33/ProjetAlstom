<div class="col-lg-12">
    <h1>Creation d'une activité</h1>
</div>
<form action="<?= BASE_URL ?>/Admin/creeractivite" method="POST">

        <div class="container">

            <div class="col-lg-6 ">
                <div class="form__group field">
                    <input type="text" class="form__field" placeholder="Nom" name="nomleader" value="<?= Session::get("NOM") ?>" disabled/>
                    <label class="form__label">Nom du leader :</label>
                </div>
            </div>

            <div class="col-lg-6">
                <div class = "form__group field">
                    <input type="input" class="form__field" placeholder="Prenom" name="prenomleader" value="<?= Session::get("PRENOM") ?>" disabled>
                    <label class="form__label">Prénom du leader :</label>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="form__group field">
                    <input type="input" class="form__field" placeholder="Téléphone" value="<?= Session::get("TELEPHONE") ?>" name="tel" required />
                    <label for="name" class="form__label">Numéro de téléphone :</label>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="form__group field">
                    <input type="input" class="form__field" placeholder="Nom de l'activité" name="activite" required />
                    <label for="name" class="form__label">Nom de l'activité :</label>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="form__group field">
                    <input type="input" class="form__field" placeholder="Adresse" name="adresse" id='adresse' required />
                    <label for="name" class="form__label">Adresse</label>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="form__group field">
                    <input type="input" class="form__field" placeholder="Code postal" name="postal" id='postal' required />
                    <label for="name" class="form__label">Code postal</label>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="form__group field">
                    <input type="input" class="form__field" placeholder="Ville" name="ville" id='ville' required />
                    <label for="name" class="form__label">Ville</label>
               </div>
            </div>

            <div class="col-lg-6">
                <div class="form__group field">
                    <input type="date" class="form__field" placeholder="Date" name="date" id='date' required />
                    <label for="name" class="form__label">Date de l'activité :</label>
                </div>
            </div>


            <div class="col-lg-6">
                <div class="form__group field">
                    <input type="number" class="form__field" placeholder="Participant max" name="nbpart" id='nbpart' required />
                    <label for="name" class="form__label">Nombre de participant maximum :</label>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="form__group field">
                    <input type="number" class="form__field" placeholder="Age minimum" name="agemin" id='agemin' required />
                    <label for="name" class="form__label">Age minimum :</label>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="form__group field">
                    <textarea type="input" class="form__field" placeholder="Description" name="description" rows=3"  required /></textarea>
                    <label for="name" class="form__label">Description</label>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="form__group field">
                    <label for="text" class="">Méthode de paiement :</label>
                    <div>
                        <input type="radio" id="masculin" name="paiement" value="T">
                        <label for="masculin">Tarif par personne</label>
                    </div>
                    <div>
                        <input type="radio" id="feminin" name="paiement" value="F">
                        <label for="masculin">Forfait</label>
                    </div>
                    <input type="number" class="form__field" placeholder="Montant" name="montant" id='montant' required />
                </div>
            </div>

            <div class="col-lg-6">
                <div class="form__group field">
                    <label for="text" class="">Ouvert extérieur :</label>
                    <div>
                        <input type="radio" id="masculin" name="ouvert" value="O">
                        <label for="masculin">Oui</label>
                    </div>
                    <div>
                        <input type="radio" id="feminin" name="ouvert" value="N">
                        <label for="masculin">Non</label>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="form__group field">
                    <input type="input" class="form__field" placeholder="Prestataire" name="perstataire"/>
                    <label for="name" class="form__label">Prestataire</label>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="form__group field">
                    <textarea type="input" class="form__field" placeholder="Information" name="infosupp" rows=3"   /></textarea>
                    <label for="name" class="form__label">Information supplémentaire</label>
                </div>
            </div>

            <div class="col-lg-6">
                <div class = "inscription-button">
                    <button type="submit" class="btn draw-border" id='submit' >Ajouter</button>
                    <button type="reset" class="btn draw-border" id='submit' value="annuler" >Annuler</button>
                </div>
            </div>
        </div>
</form>
