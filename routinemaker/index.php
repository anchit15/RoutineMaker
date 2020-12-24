<?php
session_start();
include_once "connection.php";
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
        <link rel="stylesheet"  href = "style.css">
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
                    <a href="login.php"> 
                      <button type="button" class="btn btn-warning">Admin Login</button>
                     </a>
                </ul>
            </div>
        </nav>
       
            
        <div class="main">
            <div class="wrapper">
                        
                <h3> To View Full Routine Click Below</h3>
                <button type = "button" class= "btn-view"> View Full Routine </button>
                
                <br> <br>

                <h3> Please Select Level & Term to View Routine </h3>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Select Level</label>
                  </div>
                  <select class="custom-select" id="inputGroupSelect01">
                    <option selected>Choose...</option>
                    <option value="1">Level-1</option>
                    <option value="2">Level-2</option>
                    <option value="3">Level-3</option>
                  </select>
                </div><br>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Select Term</label>
                  </div>
                  <select class="custom-select" id="inputGroupSelect01">
                    <option selected>Choose...</option>
                    <option value="1">Term-1</option>
                    <option value="2">Term-2</option>
                    <option value="3">Term-3</option>
                  </select>
                </div>
               

                
                <br>

                <button type="submit" class="btn btn-success">View Routine</button>
                

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