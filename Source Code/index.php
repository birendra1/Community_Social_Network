

<?php
  $connection = mysqli_connect("localhost","root","","communitynetworking");
  if(!$connection)
  {
  	die('could not connect to database :'.mysqli_error().'<br> Try again later');
  }
  else
  {
  //$result1 = $connection->query("SELECT * FROM communitynetworking");

if(isset($_POST["register"]))
{
	
$date="$_POST[Year]-$_POST[month]-$_POST[Date]";
$sql="INSERT INTO useracc (registerid,name,email,branch,phone,password,gender,dob,usertype)
VALUES
($_POST[registerid],'".$_POST[name]."','$_POST[email]','$_POST[branch]',$_POST[phone],'$_POST[password]','$_POST[gender]','$date','$_POST[usertype]')";

if (!$connection->query($sql))
  {
    echo "Data not inserted successfully: Try again";
    header('Location:index.php');
  }
  else
  {
   $_SESSION["res"] =  "User Registered Successfully...";
   header('Location: confirmation.html');
  }
}
}

  ?>
  

 <!DOCTYPE HTML >
<html>
<head>
<title>Welcome to Campus Networking</title>

<script language="javascript">

 function reg()
{
	if(document.registration.registerid.value.length!=10)
	{
		alert("registration no's length should be 10");
		document.registration.registerid.focus();
		document.registration.registerid.select();
		return false;
	}	
	else if((document.registration.name.value.length<6) || (document.registration.name.value.length>25))
	{
		alert("Name should be 6 to 25 character long");
		document.registration.name.focus();
		document.registration.name.select();
		return false;
	}
	
	
	else if((document.registration.password.value.length<8) || document.registration.password.value.length>14)
	{
		alert("The  length of the password should be 8 to 14 characters...");
		document.registration.password.focus();
		document.registration.password.select();
		return false;
	}
	else if(document.registration.password.value != document.registration.cpassword.value)
    {
		alert("Password and confirm password is not matching");
		document.registration.cpassword.value="";
		document.registration.cpassword.focus();
		document.registration.password.select();
    	return false;
	}
		else if((document.registration.phone.value.length!=10))
	{
		alert("The contact number should contain 10 number...");
		document.registration.phone.focus();
		document.registration.phone.select();
		return false;
	}
	else if(document.registration.Date.value=="DD")
		{
			alert("Please select Date");
		document.registration.Date.focus();
		return false;
		}
		else if(document.registration.month.value=="Month")
		{
			alert("Please select Month");
		document.registration.month.focus();
		return false;
		}
		else if(document.registration.Year.value=="Year")
		{
			alert("Please select Year");
		document.registration.Year.focus();
		return false;
		}
		
	else
		{
		return true;
		}	
}
	</script>
<style>
.division {
    margin: auto;
    width: 35%;
    
    padding: 75px;
}

table,tr,td{
             padding:7px;
             
            }
 tr,td{font-size:20px;
         text-decoration: bold;}
table{ background-color: rgba(201, 76, 76, 0.93);
		}
 tr:hover {background-color: green;}
 
 .button{font-size:22px;
                   color:orange;
				   background-color:blue;
				   font-style:bold;
				   border-radius: 13px;
				   }
 h3 { font-size:23px;
    text-decoration: underline;

}
h1{color:blue;}
body{
    background-repeat: no-repeat;
   background-image:url("reg.jpg");
    background-size: cover;
}
</style>

<meta name="Keywords" content="">
<meta name="Description" content="">
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body >

 <h1 align="center"><u>Community Social Network</u></h1>
 
 <div  class="division" >
  <h3>SignUp</h3>
  <form id="registration" name="registration" method="post" action="index.php" onSubmit="return reg()">
  	<table>
			<tr>
				<td>RegistrationId:</td>
				<td><input name = "registerid" type = "number" required></td>
				</tr>

			<tr>
			  <td >Name :</td>
			  <td><input name="name" type="text" id="name" value="" required></td>
			  </tr>
			<tr>
			  <td>Email :</td>
			  <td><input name="email" type="email" id="email" value="" required></td>
			  </tr>
			 <tr>
			   <td>Branch :</td>
			   <td><select name = "branch" required >
			   	<option>MCA</option>
			   	<option>CIVIL</option>
			   	<option>MECH</option>
			   	<option>ELE</option>
			   	<option>CSE</option>
			   </select> </td></tr>
			  <tr>
			    <td>userType :</td>
			    <td><select name="usertype" required>
			    	<option>Student</option>
			    	<option>Faculty</option>
			    	<option>Admin</option>
			    </select> </td></tr>
			 <tr>
			   <td>Contact Number :</td>
			   <td><input name="phone" type="number" required></td>
			  </tr>  
			<tr>	
			  <td>Password :</td>
			  <td><input name="password" type="Password" id="password" required></td>
			  </tr>
			<tr>
			  <td>Confirm password :</td>
			  <td><input name="cpassword" type="Password" id="cpassword" required></td>
			  </tr>
			<tr>
			  <td>Gender :</td>
			  <td><label>
			    <input name="gender" type="radio"  value="Male" checked="checked" required/>
			    Male</label>
                <input type="radio" name="gender"  value="Female" required/>
                Female</td>
			  </tr>
			<tr>
			  <td colspan="2">DOB&nbsp;&nbsp;&nbsp; 
			    <select name="Date" >
			      <option>DD</option>
			      <?php
for($i=1; $i<= 31; $i++)
{
echo "<option value='$i'>$i</option>";
}
?>
			      </select>
			    <select name="month">
			      <option>Month</option>
			      <option value="01">Jan</option>
			      <option value="02">Feb</option>
			      <option value="03">Mar</option>
			      <option value="04">Apr</option>
			      <option value="05">May</option>
			      <option value="06">Jun</option>
			      <option value="07">Jul</option>
			      <option value="08">Aug</option>
			      <option value="09">Sep</option>
			      <option value="10">Oct</option>
			      <option value="11">Nov</option>
			      <option value="12">Dec</option>
			      </select>
			    <select name="Year">
			      <option value="Year">Year</option>
			      <?php
for($i=1965; $i< 2003; $i++)
{
echo "<option value='$i'>$i</option>";
}
?>
		        </select></td>
			  </tr>

			<tr> 
		
				<td> <input class="button" type="reset" name="reset" value="Reset" ></td>
				<td><input class="button" type="submit" name="register" value="Register" ></td>
			</tr>

		  <tr>
		  	 <td><h4 align="center"><a href="login.php">Already a User?</a></h4></td>
		  	</tr>
		  </table>

			</form>
			</div>

			

</div>


</body></html>