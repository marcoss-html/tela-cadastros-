<?php
$nome=$_POST['nome'];
$id=$_GET['id'];
$email=$_POST['email'];
$nasc=$_POST['nasc'];

include "conn.php";

$sql = "UPDATE formulario SET nome='$nome',email='$email', nasc='$nasc' WHERE id='$id'"; 
echo $sql;
$conn->query($sql);


header ("location: listar.php");

















?>