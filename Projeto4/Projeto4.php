<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="Projeto4_index.php" method="GET">
        <p>Dia de nascimento</p>
        <input type="text" name="dia"> <br />
        <p>Mes de nascimento</p>
        <input type="text" name="mes"><br />
        <p>Ano de nascimento</p>
        <input type="text" name="ano"><br />
        <input type="submit">
    </form>



    <p>Grau de safadeza: 
    <?php
        if(isset($_GET['dia'])){
            echo (safadao($dia, $mes, $ano));
        }
    ?>
    <p>

</body>

</html>
