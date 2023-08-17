<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Facture</title>
</head>
<body>

    <?php
        $date = date("d/m/Y");

        $tableau_client = array(
            "nom" => "Nom: CALIENTE",
            "adresse" => "Adresse: 7 rue du php 94500 champigny",
            "TVA" => "Numéro de TVA: FR12314425789",
            "tel" => "Tel: 06.45.38.54.82"
        );
    ?>
    <img src="assets/darty.png" alt="logo" width = "250rem">

        <h2 class = "nb_facture">Facture N°07</h2>


    <div class = "vendeur">       
        <h1>DARTY GRAND OUEST</h1>
        <h3>Adresse: 92, avenue de wagram, 75017 paris</h3>  
        <h3>Siren: 399 930 593</h3>
        <h3>Tel: 0.564.895.954</h3>

    </div>

    <h3 class = "date">Date de la facture : <?php echo($date); ?></h3>

    <div class ="client">
        <h2>Client:</h2>
        <?php
            foreach($tableau_client as $client)
            {
                echo("<h3>".$client."</h3>");
            }
        ?>  
    </div>

    <table bgcolor="black">
        <tr bgcolor="grey">
            <th>Référence</th>
            <th>Description</th>
            <th>Prix Unitaire</th>
            <th>Quantité</th>
            <th>Total</th>
        </tr>

        <?php

            $tableau_prod = array(
                array(
                    "des" => "Apareil photo",
                    "ref" => "AP1578",
                    "pu" => 250
                ),
                array(
                    "des" => "Casque audio",
                    "ref" => "CA4725",
                    "pu" => 100
                ),
                array(
                    "des" => "TV",
                    "ref" => "OLED8561",
                    "pu" => 950
                ),
                array(
                    "des" => "Aspirateur",
                    "ref" => "AS1722",
                    "pu" => 170
                ),
                array(
                    "des" => "écouteur",
                    "ref" => "EC9632",
                    "pu" => 200
                )
            );

            $total = 0;
            foreach($tableau_prod as $product)
            {
                $q = mt_rand(1,20);

                echo("
                <tr bgcolor=\"lightgrey\" align=\"center\">
                    <td>".$product["ref"]."</td>
                    <td>".$product["des"]."</td>
                    <td>".$product["pu"]."€</td>
                    <td>".$q."</td>
                    <td>".$product["pu"]*$q."€</td>
                </tr>
                ");
                $total += ($product["pu"]*$q);
            }
            $tva = 0.2*$total;
        ?>
    </table>

    <div class = "prix">
        <p>Taux de TVA: 20%</p>
        <p>Prix HT: <?php echo($total); ?>€</p>
        <p>TVA: <?php echo($tva); ?>€</p>
        <p>Prix TTC: <?php echo($total + $tva); ?>€</p>
    </div>

    <h5>La facture est payable sous 30 jours.
Tout règlement effectué après expiration du délai donnera lieu, à titre de pénalité de retard, à
l'application d'un intérêt égal à celui appliqué par la Banque Centrale Européenne à son opération de
refinancement la plus récente, majoré de 10 points de pourcentage, ainsi qu'à une indemnité forfaitaire
pour frais de recouvrement d'un montant de 40 Euros.
Les pénalités de retard sont exigibles sans qu'un rappel soit nécessaire.</h5>
</body>
</html>