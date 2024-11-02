<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>marks page</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<div class="body">
   <div class="container">
    <div class="title">marks page</div>
    <form action="process.php" method="POST">
        <div class="user-details">
            <div class="input-box">
                <span class="details">Marks ID</span>
                <input type="text" name="marks_id" placeholder="" required>
            </div>
            <div class="input-box">
                <span class="details">registration number</span>
                <input type="text" name="registration_number" placeholder="provide student registration number" required>
            </div>
            <div class="input-box">
                <span class="details">Course Id</span>
                <input type="text" name="course_id" placeholder="provide course id" required>
            </div>
            <div class="input-box">
                <span class="details">marks</span>
                <input type="text" name="marks" placeholder="please enter marks" required>
            </div>
            <div class="input-box">
                <span class="details">comment</span>
                <input type="text" name="comment" placeholder="please your comment" required>
            </div>
            <button type="submit" class="btn">submit</button> 
    </form>
   </div>
   </div>
</body>
</html>