<?php include("template/header.php");
session_start();
require "conn.php";
?>

<?php
session_unset();
session_destroy();
header("location: index.php");

?>


<?php include("template/footer.php"); ?>