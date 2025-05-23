<?php include '../header.php'; ?>
<head>
    <title> PHP3 Variabelen </title>
    <link rel="stylesheet" href="../style.css">
    <style>
        table, th, td {
            border:1px solid black;
        }
    </style>
</head>

<body class="homebody">
<?php
    $naam = "Rayan";
    $leeftijd = 17;

    echo "Hallo, mijn naam is $naam en ik ben $leeftijd jaar oud.";

    $getal1 = 8;
    $getal2 = 4;

    $som = $getal1 + $getal2;
    $verschil = $getal1 - $getal2;
    $product = $getal1 * $getal2;
    $quotient = $getal1 / $getal2;
?>
    <table style="width:50%">
        <tr>
            <th>Bewerking</th>
            <th>Resultaat</th>
        </tr>
        <tr>
            <td>Som</td>
            <td></td>
        </tr>
    </table>  
</body>

<?php include '../footer.php'; ?>