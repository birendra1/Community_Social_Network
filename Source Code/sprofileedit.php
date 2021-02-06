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
body{background-image: url(studentpage2.jpg);
background-repeat: no-repeat;
background-size: cover; }

.buttondesign{font-size:35px;
        background:pink;
    font-weight:25px;
    }
.button{background:linear-gradient(to top left, #33ccff 0%, #ff3399 100%);

     font-size: 23px;
     border-radius: 5px;

}

  h1{color:#ffc700;
  text-decoration-line: underline;
   }
   .user{font-size: 24px;
      color:#a2e504}
.about{font-size: 27px;
        background: linear-gradient(to bottom left, #33cc33 0%, #ff33cc 100%);
        }
    .userrequest{color:#0723bf;
                 font-size: 33px;
                 background: linear-gradient(to bottom right, #ffcc66 0%, #cc0066 100%);
                  width: 280px;
                  border-radius: 20px; 
                  border-color: linear-gradient(to top left, #99ffcc 0%, #ff3399 100%);}

</style>
</head>

<body>

<h1 align="center">User's Panel</h1>
<div style="float:right;padding-top=30px" >
<table class="user"><tr><td>Regd. No :</td><td><?php echo $id ;?></td></tr>
<tr><td>Name :</td><td><?php echo "$name" ;?></td></tr>
</table>
</div>


<div>

<table width=100% span=10px spacing=5px padding-top=3px  >
<tr><td><form method="get" action="snewsfeed.php"><button type="submit" class="userrequest">Newsfeed</button></form></td><td><form method="get" action="schat.php"><button type="submit" class="userrequest">Messages</button></form></td><td><form method="get" action="snoticeboard.php"><button type="submit" class="userrequest">Notice Board</button></form></td>
  <td><form method="get" action="sqa-section.php"><button type="submit" class="userrequest">Q-A section </button></form></td>
<td><form method="get" action="sprofile.php"><button type="submit" class="userrequest">Profile</button></form></td><td><form method="get" action="logout.php"><button type="submit" class="userrequest">Logout</button></form></td></tr>
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
