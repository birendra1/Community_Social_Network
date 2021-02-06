<?php session_start();
                        if(isset($_SESSION['registerid']))
                        {
                        	$id = $_SESSION['registerid'];
                        	$con = mysqli_connect("localhost","root",'',"communitynetworking") or die('$con');
                        	$sql = "select * from useracc where registerid = $id ";
                        	$result = mysqli_query($con,$sql) or die(mysqli_error($con));
                        	$row=mysqli_fetch_array($result);
                        	$name = $row['name'];
                        }
                        	?>
<!Doctype html>
<html>
<head>
<style>
body{background-image: url(admin2.jpg);
background-repeat: no-repeat;
background-size: cover; }

.buttondesign{font-size:35px;
         font-weight:25px;
    }
.button{background-color:green;
}

  h1{color:hsl(336, 100%, 23%);
  text-decoration-line: underline;
 
   }
   .admin{font-size: 24px;
      color:#a2e504}
          .userrequest{color:#0723bf;
                 font-size: 33px;
                  background:#189b0f;
                  width: 280px;
                  border-radius: 18px; 
                  border-color: orange}
</style>
</head>

<body>

<h1 align="center">Admin Panel</h1>
<div style="float:right;padding-top=30px" >
<table class="admin"><tr><td>Regd. Id :</td><td><?php echo $id ;?></td></tr>
<tr><td>Name :</td><td><?php echo "$name" ;?></td></tr>
</table>
</div>


<div>

<table width=100% span=10px spacing=5px padding-top=3px class="buttondesign" >
<tr><td><form method="get" action="userrequest.php"><button type="submit" class="userrequest">User Request</button></form></td><td><form method="get" action="chatting.php"><button type="submit" class="userrequest">Messages</button></form></td><td><form method="get" action="noticeboard.php"><button type="submit" class="userrequest">Notice Board</button></form></td>
<td><form method="get" action="profile.php"><button type="submit" class="userrequest">Profile</button></form></td><td><form method="get" action="logout.php"><button type="submit" class="userrequest">Logout</button></form></td></tr>
</table>
</div>
</body>
</html>