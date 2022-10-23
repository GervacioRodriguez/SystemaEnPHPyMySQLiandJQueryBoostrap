<?php
//$ip_add = $_SERVER['REMOTE_ADDR'];
//echo "The user's IP address is - ".$ip_add; 
//echo $format = date('d-m-Y H:i:s'); 
//GERP910427BD1
//Valida RFC México. Referencias: http://www.forosdelweb.com/f18/aporte-valida-estructura-rfc-para-mexico-1023432/
$valor=$_POST['rfc'];
function valida_rfc($valor){
    $valor = str_replace("-", "", $valor); 
    $cuartoValor = substr($valor, 3, 1);
    //RFC sin homoclave
    if(strlen($valor)==10){
        $letras = substr($valor, 0, 4); 
        $numeros = substr($valor, 4, 6);
        if (ctype_alpha($letras) && ctype_digit($numeros)) { 
            return true;
        }
        return false;            
    }
    // Sólo la homoclave
    else if (strlen($valor) == 3) {
        $homoclave = $valor;
        if(ctype_alnum($homoclave)){
            return true;
        }
        return false;
    }
    //RFC Persona Moral.
    else if (ctype_digit($cuartoValor) && strlen($valor) == 12) { 
        $letras = substr($valor, 0, 3); 
        $numeros = substr($valor, 3, 6); 
        $homoclave = substr($valor, 9, 3); 
        if (ctype_alpha($letras) && ctype_digit($numeros) && ctype_alnum($homoclave)) { 
            return true; 
        } 
        return false;
    //RFC Persona Física. 
    } else if (ctype_alpha($cuartoValor) && strlen($valor) == 13) { 
        $letras = substr($valor, 0, 4); 
        $numeros = substr($valor, 4, 6);
        $homoclave = substr($valor, 10, 3); 
        if (ctype_alpha($letras) && ctype_digit($numeros) && ctype_alnum($homoclave)) { 
            return true; 
        }
        return false; 
    }else { 
        return false; 
    }  
}//fin validaRFC

?>