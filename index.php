<?php include("template/header.php");
session_start();
require "conn.php";
?>




<?php

$query = "SELECT * FROM biodata";

$data = mysqli_query($conn, $query);
$arr = mysqli_fetch_all($data, MYSQLI_NUM);

// print_r($arr);


?>

<?php

if (isset($_SESSION["ahanaf"])) {
    echo '<a class="btn btn-primary" href="home.php">Go to Dashboard</a>';
} else {
    echo '<a class="btn btn-primary" href="login.php">Login</a>
<a class="btn btn-primary" href="register.php">Register</a>';
}

?>





<p class="h2 text-success text-center my-3">Search</p>

<form action="" method="post">
    <div class="mb-3">
        <label class="form-label">I'm finding: </label>
        <select class="form-select" name="gender">
            <!-- <option selected>Your Gender</option> -->
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>
    </div>

    <div class="mb-3">
        <label class="form-label">District: </label>
        <select class="form-select" name="district">
            <option selected value="all_district">All District</option>
            <option value="Dhaka">Dhaka</option>
            <option value="Rajshahi">Rajshahi</option>
            <option value="Khulna">Khulna</option>
            <option value="Barisal">Barisal</option>
            <option value="Sylhet">Sylhet</option>

        </select>
    </div>
    <input type="submit" value="Find your life partner" class="btn btn-warning mb-5">
</form>


<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $gender = $_REQUEST["gender"];
    $district = $_REQUEST["district"];

    if ($district == "all_district") {
        $query = "SELECT * FROM biodata WHERE gender = '$gender';";
    } else {
        $query = "SELECT * FROM biodata WHERE gender = '$gender' AND district = '$district';";
    }

    $data = mysqli_query($conn, $query);
    $arr = mysqli_fetch_all($data, MYSQLI_NUM);
}

?>





<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Full Name</th>
            <th scope="col">District</th>
            <th scope="col">Birth Year</th>
            <th scope="col">Education</th>
            <th scope="col">Gender</th>
            <th scope="col">View Details</th>
        </tr>
    </thead>
    <tbody>

        <?php
        if ($arr == array()) {
            echo "Sorry! No data found.";
        } else {
            for ($i = 0; $i < count($arr); $i++) {

                $id = $arr[$i][0];
                $full_name = $arr[$i][2];
                $district = $arr[$i][3];
                $birth_year = $arr[$i][4];
                $education = $arr[$i][6];
                $gender = $arr[$i][7];

                $details = '
                <form method="get" action="details.php">
                <input type="number" name="id" value="' . $id . '" style="display: none;">
                <input type="submit" value="Details" class="btn btn-info text-light">
                </form>
                ';

                if ($birth_year != 0) {
                    echo "<tr>";
                    echo '<th scope="row">' . $id . '</th>';
                    echo '<td>' . $full_name . '</td>';
                    echo '<td>' . $district . '</td>';
                    echo '<td>' . $birth_year . '</td>';
                    echo '<td>' . $education . '</td>';
                    echo '<td>' . $gender . '</td>';
                    echo '<td>' . $details . '</td>';

                    echo "</tr>";
                }
            }
        }



        ?>

    </tbody>
</table>


<?php include("template/footer.php"); ?>