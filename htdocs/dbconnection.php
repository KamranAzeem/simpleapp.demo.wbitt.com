<?php 

// This file /script expects 'MYSQL_*'  ENV variables defined in the OS environment.

echo '<h1>Simple PHP application! </h1>'; 

echo "This file /script expects 'MYSQL_*'  ENV variables defined in the OS environment."  . PHP_EOL . "<br>";
echo "If you have not defined them, then you will see errors below." . PHP_EOL . "<br>";
echo PHP_EOL . "<br>";
echo PHP_EOL . "<br>";
// Note: we are not defining any variables in this file. 
// We are expecting them in the container's environment and we will just use them.
// We can perform checks to see if any of the expected variables are empty.

// Enable following four lines only for debugging connection problems:
// echo "MYSQL_HOST: " . $_ENV["MYSQL_HOST"] . "<br>";
// echo "MYSQL_USER: " . $_ENV["MYSQL_USER"] . "<br>";
// echo "MYSQL_PASSWORD: " . $_ENV["MYSQL_PASSWORD"] . "<br>";
// echo "MYSQL_DATABASE: " . $_ENV["MYSQL_DATABASE"] . "<br>";


// Establish DB connection:
$link = mysqli_connect($_ENV["MYSQL_HOST"], $_ENV["MYSQL_USER"], $_ENV["MYSQL_PASSWORD"], $_ENV["MYSQL_DATABASE"]);

// Check if it works:

if (!$link) {
    echo "Error: Unable to connect to MySQL using the credentials provided as MYSQL_* environment variables." . PHP_EOL . "<br>";
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL . "<br>";
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL . "<br>";
    exit;
}

echo "<b>Success!</b> Connected to MySQL server, using the credentials provided as MYSQL_* environment variables!" . PHP_EOL . "<br>";
echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL . "<br>";

// Enable the following to show extra information on the web page:
// echo "The following information was used for this connection:" . PHP_EOL . "<br>";
// echo "MYSQL_HOST: " . $_ENV["MYSQL_HOST"] . "<br>";
// echo "MYSQL_USER: " . $_ENV["MYSQL_USER"] . "<br>";
// echo "MYSQL_PASSWORD: " . $_ENV["MYSQL_PASSWORD"] . "<br>";
// echo "MYSQL_DATABASE: " . $_ENV["MYSQL_DATABASE"] . "<br>";


mysqli_close($link);

?> 
