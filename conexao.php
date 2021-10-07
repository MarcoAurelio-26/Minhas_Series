<?php

$servidor = "localhost";
$usuario = "postgres";
$senha = "mama2004";
$base = "DWS";

try{
	$conn = new PDO(		
					"pgsql:dbname=$base;host=$servidor;port=5432",
					$usuario,
					$senha
				 	);
} catch (Exception $e){	
	echo "Erro ao se conectar ao banco de dados. <br>";
	echo $e->getMessage();
}

?>