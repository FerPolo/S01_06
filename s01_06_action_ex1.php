<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") 
  $name = htmlspecialchars($_POST['nom']);
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo  "El teu nom es $name";
  }
?>
