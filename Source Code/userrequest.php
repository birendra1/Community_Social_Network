<?php session_start();
                        if(isset($_SESSION['registerid']))
                        {  //shows admin name and id
                          $id = $_SESSION['registerid'];
                          $con = mysqli_connect("localhost","root",'',"communitynetworking") or die('$con');
                          $sql = "select * from useracc where registerid = $id ";
                          $result = mysqli_query($con,$sql) or die(mysqli_error($con));
                          $row=mysqli_fetch_array($result);
                          $name = $row['name'];
                          //for showing the requests to the admin panel
                          $sqlreq = "select * from useracc where status = '0'";
                          $resultreq = mysqli_query($con,$sqlreq);
                        }
                        else
                          header('location:login.php');
                          ?>
<!Doctype html>
<html>
<head>
<style>


  
 h3{font-size:26px} 
 .userdetails{
	background-color: rgba(114, 115, 219, 0.6);
    width: 285px;
	height:235px;
    border: 2px solid green;
    padding: 3px;
	font-size:16px;
}

.confirm{ font-size:20px;
			color:blue;
            border-radius:8px;
            border-width: 3px;
			}
  .confirm:hover{background:linear-gradient(to bottom right, #cc33ff 0%, #ccff66 100%); }

 body{background-image: url(admin2.jpg);
background-repeat: no-repeat;
background-size: cover; }

.buttondesign,.button{font-size:35px;
    }
.button{background-color:white;
}

  h1{color:hsl(336, 100%, 23%);
  text-decoration-line: underline;
     text-decoration-style: wavy;
   }
  
  .userrequest{color:#0723bf;
               font-size: 33px;
               background:#189b0f;
              width: 280px;
                 border-radius: 18px; 
                border-color: orange}
  .admindetails{font-size: 24px;
      color:#a2e504}
  .reject{color:black;
             font-size:20px;
            background: linear-gradient(to bottom right, #cc3399 0%, #66ff66 100%); 
            border-radius:8px;
            border-width: 3px;}
    .reject:hover{background: linear-gradient(to bottom right, #ff0066 0%, #ccffcc 100%);}
</style>
</head>

<body>

<h1 align="center">Admin Panel</h1>
<div style="float:right;padding-top=30px" class="admindetails">
<table><tr><td>Regd. Id :</td><td><?php echo $id ?></td></tr>
<tr><td>Name :</td><td><?php echo "$name" ?></td></tr>
</table>
</div>


<div>

<table width=100% span=10px spacing=5px padding-top=3px class="buttondesign" >
<tr><td><form method="get" action="userrequest.php"><button type="submit" class="userrequest">User Request</button></form></td><td><form method="get" action="chatting.php"><button type="submit" class="userrequest">Messages</button></form></td><td><form method="get" action="noticeboard.php"><button type="submit" class="userrequest">Notice Board</button></form></td>
<td><form method="get" action="profile.php"><button type="submit" class="userrequest">Profile</button></form></td><td><form method="get" action="logout.php"><button type="submit" class="userrequest">Logout</button></form></td></tr>
</table>
</div>
<?php
 if(mysqli_num_rows($resultreq)==0)
{
echo 'No request pending';
}
else{
    while($row=mysqli_fetch_array($resultreq))
    {
      $id = $row['registerid'];
      $name = $row['name'];
      $branch = $row['branch'];
       $gender = $row['gender'];
       $usertype = $row['usertype'];
      $dob = $row['dob'];
      ?>
      <div style="float:left;padding-left:25px;padding-top:15px" class="userdetails">
       <img src="abcde.png" width="45px" height="35px" class="profilephoto">
       <table><tr><td>Regd. No :</td><td><?php echo $id; ?></td></tr>
       <tr><td>Name : </td><td><?php echo "$name"; ?></td></tr>
       <tr><td>Branch :</td><td><?php echo "$branch"; ?></td></tr>
       <tr><td>UserType :</td><td><?php echo "$usertype" ; ?></td></tr>
       <tr><td>Gender : </td><td><?php echo "$gender" ;?></td></tr>
       <tr><td>DOB :</td><td><?php echo "$dob"; ?></td></tr>
      <tr><td></td><td><input type="button" name="reject" value="Reject" class="reject"></td><td><a href="work.php?id=<?php echo $id;?>"><input type="button" name="confirm" value="Confirm" class="confirm"></a></td></tr>
      </table>
      </div> ;
      <?php } 
  }
      ?>
</body>
</html>
