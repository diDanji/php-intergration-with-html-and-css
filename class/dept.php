<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>department form</title>
 <link rel="stylesheet" href="style.css">

 <style>
    body{
        background-image: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url(image/ucu.webp);
    }
   
 </style>
</head>
<body>

<?php
include("connection.php");
include("edit.php");
include("delete.php");
?>

    <section class="container"> 
   
    <header>Department Form</header>
    <form action="process.php" class="form" method="POST">
        <div class="input-box">
            <label >Head of Department</label>
            <input type="text" name="HOD" placeholder="Enter Full Name" required />

        </div>
        <div class="input-box">
            <label >Dept No</label>
            <input type="text" name="Dept_no" placeholder="Enter Department_No" required />
</div>


 <button>Submit</button>
 </form>
</section>





    
</body>
</html>