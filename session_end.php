<?php
session_start();
if (isset($_SESSION["uid"])){
session_destroy();
header("location:Login.php");
}
?>