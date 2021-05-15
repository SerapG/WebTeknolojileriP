<?php  
ob_start();
session_start();




if($_SESSION== null){
    header("Refresh: 0; url=login.html");
}else{
        header("Refresh: 0; url=login.html");
    
}

ob_end_flush();

?>