<?php include("template/header.php");
session_start();
require "conn.php";
?>

<?php
$username = $_SESSION["username"];
// echo "Your username is: ".$username;
?>

<?php
echo '<p class="h2 text-center text-primary mb-5">Bio data</p>';
?>

<form action="" method="post">
    <div class="mb-3">
        <label class="form-label">Full Name</label>
        <input type="text" name="full_name" value="" class="form-control">
    </div>
    <div class="mb-3">
        <select class="form-select" name="district">
            <option selected>Enter Your District</option>
            <option value="Dhaka">Dhaka</option>
            <option value="Rajshahi">Rajshahi</option>
            <option value="Khulna">Khulna</option>
            <option value="Barisal">Barisal</option>
            <option value="Sylhet">Sylhet</option>

        </select>
    </div>
    <div class="mb-3">
        <label class="form-label">Year of Birth</label>
        <input type="text" name="birth_year" value="" class="form-control">
    </div>
    <div class="mb-3">
        <select class="form-select" name="blood_group">
            <option selected>Blood Group</option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
        </select>
    </div>
    <div class="mb-3">
        <select class="form-select" name="education">
            <option selected>Medium of Education</option>
            <option value="Madrasa">Madrasa</option>
            <option value="General">General</option>
        </select>
    </div>
    <div class="mb-3">
        <select class="form-select" name="gender">
            <option selected>Your Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>
    </div>
    <input type="submit" value="Submit Your Biodata" class="btn btn-primary">
</form>



<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_REQUEST["full_name"];
    $district = $_REQUEST["district"];
    $birth_year = $_REQUEST["birth_year"];
    $blood_group = $_REQUEST["blood_group"];
    $education = $_REQUEST["education"];
    $gender = $_REQUEST["gender"];




    $query = "UPDATE biodata SET full_name = '$full_name', district = '$district', birth_year = '$birth_year', blood_group = '$blood_group', education = '$education', gender = '$gender' WHERE username = '$username';";

    $data = mysqli_query($conn, $query);
    if($data){
        header("location: home.php");
    }
}



?>


<?php include("template/footer.php"); ?>