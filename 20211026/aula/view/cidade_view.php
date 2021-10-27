<?php

    $cidades = $_REQUEST['cidades'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cidade MVC</title>
</head>
<body>
    <table>
        <tr>
            <th>CodCid</th>
            <th>NomeCid</th>
            <th>UF</th>
        </tr>
        <?php foreach ($cidades as $cidade): ?>
            <tr>
                <td><?php echo $cidade["CODCID"];?></td>
                <td><?php echo $cidade["NOMECID"];?></td>
                <td><?php echo $cidade["UF"];?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>