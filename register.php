<?php include("template/header.php");
require "conn.php";
?>


<form action="" method="post">
    <p class="h2 text-center">Registration Form</p>
    <div class="mb-3">
        <label class="form-label">Username</label>
        <input type="text" name="username" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="text" name="password" class="form-control">
    </div>
    <input type="submit" value="Register" class="btn btn-success mb-5">
</form>



<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_REQUEST["username"];
    $password = $_REQUEST["password"];

    $query3 = "SELECT * FROM userdata WHERE username = '$username';";
    $data3 = mysqli_query($conn, $query3);
    $arr3 = mysqli_fetch_all($data3, MYSQLI_NUM);
    $blank_array = array();
    if ($arr3 != $blank_array) {
        echo "<p class='text-danger h5'>Sorry! Username already exists. Please try with another username.</p>" . $br;
    } else {
        $query = "INSERT INTO userdata (username, password) VALUES ('$username', '$password');";
        $query2 = "INSERT INTO biodata (username) VALUES ('$username')";
        $data = mysqli_query($conn, $query);
        $data2 = mysqli_query($conn, $query2);

        if ($data && $data2) {

            header("location: login.php");
        } else {
            echo "data insertion failed.";
        }
    }
}
?>



<?php include("template/footer.php"); ?>