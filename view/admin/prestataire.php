
<form method="post" action="<?=BASE_URL?>/Admin/prestataire">
    <table class="table table-bordered">
        <tr class="table-themed">
            <td>Nom</td>
            <td>Mail</td>
            <td>Tel</td>
            <td>Adresse</td>
            <td>Code postal</td>
            <td>Ville</td>
            <td>Modifier</td>
            <td>Supprimer</td>
        </tr>
        <?php
        if(isset($prestataires)){
            foreach ($prestataires as $p ): ?>
                <tr>
                    <td><?= $p->NOM?></td>
                    <td><?= $p->MAIL?></td>
                    <td><?= $p->TEL?></td>
                    <td><?= $p->ADRESSE?></td>
                    <td><?= $p->CP?></td>
                    <td><?= $p->VILLE?></td>
                    <td>
                        <div class = "inscription-button">
                            <center><button class="fill" type="submit" formaction="<?=BASE_URL?>/Admin/modifPrestataire/<?= $p->ID?>">Modifier</button></center>
                        </div>
                    </td>

                    <td>
                        <center><label class="switch">
                                <input type="checkbox" name="cf[]" value="id = <?=$p->ID?>">
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
    <button type="submit" class="btn draw-border btn-default dropdown-toggle">Supprimer un prestataire</button>
</form>
<a href="<?=BASE_URL?>/Admin/creerprestataire"><button class="btn draw-border btn-default dropdown-toggle">Ajouter un prestataire</button></a>