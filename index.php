<?php

$osztaly = array(
    array(" - ", "Tanári asztal", "Gulyás Zsolt Máté", "Lénárt Áron", " - "),
    array("Mészáros Marcell", "Básti Domonkos", "Keindl Bercel", "Kiss Balázs", " - "),
    array("Csik Melinda", "Karakas Olivér Roland", "Ábrahám Dávid", "Détári Leon", "Togyeriska Viktor"),
    array(" - ", " - ", "Giczi Attila", "Preil Ákos", "Sivinger Miklós")
);

?>
<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Ülésrend</title>
</head>

<body>
    <div>
        <h1> 13. I. 1. csoport</h1>
        <h2> Ülésrend</h2>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Első Oszlop</th>
                <th scope="col">Második Oszlop</th>
                <th scope="col">Folyosó</th>
                <th scope="col">Harmadik Oszlop</th>
                <th scope="col">Negyedik Oszlop</th>
                <th scope="col">Folyosó</th>
                <th scope="col">Ötödik Oszlo</th>
            </tr>
        </thead>
        <tbody>
            <?php

            foreach ($osztaly as $kulcs => $sor) {
            ?>
                <tr>
                    <th scope="row"><?php echo $kulcs + 1; ?></th>
                    <?php
                    foreach ($sor as $oszlop => $nev) {
                        echo "<td> $nev </td>";
                        if ($oszlop == 1 or $oszlop == 3) {
                            echo "<td> </td>";
                        }
                    }
                    ?>
                </tr>
            <?php

            }
            ?>
        </tbody>
    </table>

    <style>
        body {
            padding: 60px;
            text-align: center;
            background-color: rgb(236, 232, 227);
        }

        h1 {
            padding: 20px auto;
            text-align: center;
        }

        h2 {
            padding: 20px auto;
            text-align: center;
            margin-bottom: 40px;
        }
    </style>
</body>

</html>