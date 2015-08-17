<?php

$conecta = mysql_connect("localhost", "root", "") or print (mysql_error());
print "Conexão OK!";
//mysql_close($conecta);


mysql_select_db("u598177796_flip", $conecta) or print(mysql_error());
print "Conexão e Seleção OK!";
//mysql_close($conecta);


$sql = "SELECT * FROM usuario"; 
$result = mysql_query($sql, $conecta); 
 
/* Escreve resultados até que não haja mais linhas na tabela */ 
 
while($consulta = mysql_fetch_array($result)) { 
   print "<br> id_usuario: $consulta[id_usuario] - id_perfil: $consulta[id_perfil] - email: $consulta[email] - senha: $consulta[senha] <br>"; 
   
   if ($consulta['id_perfil'] == 1) {
       print 'Acesso Admin';
   }
} 
mysql_free_result($result); 
mysql_close($conecta); 
?>
