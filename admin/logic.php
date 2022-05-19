<?php
include "connect.php";

?>

<?php 
$sql = "SELECT * FROM  admin";
$result = mysqli_query($con, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>