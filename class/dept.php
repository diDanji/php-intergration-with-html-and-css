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
<!-- <nav>
        <ul>
            <li><a href="#">student</a></li>
            <li><a href="#">Department</a></li>
            <li><a href="#">Course </a></li>
            <li><a href="#">Marks</a></li>
            
        </ul>
    </nav> -->
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
<!-- <div class="column">
<div class="input-box">
            <label >Access No</label>
            <input type="text" placeholder="Enter Access No" required />

        </div>
        <div class="input-box">
            <label >Email</label>
            <input type="text" placeholder="enter email address" required />

        </div> -->
<!-- 
</div>
<div class="gender-box">
    <h3>Gender</h3>
    <div class="gender-option">
        <div class="gender">
        <input type="radio" id="check-male" name="gender"/>
        <label for="check">Male</label>
        </div>
    <div class="gender">
        <input type="radio" id="check-Female" name="gender" />
        <label for="check-female">Female</label>
    </div>
    </div> 
    <div class="column">
        <div class="select-box">
            <select name="#">
                <option value="#" hidden>Year</option>
                <option value="#">1</option>
                <option value="#">2</option>
                <option value="#">3</option>
            </select>
        </div>
        <div class="select-box">
            <select name="#">
                <option value="#" hidden>semester</option>
                <option value="#">1</option>
                <option value="#">2</option>
            </select>
        </div>
    </div>
 </div> -->

 <button>Submit</button>
 </form>
</section>

    
</body>
</html>