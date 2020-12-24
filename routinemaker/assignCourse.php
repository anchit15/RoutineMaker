<?php
$conn = mysqli_connect("localhost", "root", "", "routinemaker");
if($_REQUEST){
    $courseTitle = $_POST['courseTitle'];
    $courseCode = $_POST['courseCode'];
    $courseType = $_POST['courseType'];
    $relevantSemester = $_POST['relevantSemester'];
    $creditNumber = $_POST['creditNumber'];

    $sql_2 = "SELECT * FROM course WHERE Course_Code='$courseCode'";
    $result_2 = mysqli_query($conn,$sql_2);

    if (mysqli_num_rows($result_2) > 0) {                        
        echo "<script>
        alert ('Course already exists');
        window.location.replace('assignCourse.php');
        </script>";
    } else{
        $sql = "INSERT INTO course(Course_Code, Course_Title, Course_Type, Course_Semester, Course_Credit)VALUES('$courseCode','$courseTitle','$courseType','$relevantSemester','$creditNumber')" ;
        if(mysqli_query($conn,$sql)){
            echo "Successful";
            header("Location:assignCourse.php");
    }
    
}
}



?>





<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8" />
        <meta name="author" content="John Anchit" />
        <meta name="description" content="Routine Generator System"/>
        <meta name="keywords" content="Keywords for SEO"/>

        <title>
            ROUTINE GENERATOR
        </title>
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href = "style.css">
    </head>

    <body>
     
        <header class="header">
            <div class="wrapper">
                <h1>ROUTINE GENERATOR</h1>
            </div>
        </header>

       
        <nav class="menu">
            <div class="wrapper">
                <ul>
                    <a href="dashboard.php"> <li>Dashboard </li> </a>
                    <a href="assignTeacher.php"> <li>Add Teacher </li> </a>
                    <a href="logout.php"> <li>Logout </li> </a>
                </ul>
            </div>
        </nav>
       
            
        <div class="main">
            <div class="wrapper">
              <form action="" method = "post">
                <div class="form-group">
                  <label for="formGroupExampleInput">Name of the Course</label>
                  <input type="text" name="courseTitle" class="form-control" id="formGroupExampleInput">
                </div>
                <div class="form-group">
                  <label for="formGroupExampleInput">Course Code</label>
                  <input type="text" name="courseCode" class="form-control" id="formGroupExampleInput" >
                </div>
                <div class="form-group">
                  <label for="formGroupExampleInput">Course Type</label>
                  <input type="text" name="courseType" class="form-control" id="formGroupExampleInput" >
                </div>
                <div class="form-group">
                  <label for="formGroupExampleInput">Number of Credits</label>
                  <input type="text" name="creditNumber" class="form-control" id="formGroupExampleInput">
                </div>
                <div class="form-group">
                  <label for="formGroupExampleInput">Relevant Semester</label>
                  <input type="text" name="relevantSemester" class="form-control" id="formGroupExampleInput" >
                </div>
                <br>
                <input type="submit" value="addCourse">
              </form>
              <br>
               
                   
                <br>

                <button type="submit" class="btn btn-success">Add Course</button>
                

            </div>
        
        </div>
        
        <footer class="footer">
            <div class="wrapper">
                <p>&copy; All Rights Reserved 2020. </p>
            </div>  
        </footer>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script> 
        
    </body>
              
</html>