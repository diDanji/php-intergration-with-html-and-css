<?php

$conn = new mysqli('localhost', 'root', '', 'campus');


if ($conn-> connect_error) {
    die("Error connecting to database: " . $connection->error);

}else {
    echo "Connection available ";
}

include 'connection.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM department WHERE Dept_no = '$id'";

        if ($conn->query($sql) === TRUE) {
            echo "Record deleted succesfully";
            header("Location: dept_details.php");
} else {

        echo "Error deleting record: " . $conn->error;
    }

}

    
?>