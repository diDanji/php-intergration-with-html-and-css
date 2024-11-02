<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>course page</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<div class="body">
   <div class="container">
    <div class="title">course page</div>
    <form action="process.php" method="POST">
        <div class="user-details">
            <div class="input-box">
                <span class="details">Course</span>
                <input type="text" name="course" placeholder="plese enter your program" required>
            </div>
            <div class="input-box">
                <span class="details">Course Id</span>
                <input type="text" name="username" placeholder="enter your username" required>
            </div>
            <div class="input-box">
                <span class="details">year</span>
                <input type="text" name="year" placeholder="enter your year" required>
            </div>
            <div class="input-box">
                <span class="details">semester</span>
                <input type="text" name="semester" placeholder="1" required>
            </div>
            <button type="submit" class="btn">submit</button> 
    </form>
   </div>
   </div>
</body>
</html>