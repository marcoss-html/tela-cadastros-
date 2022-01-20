<?php
$id=$_GET['id'];
$nome=$_GET['nome'];
$email=$_GET['email'];
$nasc=$_GET['nasc'];
echo $id;


?>
<html>
  <head>
     <title>Atualizador Dados</title>
	</head>
	<b><big>atualizador de dados</big></b>
	<br>
	<b><i><u><big>Edite seus Dados</big></u></i></b>
	<br>
<body>
 	<form action="atualizado.php?id=<?php echo $id;?>" method="post">
		
		<label> Nome</label>
		<br>
		<input type="text" name="nome" value=<?php echo $nome;?>>
		<br>
		<label> Email</label>
		<br>
		<input type="mail" name="email" value=<?php echo $email;?>>
		<br>
		<label>Data de nascimento</label>
		<br>
		<input type="date" name="nasc"value=<?php echo $nasc;?>>
	
	
		<input type="submit" value="atualizar">
	</form>
</body>
</html>
		




















