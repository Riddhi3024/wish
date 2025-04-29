<?php
$conn = mysqli_connect("mysql", "root", "", "famillytree");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
