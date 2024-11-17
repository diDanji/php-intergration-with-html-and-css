<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course form</title>
 <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="container"> 
   
    <header>Course Entry</header>
    <form action="process.php" class="form" method="POST">
        <div class="input-box">
            <label >Course name</label>
            <input type="text" name="Course_name" placeholder="Enter course name" required />

        </div>
        <div class="input-box">
            <label >Course code</label>
            <input type="text" name="Course_code" placeholder="Enter code" required />
</div>


    <div class="column">
        <div class="select-box">
            <select name="Year">
                <option value="#" hidden>Year</option>
                <option value="#">1</option>
                <option value="#">2</option>
                <option value="#">3</option>
            </select>
        </div>
        <div class="select-box">
            <select name="Semester">
                <option value="#" hidden>semester</option>
                <option value="#">1</option>
                <option value="#">2</option>
            </select>
        </div>
    </div>
 </div>

 <button>Submit</button>
 </form>
</section>

    
</body>
</html>