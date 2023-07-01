/*
A função array_push() em PHP é utilizada para adicionar um ou mais elementos ao final de uma array existente. 
Ela recebe dois parâmetros: a própria array onde os elementos serão adicionados e o(s) elemento(s) que serão inseridos.
A sintaxe básica da função array_push() é a seguinte: 
array_push($array, $elemento1, $elemento2, ...);
*/
<?php
$frutas = array("maçã", "banana", "laranja");
// Adicionar um elemento ao final da array
array_push($frutas, "morango");
// Resultado: ["maçã", "banana", "laranja", "morango"]
