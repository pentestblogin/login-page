<?php
include("config.php");
session_start();
?>
<html>
  <head>
    <titile><Login Page</Login></title>
  </head>

  <body bgcolor="pink">
    <h3 id="logo"><img src="pttt.png" width="100" height="100" align="right"/></h3>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
   <form method="POST" action="">
   <center>  
    <h2 style="color:red; align:center;">Username:</h2><input type="text" size="30" name="username"/>
  
     </br>
     </br>
     </br>
    <h2 style="color:red; align:center;"> Password:</h2><input type="password"  size="30" name="password"/>
    </br>
    </br>
     </br>
    <input type="submit" value="login" size="30" name="submit"/>
    </center>
   </form>

  </body>
 


</html>

<?php
// Check connection

if(isset($_POST['submit']))
{

    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $query = "SELECT * FROM users WHERE username='$username' and password='$password'";
      
    $data = mysqli_query($con,$query);
    $total = mysqli_num_rows($data);
    if($total==1)
     {
        header("location:index.php");
     }
     else
      {
          echo "<center><h2>Username & Password Incorrect</h2></center>";
      }
    

}
?>



