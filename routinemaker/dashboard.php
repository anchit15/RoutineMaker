<?php

$conn = mysqli_connect("localhost", "root", "", "routinemaker");
if($_REQUEST){
    $courseCode = $_POST['courseCode'];
    $courseSection = $_POST['courseSection'];
    $teacherInitial = $_POST['teacherInitial'];
    $roomNumber = $_POST['roomNumber'];
  

    $sql = "INSERT INTO assign(Course_Code, Course_Title, Course_Type, Course_Semester, Course_Credit)VALUES('$courseCode','$courseTitle','$courseType','$relevantSemester','$creditNumber')" ;
        if(mysqli_query($conn,$sql)){
            echo "Successful";
            header("Location:dashboard.php");
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
        <link rel="stylesheet" href = "style.css" />
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
                    <a href="assignCourse.php"> <li>Add Course </li> </a>
                    <a href="logout.php"> <li>Logout </li> </a>
                </ul>
            </div>
        </nav>
       
            
        <div class="main">
            <div class="wrapper">
                        
                <h3> To View Full Routine Click Below</h3>
                <button type = "button" class= "btn-view"> View Full Routine </button>
                
                <br> <br>
                <form action="" method="post">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <label class="input-group-text" for="inputGroupSelect01">Select Course</label>
                    </div>
                    <select class="custom-select" id="inputGroupSelect01">
                      <option selected>Choose...</option>
                      <?php
                        include "connection.php"; 
                        $records = mysqli_query($conn, "SELECT Course_Title, Course_Code From course"); 

                        while($data = mysqli_fetch_array($records))
                        {
                            echo "<option name='courseCode' value='" . $data['Course_Code'] . "'>" .$data['Course_Title'] ."- ".$data['Course_Code']."</option>";  // displaying data in option menu
                        }	
                    ?>  
                    </select>
                    <option value=""></option>
                  </div>
                <br>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Select Section</label>
                  </div>
                  <select class="custom-select" id="inputGroupSelect01">
                    <option selected>Choose...</option>
                    <option name="courseSection" value="A">A</option>
                    <option name="courseSection" value="B">B</option>
                    <option name="courseSection" value="C">C</option>
                    <option name="courseSection" value="D">D</option>
                    <option name="courseSection" value="E">E</option>
                    <option name="courseSection" value="F">F</option>
                    <option name="courseSection" value="G">G</option>
                    <option name="courseSection" value="H">H</option>
                    <option name="courseSection" value="I">I</option>
                  </select>
                </div>
                <br>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Select Teacher</label>
                  </div>
                  <select class="custom-select" id="inputGroupSelect01">
                    <option selected>Choose...</option>
                    <?php
                        include "connection.php"; 
                        $records2 = mysqli_query($conn, "SELECT Teacher_Name, Teacher_Initial From teacher"); 

                        while($data2 = mysqli_fetch_array($records2))
                        {
                            echo "<option name ='teacherInitial' value='" . $data2['Teacher_Initial'] . "'>" .$data2['Teacher_Name'] ."</option>";  
                        }	
                    ?>
                  </select>
                </div>
                <br>
                
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Select Room</label>
                  </div>
                  <select class="custom-select" id="inputGroupSelect01">
                    <option selected>Choose...</option>
                    <option name="roomNumber" value="101AB">101AB</option>
                    <option name="roomNumber" value="102AB">102AB</option>
                    <option name="roomNumber" value="103AB">103AB</option>
                    <option name="roomNumber" value="104AB">104AB</option>
                    <option name="roomNumber" value="105AB">105AB</option>
                    <option name="roomNumber" value="201AB">201AB</option>
                    <option name="roomNumber" value="202AB">202AB</option>
                    <option name="roomNumber" value="203AB">203AB</option>
                    <option name="roomNumber" value="204AB">204AB-LAB</option>
                    <option name="roomNumber" value="205AB">205AB-LAB</option>
                    <option name="roomNumber" value="301AB">301AB</option>
                    <option name="roomNumber" value="302AB">302AB</option>
                    <option name="roomNumber" value="303AB">303AB</option>
                    <option name="roomNumber" value="304AB">304AB-LAB</option>
                    <option name="roomNumber" value="305AB">305AB-LAB</option>
                  </select>
                </div>

                <br><br>
                <button type="submit" class="btn btn-success">Submit</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
              </form>
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