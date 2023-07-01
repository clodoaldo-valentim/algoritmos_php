/*
A função array_pop() em PHP é utilizada para remover e retornar o último elemento de uma array. 
Ela atua modificando a array original, removendo o elemento do final da mesma.
A sintaxe básica da função array_pop() é a seguinte:
array_pop($array);
O parâmetro $array representa a array da qual você deseja remover o último elemento.
*/
<?php
$frutas = array("maçã", "banana", "laranja");

// Remover e obter o último elemento da array
$ultimoElemento = array_pop($frutas);
//Obter o elemento removido
echo $ultimoElemento; //Se usarmor esse código, será exibido o último elemento removido
// Exibir a array atualizada
echo "Frutas restantes: ";
print_r($frutas);
/*
utilizamos print_r() para exibir o conteúdo da array $frutas após
a remoção do último elemento. Dessa forma, a estrutura da array é preservada e você poderá visualizar os elementos corretamente.
*/
