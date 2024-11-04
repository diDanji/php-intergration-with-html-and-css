<?php

$conn = new mysqli("localhost", "root", "", "campus");


if ($conn-> connect_error) {
    die("Error connecting to database: " . $connection->error);

}else {
    echo "Connection established successfully ";
}


include 'connection.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM department WHERE Dept_no = '$id'";
        $results = $conn->query($sql);

        if ($results->num_rows > 0) {
            $row = $results-> fetch_assoc();

            ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        button{
            height: 55px;
            width: 50%;
            background: rgb(130, 106, 251);
            color: #fff;
            font-size: 1rem;
            border: none;
            margin-top: 30px;
            cursor: pointer;
            font-weight: 400;
            border-radius: 6px;
            transition: all 0.2s ease;
            align-items: center;
            }

        button:hover{
            background: rgb(88, 56, 250);
            }

        form{
            margin-top: 30px;

            }

        input{
            width: 50%;
            margin-top: 20px;
            padding: 15px;
            border-radius: 8px;
            
             
            }

        label{
            color: #333;
            }
            
            </style>
</head>
<body>
            <form action="edit.php" method="POST">
        <input type="hidden" name=" Dept_no" value="<?php echo $row['Dept_no']; ?>">
        <label for="">HOD</label>
        <input type="text" name="HOD" value="<?php echo $row['HOD']; ?>">
        <button type="submit">Save</button>
    </form>
            </body>
            </html>

            
        
            <?php
} else{
    echo "Record not found";
}
}
?>



