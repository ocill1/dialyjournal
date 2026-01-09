<!-- ussername: admin -->
<!-- password: 12345 -->


<?php
session_start();
session_destroy();
header("location:login.php"); 
?>