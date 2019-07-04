<?php
if(!isset($_SESSION['id']) || !isset($_SESSION['motpass'])){
echo "<script>window.location.href='login.php';</script>";
exit();
}
?>