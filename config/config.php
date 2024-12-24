<?php
    //Declarated Variable
    define('DB_HOST','localhost');
    define('DB_NAME','library_db');
    define('DB_USER','root');
    define('DB_PASS','');

    //Try to Connected
    try{
        $db=new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PASS);
        //echo "Database Connected";
    }catch(PDOException $e){
        echo "Database Not Connected -> ".$e->getMessage();
        exit;
    }

    //Session
    session_start();

    //Baseurl
    function baseurl($link=''){
        $baseurl="http://localhost/project/";
        
        if(!empty($link)){
            $url=$baseurl.$link;
        }else{
            $url=$baseurl;
        }
        return $url;
    }

    function redirect($url="",$second=0){
        $redirecto = '<meta http-equiv="refresh" content="'.$second.';url='.$url.'">';
        echo $redirecto;die;
    }
    function redirectto($url="",$second=0){
        $redirecto = '<meta http-equiv="refresh" content="'.$second.';url='.baseurl($url).'">';
        echo $redirecto;die;
    }


?>

