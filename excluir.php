<?php
$id=$_GET['id'];
include "conn.php";
$sql = "DELETE FROM formulario WHERE id='$id'";
$conn->query($sql);
header ("location: listar.php");


























?>
