<!--CÓDIGOS PHP-->

<!DOCTYPE html>
<html>
<head>
	<title>Códigos PHP</title>
</head>
<body>
	<?php 		//TAG de inclusão do PHP no HTML
	?>

	<?= //TAG de impressão do PHP?> 

	<!--CRIÇÃO DE VARIÁVEL
	Colocar $ antes do nome, o tipo da variável vai ser definido automaticamente-->

	$nome = 'Giovane Francisco'

	<p>Nome: <?= $nome ?></p>


	define('NOME_CONSTANTE, 'valor_da_variavel'); Define uma variável constante 
	echo NOME_CONSTANTE; Exibe o valor da constante  

//////////////////////////////////////////////////////////////////////////////////////////

	Operadores condicionais 
	== 		igual
	=== 	identico
	!= 		diferente
	< > 	diferente
	!== 	não identico
	< 		menor que
	> 		maior que
	<= 		menor igual a
	>- 		maior igual a


	Operadores lógicos
	&&		verdadeiro se o primeiro E o segundo termo forem verdadeiros
	||		verdadeiro se o primeiro OU o segundo termo forem verdadeiros
	XOR		verdadeiro apenas se UM dos termos forem verdadeiros
	!		inverte o resultado da expressão
//////////////////////////////////////////////////////////////////////////////////////////

	if(condição){
		something
	}else{
		something
	}


	if(condicao){
		something
	}else if(condicao){
		something
	}else{
		something
	}

	condicao ? true : false; #Define a condição, se for verdadeiro faz a primeira instrução (true)
							  se for falso faz a segunda instrução (false)
//////////////////////////////////////////////////////////////////////////////////////////

	switch(opcao){
		case 1{
			something
			break;
		}
		case 2{
			something
			break;
		}
		default{
			something
			break;
		}
	}

//////////////////////////////////////////////////////////////////////////////////////////

	function nomeFuncao(){
		something
    }

    Funções para manipulação de String
    strtolower($texto); #Transforma todos os caracteres em minúsculos 
    strtoupper($texto); #Transforma todos os caracteres em maiúsculos 
    ucfirst($texto);    #Transforma o primeiro caractere em maiúsculo
    strlen($texto);		#Conta a quantidade de caracteres 
    str_replace(<procura por>, <substitui por>, $texto); #Substitui uma cadeia de caracteres por outra 
    substr($texto, <posicao inicial>, <qtde caracteres>); #retorna uma parte de uma string


    Funções matemáticas
    ceil($numero);  #Arredonda o valor pra cima
    floor($numero); #Arredonda o valor pra baixo
    round($numero); #Arredonda o valor com base nas casas decimais
    rand();			#Gera um numero int aleatório
    sqrt($numero);	#Retorna a raiz quadrada
    abs($numero);	#Deixa o número absoluto (sem sinal)

    Funções de datas
    date(formato) 	#Recupera a data atual
    date_default_timezone_get(timezone) #recupera o tinemoze default
    date_default_timezone_set(timezone) #Atualiza a timezone default
    strtotime(data) #Transforma uma string de data em segundos

 
//////////////////////////////////////////////////////////////////////////////////////////

	Array

	$lista_arrar = array("item1", "item2", "item3", "item4", "item5");

	$lista_array[1] = "item1";
	$lista_array[2] = "item2";
	$lista_array[3] = "item3";
	$lista_array[4] = "item4";
	$lista_array[5] = "item5";

	var_dump($lista_array); #Uso para 
		array(5) {[0]=> string(5)"item1" [1]=> string(5)"item2" .. .. ..}
	peint_r($lista_array);
		Array([0]=>item1 [1]=>item2 .. .. ..)


//////////////////////////////////////////////////////////////////////////////////////////


 
//////////////////////////////////////////////////////////////////////////////////////////



//////////////////////////////////////////////////////////////////////////////////////////



 
//////////////////////////////////////////////////////////////////////////////////////////



//////////////////////////////////////////////////////////////////////////////////////////



 
//////////////////////////////////////////////////////////////////////////////////////////



//////////////////////////////////////////////////////////////////////////////////////////




</body>
</html>