# Função count:
//A função count() é uma função em PHP que retorna o número de elementos em um array.
//Ela é útil para determinar o tamanho de um array e pode ser usada para iterar sobre todos os elementos de um array.
//A função rand() é uma função PHP que gera números aleatórios. Ela recebe dois argumentos, $min e $max, que representam o intervalo de números a serem gerados. 
<?php
$frutas = array("maçã", "banana", "laranja");
$numero_de_frutas = count($frutas);
echo $numero_de_frutas;  // imprime 3
