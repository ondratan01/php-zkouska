<?php
$correct_username = "admin";
$correct_password = "admin";
$error = "";
$logged_in = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === $correct_username && $password === $correct_password) {
        $logged_in = true;
    } else {
        $error = "Špatné jméno nebo heslo!";
    }
}
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>

<?php
if (!empty($error)) {
    echo "<p style='color:red;'>$error</p>";
}

if ($logged_in) {
    echo "<p>Jsi přihlášený! (ale po refreshi už nebudeš)</p>";
} else {
?>
    <form method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        <br>
        <button type="submit">Login</button>
    </form>
<?php
}
?>

</body>
</html>