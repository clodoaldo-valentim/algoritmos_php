//For: essa estrutura permite que o programa execute uma ação repetidamente, enquanto uma condição é verdadeira.
//Ele é composto por três partes: A inicialização, a condição de continuidade e a atualização.
/* 
for (inicialização; condição; atualização) {
   // bloco de código a ser executado
}
*/
//A inicialização ocorre antes do início do loop e é usada para definir a variável de controle e seu valor inicial. 
//A condição é verificada antes de cada iteração do loop. Se a condição for verdadeira, o bloco de código é executado. 
//Após a execução do bloco de código, a atualização é aplicada para modificar a variável de controle. 
//Em seguida, a condição é verificada novamente. O processo se repete até que a condição se torne falsa.

<?php
    // Este programa imprime os números de 1 a 10
    for ($i = 1; $i <= 10; $i++) {
        echo $i . "<br>";
    }
