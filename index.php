<?php
/**
 * Created by PhpStorm.
 * User: Kevin
 * Date: 24/03/2017
 * Time: 17:27
 */
require 'inc/db.php';
require 'inc/header.php';
// On récupère tout le contenu de la table emntreprise
$reponseentreprise = $bdd->query('SELECT * FROM entreprise');
// On récupère tout le contenu de la table employe
$reponseemploye = $bdd->query('SELECT * FROM employe');

?>
    <div class="col-md-12" style="padding-top: 20px">
        <div class="header">
            <div class="col-md-2">
                <a href="google.fr"><img src="images/logo.png" class="img-responsive"></a>
            </div>
            <div class="col-md-8 align-center">
                <h1 style="text-align: center">Bulletin de paie</h1>
                <h4 style="text-align: center">Document à conserver sans limitation de durée</h4>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    <div class="col-md-12" style="padding-top: 20px;padding-bottom: 20px">
        <?php

        // On affiche chaque entrée une à une
        while ($donneesemploye = $reponseemploye->fetch()) {
            echo '<h1 class="col-md-12" style="text-align:center">' . $donneesemploye['Type'] . '&nbsp' . $donneesemploye['Nom'] . '&nbsp' . $donneesemploye['Prenom'] . '</h1>';
            echo '<h2 class="col-md-12" style="text-align:center">' . $donneesemploye['CP'] . '&nbsp' . $donneesemploye['Addresse'] . '</h2>';
            echo '<h3 class="col-md-12" style="text-align:center">' . $donneesemploye['Ville'] . '</h3>';

        }
        ?>
    </div>
    <div class="col-md-12" style="padding-top: 20px;padding-bottom: 20px;border: 2px solid black;">
        <div class="col-md-4" style="padding-top: 20px;padding-bottom: 20px;">
            <div class="bg-gris">
                <h4 style="    text-align: center;
    width: 100%;
    background: #b7b7b7;
    padding: 10px;">L'employeur</h4></div>
            <?php
            // On affiche chaque entrée une à une
            while ($donneesentreprise = $reponseentreprise->fetch()) {
                echo '<h4 class="col-md-12" style="text-align:center">' . 'Employeur:' . '&nbsp' . $donneesentreprise['Employeur'] . '<br>' . 'Adresse :' . '&nbsp' . $donneesentreprise['Adresse'] . '<br>' . 'Ville :' . '&nbsp' . $donneesentreprise['Ville'] . '</h1>';
                echo '<h4 class="col-md-12" style="text-align:center">' . 'SIRET:' . '&nbsp' . $donneesentreprise['SIRET'] . '</h4>';
                echo '<h4 class="col-md-12" style="text-align:center">' . 'Code Naf:' . '&nbsp' . $donneesentreprise['CODENAF'] . '</h4>';
                echo '<h4 class="col-md-12" style="text-align:center">' . 'Ursaff :' . '&nbsp' . $donneesentreprise['URSAFF'] . '</h4>';
            }
            ?>
        </div>
        <div class="col-md-4" style="padding-top: 20px;padding-bottom: 20px;">
            <div class="bg-gris">
                <h4 style="    text-align: center;
    width: 100%;
    background: #b7b7b7;
    padding: 10px;">Le salarie</h4>
            </div>
            <?php
            $reponseemploye = $bdd->query('SELECT * FROM employe');
            // On affiche chaque entrée une à une
            while ($donneesemploye = $reponseemploye->fetch()) {
                echo '<h4 class="col-md-12" style="text-align:center">' . 'Prenom :' . '&nbsp' . $donneesemploye['Prenom'] . '<br>' . 'Nom :' . '&nbsp' . $donneesemploye['Nom'] . '<br>' . 'Code postal :' . '&nbsp' . $donneesemploye['CP'] . '<br>' . 'Adresse:' . '&nbsp' . $donneesemploye['Addresse'] . '</h1>';
                echo '<h4 class="col-md-12" style="text-align:center">' . 'Ville :' . '&nbsp' . $donneesemploye['Ville'] . '</h4>';
                echo '<h4 class="col-md-12" style="text-align:center">' . 'Numéro sécurité sociale:' . '&nbsp' . $donneesemploye['Numsecu'] . '</h4>';
                echo '<h4 class="col-md-12" style="text-align:center">' . 'Emploie Occupé:' . '&nbsp' . $donneesemploye['Emploie'] . '</h4>';
            }
            ?>
        </div>
        <div class="col-md-4" style="padding-top: 20px;padding-bottom: 20px;">
            <div class="bg-gris">
                <h4 style="    text-align: center;
    width: 100%;
    background: #b7b7b7;
    padding: 10px;">Déclaration prise en compte</h4>
            </div>
            <?php
            $reponsefeuille = $bdd->query('SELECT * FROM feuille');
            // On affiche chaque entrée une à une
            while ($donneesfeuille = $reponsefeuille->fetch()) {
                echo '<h4 class="col-md-12" style="text-align:center">' . 'Numéro de feuille :' . '&nbsp' . $donneesfeuille['NumFeuille'] . '<br>' . 'Base :' . '&nbsp' . $donneesfeuille['Base'] . '<br>' . 'Salaire net :' . '&nbsp' . $donneesfeuille['SalaireNet'] . '<br>' . 'SalaireBrut:' . '&nbsp' . $donneesfeuille['Remunerationbrut'] . '</h1>';
                echo '<h4 class="col-md-12" style="text-align:center">' . 'Date de fiche :' . '&nbsp' . $donneesfeuille['Periode'] . '</h4>';
                echo '<h4 class="col-md-12" style="text-align:center">' . 'Nombre heure travaille:' . '&nbsp' . $donneesfeuille['Nombredheure'] . '</h4>';

            }
            ?>
        </div>
    </div>

    <div class="col-md-12" style="padding-top: 20px;padding-bottom: 20px;border: 2px solid black;">
        <div class="col-md-4" style="">
            <h5 style="text-align: center;">Cotisations et contributions</h5>
        </div>
        <div class="col-md-4">
            <h5 style="text-align: center">Base</h5>
        </div>
        <div class="col-md-4">
            <div class="col-md-6"><h5 style="text-align: center">Part Salariale</h5>
                <div class="col-md-6"><h6 style="text-align: center">Taux</h6></div>
                <div class="col-md-6"><h6 style="text-align: center">Montant</h6></div>
            </div>
            <div class="col-md-6"><h5 style="text-align: center">Part Employeur</h5>
                <div class="col-md-6"><h6 style="text-align: center">Taux</h6></div>
                <div class="col-md-6"><h6 style="text-align: center">Montant</h6></div>
            </div>
        </div>
        <div class="col-md-8"></div>
        <div class="col-md-4" style="padding-top: 20px;padding-bottom: 20px;border: 2px solid black;">
            <?php
            $reponsefeuille = $bdd->query('SELECT * FROM feuille');
            // On affiche chaque entrée une à une
            while ($donneesfeuille = $reponsefeuille->fetch()) {
                echo '<h4 class="col-md-12" style="text-align:center">' . 'Salaire net :' . '&nbsp' . $donneesfeuille['SalaireNet'] . '<br>' . 'SalaireBrut:' . '&nbsp' . $donneesfeuille['Remunerationbrut'] . '</h1>';
                echo '<h4 class="col-md-12" style="text-align:center">' . 'Somme à verser :' . '&nbsp' . $donneesfeuille['SalaireaVerser'] . '</h4>';
                echo '<h4 class="col-md-12" style="text-align:center">' . 'Net Imposable:' . '&nbsp' . $donneesfeuille['NetImposable'] . '</h4>';

            }
            ?>
        </div>
    </div>
<?php include 'inc/footer.php';
$reponseemploye->closeCursor(); ?>