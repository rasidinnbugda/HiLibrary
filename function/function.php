<?php

function post($parameter, $condution = false) {
    if( $condution == false ){
        $result = strip_tags(trim($_POST[$parameter]));
    }elseif( $condution == true ){
        $result = strip_tags(trim(addslashes($_POST[$parameter])));
    }
    return $result;
}

function replace_url($text) {
    $text = trim($text);
    $search = array('Ç','ç','Ğ','ğ','ı','İ','Ö','ö','Ş','ş','Ü','ü',' ','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','R','S','T','U','V','Y','Z','W','Q','X',"'","?","*","/","_");
    $replace = array('c','c','g','g','i','i','o','o','s','s','u','u','-','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','r','s','t','u','v','y','z','w','q','x',"-","","","","-");
    $new_text = str_replace($search,$replace,$text);
    return $new_text;
}

function control() {
	if (empty($_SESSION["admin_username"])) {
		
		header("Location: ../");
		exit;
	}
}

?>