//If-else: essa estrutura permite que o programa execute uma ação específica se uma condição é verdadeira, e outra ação se a condição é falsa.
//Exemplo:
<?php
  $media=70;
  if($media>=70){
    echo "Aluno aprovado";
}else{
    echo "Aluno reprovado";
}
//Neste código é feito uma comparação entre a variável $media (representa o valor da média obtida por um aluno) e o valor 70 (representa o valor mínimo em determinda escola para o aluno ser aprovado)
//A comparação é feita com um operador relacional >=(maior ou igual), caso o valor na variável $media se maior ou igual a 70, ou seja, de 70 que é a menor nota para passar, ou uma nota maior, o teste é VERDADE, é executado o código que está entre as chaves, ou seja, mostrará Aluno  aprovado, caso contrário, se o valor for diferente disso, por exemplo: 60, esse valor nem é igual e nem maior que 70, então o teste é FALSO, o código segue para o próximo passo, exibirá: Aluno reprovado.
//Lógico que há outras possibilidades, mas a intenção é mostrar agora só o básico.
