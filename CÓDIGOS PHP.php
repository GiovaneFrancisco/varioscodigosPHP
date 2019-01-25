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

 	###########################################################
    ###########################################################
    ####Ver como formatar a exibição de data no site do PHP####
 	###########################################################
 	###########################################################

 //////////////////////////////////////////////////////////////////////////////////////////

	Array

	$lista_array = array("item1", "item2", "item3", "item4", "item5");
	$lista_array = ["item1", "item2", "item3", "item4", "item5"];

	$lista_array[1] = "item1";
	$lista_array[2] = "item2";
	$lista_array[3] = "item3";
	$lista_array[4] = "item4";
	$lista_array[5] = "item5";

	$lista_array[] = "item6"; #Dinamicamente insere um item dentro da proxima casa livre

	var_dump($lista_array); #Uso para vizualização do array
		array(5) {[0]=> string(5)"item1" [1]=> string(5)"item2" .. .. ..}
	print_r($lista_array);  #Uso para vizualização do array
		Array([0]=>item1 [1]=>item2 .. .. ..)

	<pre></pre> #Uso para melhor vizualização do array


	$lista_array = array('a' => "item1", '2' => "item2", 'c' => "item3", .. ..);
	$lista_array['J'] = 'item4'; #Arrays com categorização feita do jeito que precisarmos


	in_array("item3', $lista_array); #Retorna true se o item estiver dentro do array
									 #Retorna false se o item não estiver dentro do array

	array_search("item1", $lista_array); #Retorna o índice do item dentro do array
										 #Retorna null se o item não existir




	$lista_array['frutas']  = ["Banana", "Maça", "Morango", "Uva"];
	$lista_array['pessoas'] = ["João", "José", "Maria"];
		#Array bidimensional, com 2 índices dentro do mesmo nome de array

	echo $lista_array['frutas'][3]; #Faz a recuperação da informação do array 



	$lista_coisas = ["Frutas" => $lista_frutas, "Pessoas" => $lista_pessoas];
		#Faz com que o $lista_frutas esteja dentro do índice "Frutas" e o mesmo para pessoas
		#Desse jeito coloca um array simples dentro de um multidimencional 

	in_array("Maça", $lista_coisas["Frutas"]);

//////////////////////////////////////////////////////////////////////////////////////////
 
	is_array($array);  		#Retorna true se for um array, false se não for
	array_keys($array);		#Retorna as chaves de um array
		$array = [1=>"a", 8=>"b", 20=>"c"];
		$chaves_array = array_keys($array);

	sort($array);			#Ordena o array em ordem alfabética, reordenando os índices dos itens
	asort($array);			#Ordena o array em ordem alfabética, mantendo os índices dos itens
	count($array);			#Conta a quantidade de itens dentro do array
	array_merge($array);	#Junta vários arrays dentro de um novo array 
		$array1 = ["1","2"];
		$array2 = ["3","4"];
		$array3 = ["5","6"];

		$novo_array = array_merge($array1, $array2, $array3);

	explode($array);		#Pega uma string e quebra em itens dentro de um array
		$string = "25/01/2018";
		$array_retorno = explode("/", $string); #O primeiro item é o que vai definir a divisão dos itens dentoro do array

	implode($array);		#Pega um array e junta em uma string
		$array = ["a", "b", "x", "y"];
		$string_retorno implode(",", $array); #O primeiro item define como as irformações vão ser divididas	

//////////////////////////////////////////////////////////////////////////////////////////

	is_null($variavel) #True se a variável for null, false se não for
	empty($variavel)   #True se a variável for vazia, false se não for
 

 	NUll é exclusivamente NULL, nada mais é 
 	Empty pode ser NULL, EMPTY e FALSE

//////////////////////////////////////////////////////////////////////////////////////////

	while(condicao){ #Enquanto a condição for verdadeira o bloco de códigos vai ser executado
		something;
	}
 	


 	do{		#Faz o bloco de código enquanto a condição for verdadeira
 		something
 	}while(condicao);



 	for(variavel; condicao; incremento){

	}
//////////////////////////////////////////////////////////////////////////////////////////



//////////////////////////////////////////////////////////////////////////////////////////



 
//////////////////////////////////////////////////////////////////////////////////////////



//////////////////////////////////////////////////////////////////////////////////////////




</body>
</html>