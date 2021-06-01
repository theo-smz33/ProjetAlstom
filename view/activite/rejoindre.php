<input class="btn draw-border" onclick="copycat()" id='button' value="ajouter un membre" type="button">
<input class="btn draw-border" onclick="supprimer()" id='button' value="supprimer les membres selectionnés" type="button">

<div id="NouveauMembre">
    <div class="copycat">
        <table id="Tableau">
            <tr>
                <td>Nom</td>
                <td>Prénom</td>
                <td>Age</td>
                <td>N° de téléphone</td>
                <td>Situation du membre</td>
                <td>catégorie</td>
                <td>supprimer</td></br>
            </tr>
            <tr>
                <td><input id="Nom" class="inputrejoindre" type="text"></td>
                <td><input id="Prénom" class="inputrejoindre" type="text"></td>
                <td><input id="Age" class="inputrejoindre" type="text"></td>
                <td><input id="N° de téléphone" class="inputrejoindre" type="text"></td>
                <td><label for="personselect"></label>
                    <select name="personselect" class="inputrejoindre" id="personselect">
                        <option value="membre">Membre de l'organisation</option>
                        <option value="externe">Externe à l'organisation</option>
                        <option value="famille">Famille d'un membre de l'organisation</option>
                    </select>
                </td>
                <td><label for="persontype"></label>
                    <select name="persontype" class="inputrejoindre" id="persontype">
                        <option value="Adulte">Adulte</option>
                        <option value="Enfant">Enfant</option>
                    </select>
                </td>
                <td>
                    <center><label class="switch">
                            <input type="checkbox" name="cf[]" value="">
                            <div>
                                <span></span>
                            </div>
                        </label></center>
                </td></br>
            </tr>
        </table>
    </div>
</div>
</br>
<input class="btn draw-border" onclick="" id='button' value="Valider l'inscription" type="button">
<script type="text/javascript"  src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="../webroot/js/script/duplicate.js"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</body>

