<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudando Concatenação</title>
</head>
<body>

    <?php
        $nome = "Gustavo Andrade";
        $idade = 24 ;
        echo '<p> Olá, me chamo ' . $nome .' e tenho '. $idade . ' anos </p>';
        echo "<p> Olá, me chamo  $nome e tenho  $idade  anos </p>";
    ?>

</body>
</html>