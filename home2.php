<?php

$username = $_SESSION["username"];
$query = "SELECT username, full_name FROM biodata WHERE username = '$username';";
$data = mysqli_query($conn, $query);

$arr = mysqli_fetch_all($data, MYSQLI_NUM);

if($arr[0][1] == null){
    echo '<a href="biodata_updater.php" class="btn btn-warning">You have not completed your biodata. Click here to complete it.</a>';
}elseif($arr[0][1] != null){
    echo $br . '<a href="biodata_updater2.php" class="btn btn-success">You have completed your biodata. If you want, you can edit it by clicking here</a>';
}
