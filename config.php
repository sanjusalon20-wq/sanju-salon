<?php

$conn = mysqli_connect("zephyr.proxy.rlwy.net", "root", "EgDIZkeQudzkJpAgozxAarDQotyXvCPG", "railway", 17485);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
