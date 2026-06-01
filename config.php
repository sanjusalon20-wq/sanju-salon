<?php

$conn = mysqli_connect("mysql.railway.internal", "railway", "EgDIZkeQudzkJpAgozxAarDQotyXvCPG", "railway");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
