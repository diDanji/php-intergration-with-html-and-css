<?php
//connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "campus";

//connection creation
$conn = new mysqli("localhost", "root", "", "campus");

//checking connection
 if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else {
    echo "connection established successfully";
}

//collect form data

//student form
// $first_name = $_POST['first_name'];
// $last_name = $_POST['last_name'];
// $reg_no = $_POST['reg_no'];
// $access_no = $_POST['access_no'];
// $email = $_POST['email'];
// $dept_no = $_POST['dept_no'];
// $gender = $_POST['gender'];

//dept form
$HOD = $_POST['HOD'];
$Dept_no = $_POST['Dept_no'];

// //course form
// $Course_name = $_POST["Course_name"];
// $Course_code = $_POST["Course_code"];
// $Year = $POST["Year"];
// $Semester = $POST["Semester"];

// //marks form
// $mark_id = $_POST["mark_id"];
// $marks = $_POST["marks"];
// $comment = $_POST["comment"];
// $grade = $_POST["grade"];
// $Course_code = $_POST["Course_code"];


        // $sql = "INSERT INTO student( first_name, last_name, reg_no, access_no, email, dept_no, gender )
        //             VALUES ('$first_name', '$last_name', '$reg_no', '$access_no', '$email', '$dept_no', '$gender' )";

      
      //records data successfully
      $sql = "INSERT INTO department( HOD, Dept_no )
        VALUES ('$HOD', '$Dept_no')";

                if($conn -> query($sql) === TRUE) {
                    echo "Data saved successfully";
                } else{
                    echo "data saved failed";
                }

        // leaves out some data (year and semester)
        // $sql = "INSERT INTO course( Course_name, Course_code, Year, semester)
        // VALUES ('$Course_name', '$Course_code', '$Year', '$Semester' )";


        // $sql = "INSERT INTO mark( mark_id, marks, comment, grade, Course_code  )
        // VALUES ('$mark_id', '$marks', '$comment', '$grade', '$Course_code' )";


                










?>