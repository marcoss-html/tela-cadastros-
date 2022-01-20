<?php
include "conn.php";

$sql="SELECT * FROM formulario";
$resultados=$conn->query($sql);

echo "<table border='1'>";



 while($linha=$resultados->fetch_assoc()) {  
		echo "<tr>";
           echo"<td>" . $linha['id']."</td>"; 
           echo"<td>" . $linha['nome']."</td>";
		   echo"<td>" . $linha['email']."</td>";
		   echo"<td>" . $linha['nasc']."</td>";
		   echo"<td><a href='editar.php?id=".$linha['id']."&nome=".$linha['nome']."&email=".$linha['email']."&nasc=".$linha['nasc']."'>EDITAR</a></td>";
		   echo"<td><a href='excluir.php?id=".$linha['id']."'>EXCLUIR</a></td>";
		 echo "</tr>";
 }
echo "</table>";



 
echo "<br>";
echo "<br>";	

   
        



























?> 

