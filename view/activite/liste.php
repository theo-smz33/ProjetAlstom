<form method="post">
<table class="table table-bordered">
        <tr class="table-themed">
            <td>Nom</td>
            <td>Lieu</td>
            <td>Nombre participant max</td>
            <td>Tarif unitaire</td>
            <td>Information</td>
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
                    <center><button class="fill" type="submit" formaction="<?=BASE_URL?>/Activite/details/<?= $a->ID_ACTIVITE?>">Détail</button></center>
                    <!-- <center><button type="submit" class="button" value="">Détail</button></center> -->
                </td>
            </tr>
        <?php endforeach;
    }
    ?>
</table>
</form>