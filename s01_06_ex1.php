
 <?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $_SESSION["nom"] = $_POST["nom"];
    $_SESSION["email"] = $_POST["email"];
}
?>

<html>
<body>

<form action="s01_06_action.php" method="POST">
Name: <input type="text" name="nom"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

</body>
</html>