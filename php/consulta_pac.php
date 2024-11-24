<?php

		// Criando tabela e cabeçalho de dados:
		echo "<table border=2 bordercolor='#B0E0E6' align='center' >";
		echo "<tr>";
		echo "<th>Nome</th>";
		echo "<th>Idade</th>";
		echo "<th>Peso</th>";
		echo "<th>Altura</th>";
		echo "<th>Sexo</th>";
		echo "</tr>";
		
	// Conectando ao banco de dados:
	$conexao = mysqli_connect('localhost','root','','diabetes') or die('Erro ao conectar ao servidor');
	//include_once("conexao.php");
	
	//realiza a intrução sql
	$sql = "select `NOME_PC`,`IDADE`,`PESO`,`ALTURA`,`SEXO` from `paciente`";

	$resultado = mysqli_query($conexao,$sql) or die("Erro ao retornar dados");
	

	// Obtendo os dados por meio de um loop while
	while ($reg = mysqli_fetch_array($resultado))
	{
		$paciente = $reg['NOME_PC'];
		$idade = $reg['IDADE'];
		$peso = $reg['PESO'];
		$altura = $reg['ALTURA'];
		$sexo = $reg['SEXO'];

		//TABELA
		echo "<tr>";
		echo "<td align='center'>".$paciente."</td>";
		echo "<td align='center'>".$idade."</td>";
		echo "<td align='center'>".$peso."</td>";
		echo "<td align='center'>".$altura."</td>";
		echo "<td align='center'>".$sexo."</td>";
		echo "</tr>";

		/*
		//lista
		echo "<dt class='list-group'>";
		echo "<dd class='list-group-item list-group-item-primary'>".$paciente."</dd>";
		echo "<dd class='list-group-item list-group-item-secondary'>".$idade."</dd>";
		echo "<dd class='list-group-item list-group-item-primary'>".$peso."</dd>";
		echo "<dd class='list-group-item list-group-item-secondary'>".$altura."</dd>";
		echo "<dd class='list-group-item list-group-item-primary'>".$sexo."</dd>";
		echo "</dt>";
		*/
	}
	
	mysqli_close($conexao);
	echo "</table>";
?>