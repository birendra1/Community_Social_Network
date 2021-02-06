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
body{background-image: url(facultypanel.jpg);
background-repeat: no-repeat;
background-size: cover; }
  h1{color:#ffc700;
  text-decoration-line: underline;
   }
   .user{font-size: 24px;
      color:#d3d0e8;
       background:rgba(121,125,55,0.48);}

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
</style>
</head>

<body>

<h1 align="center">Faculty's Panel</h1>
<div style="float:right;padding-top=30px" >
<table class="user"><tr><td>Regd. No :</td><td><?php echo $id ;?></td></tr>
<tr><td>Name :</td><td><?php echo "$name" ;?></td></tr>
</table>
</div>


<div>

<table width=100% span=10px spacing=5px padding-top=3px  >
<tr><td><form method="get" action="fnewsfeed.php"><button type="submit" class="userrequest">Newsfeed</button></form></td><td><form method="get" action="fchat.php"><button type="submit" class="userrequest">Messages</button></form></td><td><form method="get" action="fnoticeboard.php"><button type="submit" class="userrequest">Notice Board</button></form></td>
  <td><form method="get" action="fqa-section.php"><button type="submit" class="userrequest">Q-A section </button></form></td>
<td><form method="get" action="fprofile.php"><button type="submit" class="userrequest">Profile</button></form></td><td><form method="get" action="logout.php"><button type="submit" class="userrequest">Logout</button></form></td></tr>
</table>
</div>


<h2>This site is Under maintainance. please come after sometime.</h2>
</body>
</html>
