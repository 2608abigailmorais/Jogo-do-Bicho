<!DOCTYPE html>
<?php

	include 'funcao.php';

	$animais = array("Avestruz", "Águia", "Burro", "Borboleta", "Cachorro", "Cabra", "Carneiro", "Camelo", "Cobra", "Coelho", "Cavalo", "Elefante", "Galo", "Gato", "Jacaré", "Leão", "Macaco", "Porco", "Pavão", "Peru", "Touro", "Tigre", "Urso", "Veado", "Vaca");
	$tipo = isset($_POST['tipo']) ? $_POST['tipo'] : 1;
	$valor = isset($_POST['valor']) ? $_POST['valor'] : 0;
	$numero = isset($_POST['numero']) ? $_POST['numero'] : 0;
	$animal = isset($_POST['animal']) ? $_POST['animal'] : 0;
?>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
    <link rel="stylesheet" href="css/estilo.css">
	<title>Jogo do Bicho</title>
</head>
<body>
	<form method="POST" action="">
<fieldset>
	<legend>Grupo</legend>
	Escolha em qual grupo você deseja apostar?<br>
	<input type="radio" name="tipo" id="tipo" value="1" <?php if ($tipo == 1) echo 'checked'; ?>>Grupo Simples<br>
	<input type="radio" name="tipo" id="tipo" value="2" <?php if ($tipo == 2) echo 'checked'; ?>>Milhar<br>
</fieldset>
	<fieldset>
		<legend>Milhar</legend>
		<input type="text" name="numero" value= <?php echo $numero;?> maxlength="4">
	</fieldset>
	<fieldset>
		<legend>Grupo Simples</legend>
		Escolha o seu Animal <select name="animal" id="animal">
			<?php
			for ($x=0; $x<count($animais); $x++){
			$index = $x + 1;
			if($index == $animal)
				echo "<option value='$index' selected>$animais[$x]</option>";
					else
			 echo "<option value='$index'>$animais[$x]</option>";
			}   

		?>
		</select>
	</fieldset>
	<fieldset>
	<legend>Aposta</legend>
	Selecione o valor da aposta: <input type="text" name="valor" value= <?php echo $valor;?>><br>
</fieldset><br>
	<input type="submit" name="apostar" value="Apostar"><br>
	</form>
<?php
	$premios = sorteio ();
	//var_dump($premios);

		if($tipo == 2){

		echo "1°Prêmio ".$premios[0]."<br>
			  2°Prêmio ".$premios[1]."<br>
			  3°Prêmio ".$premios[2]."<br>
			  4°Prêmio ".$premios[3]."<br>
			  5°Prêmio ".$premios[4]."<br>";

	$premio1 = $valor * 35;
	$premio2 = $valor * 30;
	$premio3 = $valor * 25;
	$premio4 = $valor * 20;
	$premio5 = $valor * 15;


	if($numero == $premios[0]){
		echo "<h2> Parabéns você ganhou o primeiro prêmio, no valor de $premio1</h2>";
	}
	elseif($numero == $premios[1]){
		echo "<h2> Parabéns você ganhou o segundo prêmio, no valor de $premio2</h2>";
	}
	elseif($numero == $premios[2]){
		echo "<h2> Parabéns você ganhou o terceiro prêmio, no valor de $premio3</h2>";
	}
	elseif($numero == $premios[3]){
		echo "<h2> Parabéns você ganhou o quarto prêmio, no valor de $premio4</h2>";
	}
	elseif($numero == $premios[4]){
		echo "<h2> Parabéns você ganhou o quinto prêmio, no valor de $premio5</h2>";
	}
	else{
		echo "<br><h1>Você não ganhou</h1>";
	}
}elseif($tipo == 1){
	echo "1°Prêmio ".$premios[0]."<br>
		  2°Prêmio ".$premios[1]."<br>
	      3°Prêmio ".$premios[2]."<br>
	      4°Prêmio ".$premios[3]."<br>
	      5°Prêmio ".$premios[4]."<br>";



}

?>
</body>
</html>

