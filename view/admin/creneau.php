<form method="post" action="<?=BASE_URL?>/Admin/creneau">
    <table class="table table-bordered">
        <tr class="table-themed">
            <td>Id de l'activité</td>
            <td>Id du creneau</td>
            <td>Date</td>
            <td>Heure </td>
            <td>Effectif</td>
            <td>Statut</td>
            <td>Modifier</td>
            <td>Supprimer</td>
        </tr>
        <?php
        if(isset($creneaux)){
            foreach ($creneaux as $c ): ?>
                <tr>
                    <td><?= $c->ID_ACTIVITE?></td>
                    <td><?= $c->NUM_CRENEAU?></td>
                    <td><?= $c->DATE_CRENEAU?></td>
                    <td><?= $c->HEURE_CRENEAU?></td>
                    <td><?= $c->EFFECTIF_CRENEAU?></td>
                    <td><?= $c->STATUT?></td>
                    <td>
                        <div class = "inscription-button">
                            <center><button class="fill" type="submit" formaction="<?=BASE_URL?>/Admin/modifcreneau/<?= $c->NUM_CRENEAU?>">Modifier le creneau</button></center>
                        </div>
                    </td>
                    <td>
                        <center><label class="switch">
                                <input type="checkbox" name="cf[]" value="NUM_CRENEAU = <?=$c->NUM_CRENEAU?>">
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
<a href="<?=BASE_URL?>/Admin/creercreneau"><button class="btn draw-border btn-default dropdown-toggle">Ajouter un créneau (en dévelopement)</button></a>
