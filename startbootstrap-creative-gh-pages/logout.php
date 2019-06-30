<?php
 
session_start(); 
 
session_destroy(); 
 
 
 
/*redirecionar para uma determinada página*/
echo "<script>alert('Você saiu!'); document.location.href='index.php';</script>";
 
?>