<?php if(isset($adherents)): ?>
<form action="<?= BASE_URL?>/Admin/adherent" method="POST">
    <table class="table table-bordered">
        <tr class="table-themed">
            <td>Nom</td>
            <td>Prenom</td>
            <td>id adherent</td>
            <td>Pseudo</td>
            <td>Grade</td>
            <td>Genre</td>
            <td>Matricule</td>
            <td>Adresse Email</td>
            <td>Telephone</td>
            <td>Modifier</td>
            <td>Supprimer</td>

        </tr>
        <?php foreach ($adherents as $f) : ?>
            <tr>
                <td><?=$f->NOM?></td>
                <td><?=$f->PRENOM?></td>
                <td><?=$f->ID_ADHERENT?></td>
                <td><?=$f->PSEUDO?></td>
                <td><?=$f->GRADE?></td>
                <td><?=$f->GENRE?></td>
                <td><?=$f->MATRICULE?></td>
                <td><?=$f->ADRESSE_MAIL?></td>
                <td><?=$f->TELEPHONE?></td>

                   <td>
                    <div class = "inscription-button">
                       <center><button type="submit" class="fill" id='submit' value="Modifier l'adhérent" formaction="<?= BASE_URL?>/Admin/modifAdherent/<?= $f->ID_ADHERENT ?>">Modifier </button></center>
                    </div>
                </td>
                <td>

                    <center><label class="switch">
                        <input type="checkbox" name="cf[]" value="ID_ADHERENT = <?=$f->ID_ADHERENT?>">
                        <div>
                            <span></span>
                        </div>
                    </label></center>

                </td>
            </tr>
        <?php endforeach; ?>
    </table>
        <button type="submit" class="btn draw-border" id='submit' value="supprimer">Supprimer</button>
</form>
    <a href="<?= BASE_URL?>/Admin/creeradherent"><button type="submit" class="btn draw-border" id='submit' value="AjoutUtilisateur">Ajouter</button></a>

<?php endif ?>
