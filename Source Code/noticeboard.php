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


.buttondesign,.button{font-size:35px;
       
    font-weight:25px;
    }
.button{background-color:white;
}

  h1{color:hsl(336, 100%, 23%);
  text-decoration-line: underline;
 
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

    .subject{color:rgba(253,249,236,0.9);}

</style>
</head>

<body>

<h1 align="center">Admin Panel</h1>
<div  class="admindetails" style="float: right">
<table><tr><td>Registation Id : </td><td><?php echo $id ;?></td></tr>
<tr><td>Name :</td><td><?php echo "$name" ;?></td></tr>
</table>
</div>


<div>

<table width=100% span=10px spacing=5px padding-top=3px class="buttondesign" >
<tr><td><form method="get" action="userrequest.php"><button type="submit" class="userrequest">User Request</button></form></td><td><form method="get" action="chatting.php"><button type="submit" class="userrequest">Messages</button></form></td><td><form method="get" action="noticeboard.php"><button type="submit" class="userrequest">Notice Board</button></form></td>
<td><form method="get" action="profile.php"><button type="submit" class="userrequest">Profile</button></form></td><td><form method="get" action="logout.php"><button type="submit" class="userrequest">Logout</button></form></td></tr>
</table>
</div>



<div style="float:left" class="datainsert">
<form method="post" action="notice1.php">
<table class="admintable">
  <tr>
    <td class="subject">Subject :</td>
	 <td><textarea rows="2" cols="45" name="subject" placeholder="Enter the subject"></textarea></td>
	 </tr>
  <tr spacing="15px">
    <td class="subject">Description:</td> 
	 <td><textarea rows="10" cols="45" name="describe" placeholder="Enter description about subject"></textarea></td></tr>
	 <div>
	   <tr><td><input type="reset" class="reset"></td><td><input type="submit" class="submit"></td></tr>
	</div>
	 </table>
</form>
</div>

<div style="float: right" class="description">
	<marquee behavior="scroll" scroll-amount=1 direction="up" onmousedown="this.stop();" onmouseup="this.start();" width="450px" height=
  "470px">
		<table>
			<tr>
				<td class="subject">Subject : </td>
			
				  <td><a href="onclicknoticeboardadmin.php" class="notice">Internal postponed</a></td>
				</tr>
             </table>

           <table>
			<tr>
				<td class="subject">Subject : </td>
				  <td><a href="onclicknoticeboardadmin.php" class="notice">Exam postponed</a></td>
				</tr>
             </table>

</marquee>
</div>

</body>
</html>