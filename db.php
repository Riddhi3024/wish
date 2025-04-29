<?php
$conn = mysqli_connect("mysql", "root", "rootpassword", "familytree");  // Use 'mysql' as the host in GitHub Actions

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
