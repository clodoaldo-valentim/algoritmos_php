//O switch-case é uma estrutura de controle de fluxo em PHP que permite selecionar uma das várias linhas de código para ser executada com base em um valor de expressão. 
//Ele é usado para avaliar uma expressão e compará-la a vários valores possíveis, conhecidos como "cases".
//Quando uma das expressões for igual ao valor da expressão avaliada, o código associado a esse case será executado.
<?php
  $idade = 21;
  switch($idade) {
    case 18:
        echo "Você tem 18 anos"; // linha de código a ser executada
        break; //é usado para sair do switch case depois de executar a instrução correspondente
    case 21:
        echo "Você tem 21 anos"; // linha de código a ser executada
        break; //é usado para sair do switch case depois de executar a instrução correspondente
    default: //A instrução 'default' é executada caso nenhum dos casos anteriores seja verdadeiro
        echo "Idade não é uma idade de comemoração específica.";
}
