<?php
include_once "Atividade1e2.php";
$jogo1 = GerarJogoMegaSena();
$jogo2 = GerarJogoMegaSena();
$jogo3 = GerarJogoMegaSena();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sorteio da Mega-Sena</title>
</head>
<body>

<table>
    <thead>
        <tr>Jogo 1</tr>
    </thead>
    <tbody>
        <?php gerarTabela($jogo1) ?>
    </tbody>
</table>
<table>
    <thead>
        <tr>Jogo 2</tr>
    </thead>
    <tbody>
        <?php gerarTabela($jogo2) ?>
    </tbody>

</table>
<table>
    <thead>
    <tr>Jogo 3</tr>
    </thead>
    <tbody>
    <?php gerarTabela($jogo3) ?>
    </tbody>
</table>

</body>
</html>