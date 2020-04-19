<html>

<head>


</head>

<body>
		<form method = "post">
		<br>
		<input type="text" name="nome" placeholder = "Nome" />
		<br>
		<br>
		<br>
		<input type="text" name="email" placeholder = "Exemplo@gmail.com" />
		<br>
		<p>Data de Nascimento</p>
		<input type="date" name="DataNasc" />
		<br>
		<p>Senha</p>
		<input type="password" name="Senha1" />
		<br>
		<p>Confirmar Senha</p>
		<input type="password" name="Senha2" />
		
   
		<?php

		//nome
			if(isset($_POST['nome']) && !empty($_POST['nome']) ){
				$nome = $_POST['nome'];
				$nomeSeparado = explode(" ",$nome);
					if(sizeof($nomeSeparado) == 2) {
						echo "<br>nome valido: ".$nome."";
					} else {
						echo "<br>nome invalido: ".$nome."";
					}
			} else if (!isset($_POST['nome']) || empty($_POST['nome'])) {
						echo "<br>nome invalido";
			}
			
			//email
			if(isset($_POST['email']) && !empty($_POST['email'])) {
				$emailSeparado = explode("@", $_POST['email']);
					if(sizeof($emailSeparado) == 2){
						echo "<br>email valido: ".$_POST['email']."";
					} else {
						echo "<br>email invalido: ".$_POST['email']."";
					}
				} else if(!isset($_POST['email']) || empty($_POST['email'])){
					echo "<br>email invalido";
				}
				
			//senha
		if(isset($_POST['Senha1']) && !empty($_POST['Senha1']) && isset($_POST['Senha2']) && !empty($_POST['Senha2'])){
			$senha1 = $_POST['Senha1'];
			$senha2 = $_POST['Senha2'];
				if(($senha1) == ($senha2)) {
					echo "<br>Senha Valida";
				} else {
					echo "<br>Senha invalida";
				}
		} else if (!isset($_POST['Senha1']) || !isset($_POST['Senha2']) || empty($_POST['Senha1']) || empty($_POST['Senha2'])){
				echo "<br>Senha invalida";
		}

		?>
		
			<p><input type="submit"></p>
			</form>

</body>

</html>