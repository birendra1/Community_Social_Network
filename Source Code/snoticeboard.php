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
  h1{color:#ffc700;
  text-decoration-line: underline;
   }
   .user{font-size: 24px;
      color:#a2e504}
.about{font-size: 23px;
        background: linear-gradient(to bottom left, #33cc33 0%, #ff33cc 100%);
        }
    .userrequest{color:#0723bf;
                 font-size: 33px;
                 background: linear-gradient(to bottom right, #ffcc66 0%, #cc0066 100%);
                  width: 280px;
                  border-radius: 20px; 
                  border-color: linear-gradient(to top left, #99ffcc 0%, #ff3399 100%);
                }
        h2{color: #fefeff;
           font-size: 25px;
           font-style: bold;
         }
             .notice{font-size: 24px;
           color:#c8d811;}
           .subject{font-size: 25px;
                    color: #efecdb;}
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

<div style="float: left" class="description">
  <marquee behavior="scroll" scroll-amount=1 direction="up" onmousedown="this.stop();" onmouseup="this.start();" width="400px" height=
  "475px">
    <table>
      <tr>
        <td class="subject">Subject: </td>
      
          <td><a href="onclicknoticeboard.php" class="notice">Internal postponed</a></td>
        </tr>
             </table>

           <table>
      <tr>
        <td class="subject">Subject: </td>
          <td><a href="onclicknoticeboard.php" class="notice">Exam postponed</a></td>
        </tr>
             </table>

</marquee>
</div>
</body>
</html>
