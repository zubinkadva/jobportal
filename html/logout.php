<?php
session_start();
if(isset($_SESSION['dispname']))
  unset($_SESSION['dispname']); 
  header ("location:/jobportal/html/index.php");
  
?>