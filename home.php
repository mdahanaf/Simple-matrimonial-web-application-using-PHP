<?php include("template/header.php");
session_start();
require "conn.php";
?>

<?php



if(isset($_SESSION["username"]) && $_SESSION["ahanaf"] == "hossain"){
    echo "Welcome "."<p class='h2 text-primary text-uppercase'>".$_SESSION["username"]."</p>".$br;
    include("home2.php");
    echo $br;
    echo '<a href="index.php" class="btn btn-primary">Go to Main page</a>'.$br;
    echo '<a href="logout.php" class="btn btn-danger">Log Out</a>'.$br;

}else{
    header("location: index.php");
}

?>



<?php include("template/footer.php"); ?>