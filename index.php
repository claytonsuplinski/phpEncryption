<?php 
echo("<h3> Symmetric Encryption </h3>"); 
$key_value = "KEYVALUE"; 
$plain_text = "PLAINTEXT"; 
echo ("<p><b> Text before encryption : </b>"); 
echo ( $plain_text ); 
$encrypted_text = mcrypt_ecb(MCRYPT_DES, $key_value, $plain_text, MCRYPT_ENCRYPT); 
echo ("<p><b> Text after encryption : </b>"); 
echo ( $encrypted_text ); 
$decrypted_text = mcrypt_ecb(MCRYPT_DES, $key_value, $encrypted_text, MCRYPT_DECRYPT); 
echo ("<p><b> Text after decryption : </b>"); 
echo ( $decrypted_text );
$encrypted_text2 = mcrypt_ecb(MCRYPT_DES, $key_value, $decrypted_text, MCRYPT_ENCRYPT); 
echo ("<p><b> Text after second encryption : </b>"); 
echo ( $encrypted_text2 ); 
$decrypted_text2 = mcrypt_ecb(MCRYPT_DES, $key_value, $encrypted_text2, MCRYPT_DECRYPT); 
echo ("<p><b> Text after second decryption : </b>"); 
echo ( $decrypted_text2 );

if( $encrypted_text2 == $encrypted_text){
	echo("<h3> Encryption compare: Success! </h3>"); 
}
else{
	echo("<h3> Encryption compare: Failure! </h3>"); 
}

if( $decrypted_text2 == $decrypted_text){
	echo("<h3> Decryption compare: Success! </h3>"); 
}
else{
	echo("<h3> Decryption compare: Failure! </h3>"); 
}
?> 