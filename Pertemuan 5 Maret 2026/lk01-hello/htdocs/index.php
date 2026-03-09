<?php
$host = 'db';
$user = 'root';
$pass = 'farrel';
$db_name = 'hello_db';
$conn = new mysqli($host, $user, $pass, $db_name);
if ($conn->connect_error) {
    die("<h2>KONEKSI DB LU GAGAL!: " . $conn->connect_error . "</h2>");
}
echo "<h1>Hello World!</h1>";
echo "<p>Database MySQL di Docker terhubung</p>";
?>