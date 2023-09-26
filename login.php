<?php include("template/header.php");
session_start();
require "conn.php";
?>



<form action="" method="post">
    <p class="h2 text-center">Login Form</p>
    <div class="mb-3">
        <label class="form-label">Username</label>
        <input type="text" name="username" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="text" name="password" class="form-control">
    </div>
    <input type="submit" value="Login" class="btn btn-primary">
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $blank_array = array();
    $username = $_REQUEST["username"];
    $password = $_REQUEST["password"];

    $query = "SELECT * FROM userdata WHERE username='$username';";
    $data = mysqli_query($conn, $query);
    $arr = mysqli_fetch_all($data, MYSQLI_NUM);
    // print_r($arr);
    if ($arr != $blank_array) {
        if ($arr[0][2] == $password) {
            $_SESSION["username"] = $username;
            $_SESSION["ahanaf"] = "hossain";
            header("location: home.php");
        } else {
            echo "Login failed.";
        }
    } else {
        echo "Login failed.";
    }
}
?>


<?php include("template/footer.php"); ?>