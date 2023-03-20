<?php
$username = "root";
$password = "2003";
$database = "academico";

$mysqli = new mysqli("localhost", $username, $password, $database);

// Don't forget to properly escape your values before you send them to DB
// to prevent SQL injection attacks.

$id = $mysqli->real_escape_string($_POST['id']);
$first_name = $mysqli->real_escape_string($_POST['first_name']);
$lastname = $mysqli->real_escape_string($_POST['last_name']);
$user = $mysqli->real_escape_string($_POST['user']);
$pssword = $mysqli->real_escape_string($_POST['pssword']);

$query = "INSERT INTO users (col1, col2, col3, col4, col5)
            VALUES ('{$id}','{$first_name}','{$last_name}','{$user}','{$pssword}')";

$mysqli->query($query);
$mysqli->close();

?>