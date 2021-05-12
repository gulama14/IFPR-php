<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="Projeto3_index.php" method="GET">
        <p>Primeira letra do nome</p>
        <input type="text" name="letra"> <br />
        <p>Mes de nascimento</p>
        <input type="text" name="mes"><br />
        <p>Dia de nascimento</p>
        <input type="text" name="dia"><br />
        <input type="submit">

    </form>

    <h2><?= $frase ?></h2>
    
</body>

</html>