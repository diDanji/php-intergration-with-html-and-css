<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mark form</title>
 <link rel="stylesheet" href="style.css">
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
   
    <header>Marks Form</header>
    <form action="process.php" class="form" method="POST">
        <div class="input-box">
            <label >Marks Id</label>
            <input type="text" name="mark_id" placeholder="Enter mark id" required />

        </div>
        <div class="input-box">
            <label >Marks</label>
            <input type="text" name="marks" placeholder="Enter marks" required />
</div>

<div class="column">
<div class="input-box">
            <label >Comment</label>
            <input type="text" name="comment" placeholder="Give a comment" required />

        </div>
        <div class="input-box">
            <label >Grade</label>
            <input type="text" name="grade" placeholder="Enter your grade" required />

        </div>

</div>
<div class="input-box">
            <label >Course code</label>
            <input type="text" name="Course_code" placeholder="Enter Course code" required />
</div>


<!-- <div class="gender-box">
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
    </div>  -->
    <!-- <div class="column">
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