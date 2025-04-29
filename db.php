<?php
// Check if we're in GitHub Actions environment
$host = getenv('GITHUB_ACTIONS') ? 'mysql' : 'localhost';  // Default to 'mysql' in GitHub Actions, 'localhost' locally

$conn = mysqli_connect($host, "u800183464_familyhub", "Nf1US9:b*", "u800183464_familyhub");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
