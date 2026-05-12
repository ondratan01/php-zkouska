<!-- <?php
session_start();
 if (!isset($_SESSION["user_id"])) {
    header("Location: login.html");
 }




?> -->


<?php
session_start();


$correct_username = "admin";
$correct_password = "1234";

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username == $correct_username && $password == $correct_password) {

        $_SESSION["loggedin"] = true;
        $_SESSION["username"] = $username;

        header("Location: dashboard.php");
        exit();

    } else {
        $error = "Špatné jméno nebo heslo!";
    }
}
?>