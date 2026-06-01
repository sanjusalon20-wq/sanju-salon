<?php

$conn = mysqli_connect("mysql.railway.internal", "root", "EgDIZkeQudzkJpAgozxAarDQotyXvCPG", "railway", 3306);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
