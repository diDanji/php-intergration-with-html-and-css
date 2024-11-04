<?php

$conn = new mysqli('localhost', 'root', '', 'campus');


if ($conn-> connect_error) {
    die("Error connecting to database: " . $connection->error);

}else {
    echo "Connection established successfully ";
}

?>