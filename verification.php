<!DOCTYPE html>
<html>
<head>
	<title> Test Fonction</title>
</head>
<body>

<?php

$fichierXML = 'mdp.xml';
$xml = simplexml_load_file($fichierXML);
$init =0;
$mottest = 'jean';
//var_dump($xml);
//print_r($xml);
$i=true;
foreach($xml as $motinterdit){
	//echo $motinterdit.'<br>';
	if($mottest == $motinterdit){
		$i=false;
	}
}
if($i == false)
	{
		echo 'Choisir un autre nom svp, nom interdit'.'<br>';
	}
	else
	{
		echo 'Nom de compte valide'.'<br>';
	}

?>
</body>
</html>