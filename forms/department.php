<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Department form</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<div class="body">
   <div class="container">
    <div class="title">Department form</div>
    <form action="process.php" method="POST">
        <div class="user-details">
            <div class="input-box">
                <span class="details">Department name</span>
                <input type="text" name="dept_name" placeholder=" enter department name" required>
            </div>
            <div class="input-box">
                <span class="details">Department Id</span>
                <input type="text" name="dept_id" placeholder="enter department_id" required>
            </div>
            <div class="input-box">
                <span class="details">Head of Department</span>
                <input type="text" name="HOD" placeholder="enter the HOD" required>
            </div>
            <!-- <div class="input-box">
                <span class="details">contact</span>
                <input type="text" placeholder="+256*******" required>
            </div>
            <div class="input-box">
                <span class="details">Department id</span>
                <input type="text" placeholder="dept/00***" required>
            </div> -->
            
           

            <button type="submit" class="btn">Enter data</button> 
    </form>
   </div>
   </div>
</body>
</html>