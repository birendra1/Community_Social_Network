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
 body{background:hsl(24, 100%, 30%);}

.buttondesign,.button{font-size:35px;
       
    font-weight:25px;
    }
.button{background-color:white;
}

  p{color:#efd809;
  text-decoration-line: underline;
     font-size: 28px;
   }

   .admintable{font-size:25px;
   				padding-left: 5px;
   				 padding-right: 35px;
   				 margin-top: 10px;

               }
    .description{font-size: 25px;
    			padding-top: 40px;
    		    padding-right: 15px}
    .submit{color:black;
            background: orange;
             font-size: 28px;
             border-radius: 18px;}
     .reset{ color:black;
              background: #c68017;
              border-radius: 12px;
              font-size: 28px; }
.admindetails{font-size: 21px;
                 color:#09efb9;
                 margin-top: 2px;
               }
   .datainsert{padding-top: 30px;
                padding-left: 20px;}
    .notice{font-size: 24px;
           color:#c8d811;}
    .userrequest{color:#0723bf;
                 font-size: 33px;
                  background:#189b0f;
                  width: 280px;
                  border-radius: 15px; }
 h3{font-size: 28px;
    color: #decefe;
     font-style: bold;}

</style>
</head>

<body>

<p align="center">Admin Panel</p>
<div  class="admindetails" style="float: right">
<table><tr><td>Registation Id : </td><td><?php echo $id ;?></td></tr>
<tr><td>Name :</td><td><?php echo "$name" ;?></td></tr>
</table>
</div>


<div>
<form action="#" method="post" >

<table width=100% span=10px spacing=5px padding-top=3px class="buttondesign" >
<tr><td><form method="get" action="userrequest.php"><button type="submit" class="userrequest">User Request</button></form></td><td><form method="get" action="chatting.php"><button type="submit" class="userrequest">Messages</button></form></td><td><form method="get" action="noticeboard.php"><button type="submit" class="userrequest">Notice Board</button></form></td>
<td><form method="get" action="profile.php"><button type="submit" class="userrequest">Profile</button></form></td><td><form method="get" action="logout.php"><button type="submit" class="userrequest">Logout</button></form></td></tr>
</table>
</form>
</div>



<div>
  <h3> The site is under Maintainance, Please come after few Hours.
  </h3></div>

</body>
</html>