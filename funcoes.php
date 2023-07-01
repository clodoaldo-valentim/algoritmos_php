/*
Função em PHP é um trecho de código que pode ser chamado (invocado) de qualquer parte do código para executar uma tarefa qualquer e retornar algum valor.
*/
/*
Existem funções de login, as de recuperar senha, a de exibir produtos na sua loja virtual, as funções responsáveis pelo sistema de pagamento e por aí vai.
*/
/*
Os benefícios são vários, como:
Escrever menos código;
Diminui o tempo de carregamento do seu sistema, pois escreveu menos;
Reduz o tanto de possibilidades de erro de código;
Auxilia na organização de seu código;
*/
//Estrutura básica de uma função
function nome_funcao($par1, $par2, $par3...$parN)
{
    //instruções
}
//Veja um exemplo:
<?php
function exibir_mensagem()
{
    echo "Olá\n";
    echo "Seja Bem Vindo(a)!"
}
