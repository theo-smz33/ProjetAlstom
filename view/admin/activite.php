<form method="post" action="<?=BASE_URL?>/Admin/activite">
    <table class="table table-bordered">
        <tr class="table-themed">
            <td>Nom</td>
            <td>Lieu</td>
            <td>Nombre participant max</td>
            <td>Tarif unitaire</td>
            <td>Modifier</td>
            <td>Valider l'activité</td>
            <td>Supprimer</td>
        </tr>
        <?php
        if(isset($activites)){
            foreach ($activites as $a ): ?>
                <tr>
                    <td><?= $a->NOM?></td>
                    <td><?= $a->VILLE?></td>
                    <td><?= $a->NB_PART_MAX?></td>
                    <td><?= $a->TARIF_UNIT?></td>
                    <td>
                        <div class = "inscription-button">
                            <center><button class="fill" type="submit" formaction="<?=BASE_URL?>/Admin/modifActivite/<?= $a->ID_ACTIVITE?>">Modifier l'activité</button></center>
                        </div>
                    </td>
                    <td>
                        <div class = "inscription-button">
                            <center><button class="fill" type="submit" formaction="<?=BASE_URL?>/Admin/validActivite/<?= $a->ID_ACTIVITE?>">Valider l'activité</button></center>
                        </div>
                    </td>
                    <td>
                        <center><label class="switch">
                            <input type="checkbox" name="cf[]" value="ID_ACTIVITE = <?=$a->ID_ACTIVITE?>">
                            <div>
                                <span></span>
                            </div>
                        </label></center>
                    </td>
                </tr>
            <?php endforeach;
        }
        ?>
    </table>
    <button type="submit" class="btn draw-border btn-default dropdown-toggle">Supprimer une activiter</button>
</form>
<a href="<?=BASE_URL?>/Admin/creeractivite"><button class="btn draw-border btn-default dropdown-toggle">Ajouter une activiter</button></a>
