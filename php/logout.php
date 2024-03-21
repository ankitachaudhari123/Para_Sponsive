<?php 
setcookie('name', '', time() - (86400 * 30), "/");
setcookie('user_id', '', time() - (86400 * 30), "/");
header('location:../');

?>