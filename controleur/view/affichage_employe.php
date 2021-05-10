<?php

include_once(__DIR__ . "/../model/Employe.php");
include_once(__DIR__ . "/affichage_commun.php");

function afficherResultRechercheEmployes(Employe $employeTrouve)
{
    afficherHeadHtml(__DIR__ . "/../css/style.css");
?>

    <body>
        <table>
            <tr>
                <th>NOEMP</th>
                <th>NOM</th>
            </tr>
            <tr>
                <td><?php echo $employeTrouve->getNoemp(); ?></td>
                <td><?php echo $employeTrouve->getNom(); ?></td>
            </tr>
        </table>
    </body>

    </html>
<?php
}

function afficherFormRechercheParReference()
{
    afficherHeadHtml(__DIR__ . "/../css/style.css");
?>

    <body>
        <form action="" method="POST">
            <label for="noemp">Saisissez votre référence :</label>
            <input type="text" name="noemp">
            <input type="submit" value="Search">
        </form>
    </body>

    </html>
<?php
}
?>