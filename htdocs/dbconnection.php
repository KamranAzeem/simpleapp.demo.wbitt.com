<?php 

// This file /script expects 'DB_*'  ENV variables defined in the OS environment.

echo '<h1>Simple PHP application! </h1>'; 

echo "This file /script expects 'DB_*'  ENV variables defined in the OS environment."  . PHP_EOL . "<br>";
echo "If you have not defined them, then you will see errors below." . PHP_EOL . "<br>";

// Note: we are not defining any variables in this file. 
// We are expecting them in the container's environment and we will just use them.
// We can perform checks to see if any of the expected variables are empty.

// Enable following four lines only for debugging connection problems:
// echo "DB_SERVER: " . $_ENV["DB_SERVER"] . "<br>";
// echo "DB_USER: " . $_ENV["DB_USER"] . "<br>";
// echo "DB_PASSWORD: " . $_ENV["DB_PASSWORD"] . "<br>";
// echo "DB_NAME: " . $_ENV["DB_NAME"] . "<br>";


// Establish DB connection:
$link = mysqli_connect($_ENV["DB_SERVER"], $_ENV["DB_USER"], $_ENV["DB_PASSWORD"], $_ENV["DB_NAME"]);

// Check if it works:

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL . "<br>";
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL . "<br>";
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL . "<br>";
    exit;
}

echo "Success: A proper connection to MySQL was made successfully! " . PHP_EOL . "<br>";
echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL . "<br>";

mysqli_close($link);

?> 
