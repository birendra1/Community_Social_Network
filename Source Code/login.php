<?php
        session_start();
        if(isset($_POST['login']))
        {
        $con= mysqli_connect("localhost","root",'',"communitynetworking") or die('$con');
        $registerid = $_POST['registerid'];
        $password = $_POST['password'];
        $login="Select * from useracc";
$login_s= mysqli_query($con,$login) or die(mysqli_error($con));
if(mysqli_num_rows($login_s)==0)
{
echo 'no users exist in the database';
}
else{
    while($row=mysqli_fetch_array($login_s))
    {
            if($registerid==$row['registerid'])
            {
                if($password==$row['password'])
                {
                  if($row['status'] == 1)
                  {
                    $_SESSION['registerid']=$row['registerid'];
                    if($row['usertype'] == "Admin" )
                      {
                        header('location:admin.php');
                        exit;
                      }
                    else if($row['usertype'] == "Faculty")
                     {
                      header('location:faculty.php');
                       exit;
                     }
                    else
                     {
                       header('location:student.php');
                        exit;
                     }
                   }
                  else
                   {
                    header('Location:waiting.php');
                    exit;
                   } 
               
            }
            else 
             {
                header('location:index.php?error_pass=worng password');
                exit;
             }
             }
             else
             { $dbs=1;}
    }
    if($dbs)
    {
        header('location:index.php?error_email= Email Doesn\'t Exist! want an account.');
    }
}}
?>
<html>
<head>
<style>
.reset,.login,.forgotpassword
                    {font-size:22px;
					 color:#6a1684;
					  background:white;
					  background-color:orange;
					  background-repeat:teal;
					}


  .reset:hover{background: #14b72f}
  .login:hover{background: #14b7a6}
  .forgotpassword:hover{background: #8e870d}

  h1{color:#02e3ef;
  text-decoration-line: underline;
     text-decoration-style: wavy;
   }
   h1:hover{background: teal;}
  h2{color:#ed09cb;
      font-size:39px;
       background: :#222222;
	  }
	 h2:hover{text-decoration: underline;
             color: orange;}
	table{ background-color: rgba(160, 154, 35, 0.8);
		}
 .tr2:hover {background-color: #052288;}
	.tr1:hover {background-color: #052288;}		
 th,td{  font-size:22px;
           font-family:arial;
		   color:white}
  body{background-image:url("loginimage.jpg");
         background-repeat: no-repeat;
         background-size: cover;         }
    .reset,.login,.forgotpassword{border-radius: 12px;}
</style>
<script src="loginValidation.js"></script>
</head>
<body>
<b><h1 align="center" >Community Social Network</h1></b>

<div style="float:left; padding-left:475px; padding-top:195px" >
<h2>Login</h2>

<form action="login.php" method="post" onsubmit="return loginValidation()">
 <table>
   <tr class="tr1">
   <td>
  Regd No: </td>
  <td><input type="number" name="registerid" autofocus="autofocus id="register" required="" ></td></tr>
<tr class="tr2">
  <td>  
  Password   :</td>
  <td><input type="password" name="password" required ></td></tr>
  <tr><td><input type="reset" name="reset" class="reset"></td><td>
  <input type="submit" value="Login" name="login" class="login"></td>
  <td><input type="reset" value="Forgot password" name="forgot" class="forgotpassword" ></td></tr>
  
  </table>

  </form>
  </div>
</body>
</html>