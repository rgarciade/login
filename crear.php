<?php 			define("ActivEncrip","false");
		#encriptacion
			define("Encrip","md5");
		#secret
			define("Secret","palabrasecret");
		

function encriptar($pass){
	
	$passencriptada= hash_hmac(Encrip, $pass, Secret);

	return $passencriptada;
}


$a = encriptar("caca");
echo($a)
?>