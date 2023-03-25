<!DOCTYPE html>
<html lang="-">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Não sei fazer nada de PHP</title>

    <link rel="stylesheet" href="style.css"/>
</head>

<body>
    <form method="POST">
        <label for=""> Valor inicial </label>
        <select name="inicial" id="inicial" id="ins">
            <?php
            for ($i = 0; $i < 100; $i++) {
            ?>
                <option value="<?= $i ?>"><?= $i = $i ?> </option>
            <?php
            }
            ?>
        </select>

        <br>

        <label for=""> Valor final </label>
        <select name="final" id="final" id="fis">
            <?php
            for ($i = 0; $i < 100; $i++) {
            ?>
                <option value="<?= $i ?>"><?= $i ?> </option>
            <?php
            }
            ?>
        </select>

        <br>
        <label for="">Mostrar</label>
        <br>
        <input type="radio" class="choese" value="T">Todos
        <br>
        <input type="radio" class="choese" value="I">Impares
        <br>
        <input type="radio" class="choese" value="P">Pares
        <button>Mostrar</button>
    </form>
</body>

</html>

<?php
include_once "./code.php";
$raiva = new Sequencia;
if (isset($_POST['inical']) && isset($_POST['final'])&& isset($_POST['choese'])):
    $raiva->setStart($_POST['inicial']);
    $raiva->setEnd($_POST['final']);
    if ($_POST['choese'] == "T"):
        $raiva-> mostrarnumero();
    elseif ($_POST['choese'] == "I"):
        $raiva -> mostrarnumeroImpares();
    elseif ($_POST['choese'] == "P") :
        $raiva -> mostrarnumeroPares();
    endif;
endif;