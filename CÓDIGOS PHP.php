<!--CÓDIGOS PHP-->

<!DOCTYPE html>
<html>
<head>
	<title>Códigos PHP</title>
</head>
<body>
	<?php 		//TAG de inclusão do PHP no HTML
	?>
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
    rand();					#Gera um numero int aleatório
    sqrt($numero);	#Retorna a raiz quadrada
    abs($numero);		#Deixa o número absoluto (sem sinal)

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
 

 	NUll é exclusivamente NULL, n ada mais é 
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

	$registros = ["Título 1", "Título 2", "Título 3"];
	$idx = 0;

	while($idx < 3){
		$registros[idx];
		$idx++;
	}

	$registros = [array("titulo" => "Título 1", "conteudo" => "Conteudo 1")
								array("titulo" => "Título 2", "conteudo" => "Conteudo 2");]

			while($idx < 2){
				$registros[idx]["titulo"];
				$registros[idx]["conteudo"];
			}


	do{
		$registros[idx]
		$idx++;
	}while($idx < 3);

	foreach($array_original as $indice => $aray_novo){
		something
	}

//////////////////////////////////////////////////////////////////////////////////////////

	PARA CRIAR UM FORMULÁRIO DE REGISTRO

	<form action="valida_login.php" method="post"> 
			#ESSA É A PÁGINA QUE VAI RECEBER AS INFORMAÇÕES
			#O method="post" faz com que as informações não sejam passadas por meio da URL

		<input name="email" type="email" class="form-control" placeholder="E-mail">   
			#Colocando o name="" faz com que a informação seja passada por esse atributo       
		<input name="senha" type="password" class="form-control" placeholder="Senha">
		
    <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
    	#Colocando o type="submit" faz com que as informações sejam desparadas e cheguei ate o valida_login.php
	</form>

	PARA VERIFICAÇÃO DE USUÁRIO SEM BD

	foreach ($usuarios_app as $user) {
		if ($user["email"] == $_POST ["email"] && $user["senha"] == $_POST["senha"]) {
			echo "Verificado";
			$_SESSION['autenticado'] = "Sim"; #Cria uma variável de seção, deixando guardado para todas as páginas da aplicação se o usuário foi ou não autenticado
		}else{
			$_SESSION['autenticado'] = "Nao";
			echo "Não verificado";
		}
	}

	header("Location: index.php?login=erro"); 
		#Faz com que a página seja recarregada com a página selecionada
		#? passa um parâmetro para que seja possível recuperar a informação de erro 

		isset($array["array"]); #Faz a verificação de se algum ítem do array está setado

		if(!isset($_SESSION["autenticado"]) || $_SESSION["autenticado"] != "Sim"){ #Se o usuário não estiver autenticado, nega 																																							o acesso às páginas (Colocar em todas as 																																								páginas que precisam de autenticação)
			header("Location: index.php?login=erro");
		}

//////////////////////////////////////////////////////////////////////////////////////////

	include("menu.php"); #Faz com que o script menu.php seja reproduzido na página atual
						 #Quando não acha o script vai gerar um Warning, apenas um aviso 
						 que não afetará a continuação da aplicação
						 #Pode ser repetido quantas vezes forem necessárias dentro do script
	include_once("menu.php"); #Só deixa exibir o script em questão uma vez por aplicação

	require("menu.php"); #Faz com que o script menu.php seja reproduzido na página atual
						 #Quando não acha o script vai gerar um Fatal Error, anulando todo
						 e qualquer código após o Require
						 #Pode ser repetido quantas vezes fores necessárias dentro do scripr
	require_once("menu.php"); #Só deixa exibir o script em questão uma vez por aplicação

//////////////////////////////////////////////////////////////////////////////////////////

	session_destroy(); #Destrói todas as informações dentro da $_SESSION, mas até que seja
						feita uma nova requisição é possível ter acesso
					   #Usar um header("Location: "); para fazer o redirecionamento e a 
					   	destruição das informações

	unset($_SESSION["x"]);	#Apaga uma informação automaticamente
							#Só vai apagar alguma informação caso ela existir, não causa erros

//////////////////////////////////////////////////////////////////////////////////////////

 	POO

 		class AlgumaClasse{
 			#Criação de variáveis
 			public $nome = null;
 			public $telefone = null;
 			public $idade = null;

 			#Criação de um construtor
 			function __construct($nome, $telefone, $idade){
 				$this->nome = $nome;
 				$this->telefone = $telefone;
 				$this->idade = $idade;
 			}

 			#Criação de um método para remover um objeto da memória 
 			function __destruct(){
 				echo "Objeto removido";
 			}


 			#Criação de métodos Get e Set manualmente
 			function setNome($nome){
 				$this->nome = $nome;
 			}
 			function getNome(){
 				return $this->nome;
 			}

 			function setTelefone($telefone){
 				$this->telefone = $telefone;
 			}
 			function getTelefone(){
 				return $this->telefone;
 			}

 			function setIdade($idade){
 				$this->idade = $idade;
 			}
 			function getIdade(){
 				return $this->idade;
 			}


 			#Métodos mágicos getters e setter, pode fazer a atribuição dos valores sem ter que escrever os métodos para todas as variáveis
 			function __set($atributo, $valor){
 				$this-> $atributo = $valor;
 			}
 			function __get($atributo){
 				return $this->$atributo;
 			}

 			function algumaFuncao(){

 			}

 			function algumaOutraFuncao(){
 			}

 		}

 		#Criação de um objeto daquela classe
 		$x = new AlgumaClasse();
 		#Atribuição de valores às variáveis por métodos Set
 		$x->setNome("Giovane");
 		$x->setTelefone("(11) 99806-4678");
 		$x->setIdade(19);

 		#Criação de um objeto QUE TENHA UM CONSTRUTOR PADRÃO COM ATRIBUTOS INSTANCIADOS
 		$y = new AlgumaClasse("Giovane", "(11) 998064678", 1.80);

 		#Atribuição de valores às variáveis pelo método mágico Set
 		$x-> __set("nome", "Giovane");
 		$x-> __get("nome");




//////////////////////////////////////////////////////////////////////////////////////////



//////////////////////////////////////////////////////////////////////////////////////////



//////////////////////////////////////////////////////////////////////////////////////////



//////////////////////////////////////////////////////////////////////////////////////////



//////////////////////////////////////////////////////////////////////////////////////////



//////////////////////////////////////////////////////////////////////////////////////////



//////////////////////////////////////////////////////////////////////////////////////////



//////////////////////////////////////////////////////////////////////////////////////////



//////////////////////////////////////////////////////////////////////////////////////////



</body>
</html>