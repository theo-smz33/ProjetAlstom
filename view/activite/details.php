<form method="post">
    <table class="table table-bordered">
        <tr class="table-themed">
            <td>Activité</td>
            <td>Description</td>
            <td>Date de l'activité</td>
            <td>Adresse</td>
            <td>Code Postal</td>
            <td>Ville</td>
            <td>Nombre participant max</td>
            <td>Age Minimum</td>
            <td>Tarif adulte</td>
            <td>Tarif enfant</td>
            <td>Tarif personnes exterieures</td>
            <td>Indication participant</td>
            <td>Informations importantes</td>
            <td>Rejoindre l'activité</td>
        </tr>
                <tr>
                    <td><?= $activite->NOM?></td>
                    <td><?= $activite->DETAIL?></td>
                    <td><?= $activite->DATE_ACTIVITE?></td>
                    <td><?= $activite->ADRESSE?></td>
                    <td><?= $activite->CP?></td>
                    <td><?= $activite->VILLE?></td>
                    <td><?= $activite->NB_PART_MAX?></td>
                    <td><?= $activite->AGE_MINIMUM?></td>
                    <td><?= $activite->PRIX_ADULTE?></td>
                    <td><?= $activite->PRIX_ENFANT?></td>
                    <td><?= $activite->PRIX_EXT?></td>
                    <td><?= $activite->INDICATION_PARTICIPANT?></td>
                    <td><?= $activite->INFO_IMPORTANT_PARTICIPANT?></td>
                    <td>
                        <center><button class="fill" type="submit" formaction="<?=BASE_URL?>/Activite/rejoindre">Rejoindre</button></center>
                        <!-- <center><button type="submit" class="button" value="">Détail</button></center> -->
                    </td>
                </tr>
    </table>
</form>