<?php
/**
 * Created by PhpStorm.
 * User: caio_
 * Date: 16/05/2019
 * Time: 12:48
 */

function GerarJogoMegaSena(){
    $listaDeNumeros = range(1, 60);
    $numeros = array_rand(array_flip($listaDeNumeros), 6);

    return $numeros;

}

function gerarTabela($jogo){
    $listaDeNumeros = range(1, 60);
    echo "<tr>";
    foreach ($listaDeNumeros as $numero){
        if(in_array($numero,$jogo)){
            echo "<td style='color: blue'>".$numero."</td>".PHP_EOL;
        }else {
            echo "<td>".$numero."</td>".PHP_EOL;
        }
        if($numero % 10 == 0){
            echo "</tr>".PHP_EOL;
            if($numero <> 60){
                echo "<tr>".PHP_EOL;
            }
        }
    }
}