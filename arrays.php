/*
Uma array é uma estrutura de dados que permite armazenar um conjunto de valores relacionados em uma única variável. 
Ela pode ser considerada como uma lista ordenada de elementos, onde cada elemento possui uma posição específica, chamada de índice. 
Os índices são geralmente números inteiros que começam em 0 e vão até o tamanho da array menos um.
As arrays podem ser utilizadas para armazenar diferentes tipos de dados, como números, strings, booleanos, objetos e até mesmo outras arrays.
Para declarar uma array em PHP, você pode utilizar a função array() ou a sintaxe de colchetes [].
*/
// Exemplo de array numérica
<?php
$idades = array(20, 25, 30, 35);

// Exemplo de array associativa
$pessoa = array(
    'nome' => 'João',
    'idade' => 25,
    'cidade' => 'São Paulo'
);

// Exemplo de array multidimensional
$matriz = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);
//Exemplo de como manipular uma array, óbvio que outras maneiras dessa manipulação ocorrer
echo $idades[0]; // Saída: 20

echo $pessoa['nome']; // Saída: João

echo $matriz[1][2]; // Saída: 6
