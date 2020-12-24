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
                    <a href="index.php"> <li>Home </li> </a>
                </ul>
            </div>
        </nav>
        
      
        <div class="main">
            <div class="wrapper">
                
                <div class="login">
                    <h3>Admin Login</h3>
                    
                    <form action="" method="post">
                        <span class="name">Username</span>
                        <input type="text" id="uname" name="username" placeholder="Enter Username" /> <br>
                       

                        <span class="name">Password</span>
                        <input type="password" id="pass" name="password" placeholder="Enter Password" /> <br>

                        <input type="submit" name="submit" placeholder="LOG IN" />
                        <input type="reset" name="reset" placeholder="RESET" /> <br>

                        <?php
                        if($_REQUEST){
                            if(($_POST['username']=='admin') and ($_POST['password']=='12345')){
                                session_start();
                                $_SESSION['username']=$_POST['username'];
                                header("Location:dashboard.php");
                            } else{
                                echo "<script>
                                alert ('Wrong username or password');
                                window.location.replace('login.php');
                                </script>";
                            }
                        }
                        ?>
                       

                    </form>
                </div>
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