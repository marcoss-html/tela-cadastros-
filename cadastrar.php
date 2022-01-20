<?php
$nome=$_GET['nome'];
$email=$_GET['email'];
$nasc=$_GET['nasc'];

include "conn.php";

$sql = "INSERT INTO formulario(nome, email, nasc) VALUES('$nome', '$email', '$nasc')";
$conn->query($sql);

 header ("location: index.php"); 


















?>