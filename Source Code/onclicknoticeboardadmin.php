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
            h3{color:#fefded;
           font-size: 26px;
           font-style: bold;
            text-decoration: underline;}
        h4{color:#deadea;
           font-size: 23px;}
        p{color:#abceef;
          font-size: 20px;}

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

<div>

  <h3>Subject</h3>
    <h4> suject name</h4>

    <h4> Description</h4>
     <p>Deescription Details</p>
   </div>

</body>
</html>