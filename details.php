<?php
include("template/header.php");
require "conn.php";


$id = $_REQUEST["id"];
$query = "SELECT * FROM biodata WHERE id='$id'";
$data = mysqli_query($conn, $query);

$arr = mysqli_fetch_all($data, MYSQLI_NUM);

for ($i = 0; $i < count($arr); $i++) {

    $id = $arr[$i][0];
    $full_name = $arr[$i][2];
    $district = $arr[$i][3];
    $birth_year = $arr[$i][4];
    $blood_group = $arr[$i][5];
    $education = $arr[$i][6];
    $gender = $arr[$i][7];

    
    echo "<strong>ID: </strong>" .$id.$br;
    echo "<strong>Full Name: </strong>" .$full_name.$br;
    echo "<strong>District: </strong>" .$district.$br;
    echo "<strong>Year of Birth: </strong>" .$birth_year.$br;
    echo "<strong>Blood Group: </strong>" .$blood_group.$br;
    echo "<strong>Medium of Education: </strong>" .$education.$br;
    echo "<strong>Gender: </strong>" .$gender.$br;
       
}
?>

<?php include("template/footer.php"); ?>
