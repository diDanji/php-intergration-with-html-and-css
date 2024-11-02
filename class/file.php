<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student form</title>
 <link rel="stylesheet" href="style.css">
</head>
<body>

    <section class="container"> 
   
    <header>Student Registration Form</header>

    <form action="process.php" class="form" method="POST">
        <div class="input-box">
            <label >First Name</label>
            <input type="text" name="first_name" placeholder="Enter first name " required />
        
        </div>

        <div class="input-box">
            <label >Last Name</label>
            <input type="text" name="last_name" placeholder="Enter last name" required />

        </div>
        <div class="input-box">
            <label >Reg No</label>
            <input type="text" name="reg_no" placeholder="Enter Reg_No" required />
</div>
<div class="column">
<div class="input-box">
            <label >Access No</label>
            <input type="text" name="access_no" placeholder="Enter Access No" required />

        </div>
        <div class="input-box">
            <label >Email</label>
            <input type="text" name="email" placeholder="Enter email address" required />

        </div>

</div>

 <div class="input-box">
            <label >Dept No</label>
            <input type="text" name="dept_no" placeholder="Enter Department_No" required />
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
 <button>Submit</button>
 </form>
</section>

    
</body>
</html>