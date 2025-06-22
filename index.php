<?php
// Set default timezone
date_default_timezone_set('UTC');

// Simple dynamic content
$time = date("Y-m-d H:i:s");
$ip = $_SERVER['REMOTE_ADDR'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome to My PHP App</title>
</head>
<body>
    <h1>🚀 PHP App Deployed on Azure!</h1>
    <p>Current server time is: <strong><?php echo $time; ?></strong></p>
    <p>Your IP address is: <strong><?php echo $ip; ?></strong></p>
</body>
</html>
