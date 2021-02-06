<?php session_start();
                        if(isset($_SESSION['registerid']))
                        {  //shows admin name and id
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
.button{font-size: 27px;
        background:  rgb(54, 79, 132,0.7);
        color: #50e50b;
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

  .about{font-size: 25px;
          background: rgb(13, 43, 135,0.37);
          color: #6fa548}
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

<div style="float:left" padding-top="65px" padding-left="65px">
  <form method="post" action="">
   <table class="about">
   <tr><td>RegistationId:</td><td><?php echo $id ; ?></td></tr>
    <tr><td>Name:</td><td><?php echo "$name" ;?></td></tr>
   <tr><td>Contact:</td><td><input type="number" name="contact" placeholder="<?php echo $row['phone']; ?>"></td></tr>
    <tr><td>Email:</td><td><input type="email" name="email" placeholder="<?php echo $row['email']; ?>"></td></tr>
     <tr><td>DOB:</td><td><?php echo $row['dob']; ?></td></tr>
      <tr><td>Gender:</td><td><?php echo $row['gender']; ?></td></tr>
      <tr><td>Educational:</td><td><input type="text" name="education" placeholder="<?php echo $row['branch']; ?>"></td></tr>
       <tr><td>About:</td><td><textarea rows="4" cols="20"></textarea></td></tr>
        <tr><td></td><td><input type="submit" value="UPDATE" name="update" class="button"></td></tr>
    </table>
    </form>

  </div>
</body>
</html>
