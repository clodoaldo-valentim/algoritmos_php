//O foreach é uma estrutura de repetição em PHP utilizada para percorrer arrays e coleções de dados. 
//O objetivo é simplificar a escrita de loops que precisam acessar todos os elementos de uma coleção.
/*
$cores = ["branco", "azul", "preto", "vermelho"];
   foreach($cores as $teste){
    echo $teste."\n";
   }

*/
//Onde array é o array a ser percorrido e $elemento é uma variável que representa cada elemento do array em cada iteração.
//Durante cada iteração, o foreach atribui o valor de cada elemento a $elemento e executa o código dentro do loop.
//Isso é repetido até que todos os elementos tenham sido acessados.
//O foreach é especialmente útil quando precisamos acessar todos os elementos de um array e realizar alguma ação com cada um deles, como exibir na tela, calcular uma soma, entre outros.
<?php
$cores = ["branco", "azul", "preto", "vermelho"];
   foreach($cores as $teste){
    echo $teste."\n";
   }
