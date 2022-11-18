<html>
<head>
<style>
h1
{
  color : white;
  font-size : 57;
}
table
{
   margin-left:100;
   color : white;
  font-size : 30;   
}
.btn{
        height : 60;
       width : 100;
      margin-left : 200;
       font-size: 20px;
	#padding: 15px 25px;
	border: solid blue;
	background-color: #27ae60;
	color: #fff;
}
body {
  background-image: url('bg3.jpg');
}</style>
<title>Registration</title>
</head>
<body >
<h1 align = "center"><u>Admin Registration</u></h1>
<form method="POST" action="Reg_db.php">
<div class = "main">
<table cellpadding="6" cellspacing="3" text-align="left">
<tr><th>UserID :</th>
<td><input type="text" name="uid" ></td></tr>
<tr><th>Password : </th>
<td><input type="password" name="pw"></td></tr>
<tr><th>First name :</th>
<td><input type="text" name="f" ></td></tr>
<tr><th>Middle name : </th>
<td><input type="text" name="m" ></td></tr>
<tr><th>Last name : </th>
<td><input type="text" name="l" ></td></tr>
<tr><th>DOB : </th>
<td><input type="date" name="dob"></td></tr>
<tr><th>Mobile no. : </th>
<td><input type="number" name="no" maxlength="10"></td></tr>
<tr><th>Email :   </th>
<td><input type="email" name="email"></td></tr>
<tr><th>Address :  </th><td><textarea name="add" rows="3" cols="40"></textarea></td></tr>
</div>
</table>
<br>
<input type="submit" type="submit" value="SUBMIT" class="btn"/>

</form>
</body>
</html>
