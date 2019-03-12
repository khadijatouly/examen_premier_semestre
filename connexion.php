<?php
	$server = "localhost"; 
	$login = "root";
    $motdepasse = "";
	$dbname = "examForm";

		$conect = new PDO ('mysql: host ='.$server.'; dbname = '.$dbname.';charset = utf-8', $login, $motdepasse);





?>