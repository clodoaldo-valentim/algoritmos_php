//Primeiro, a condição é verificada. Se a condição for verdadeira, o bloco de código dentro do while é executado. 
//Após a execução do bloco de código, a condição é verificada novamente. Se a condição ainda for verdadeira, o bloco de código é executado novamente. Esse processo se repete até que a condição se torne falsa.
//O while é útil quando não sabemos previamente quantas vezes o bloco de código será executado, mas temos uma condição para verificar a continuidade da repetição. 
<?php
$i = 0;
while ($i < 5) {
   echo "Número: $i\n";
   $i++;
}
