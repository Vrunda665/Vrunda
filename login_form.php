<!DOCTYPE html>
<html>
<head>
	<title> Login Form</title>
<style>

body{
	margin: 0 auto;
	background-image: url("bg2.jpg");
	background-repeat: no-repeat;
	background-size: 100% 720px;
}
h1
{
       text-shadow : 2px 2px #dbbcf7;
      font-family : Arial;
      color : #c411fa;
      font-size : 42px;
}
h3
{
    color : black;
}
.container{
	width: 500px;
	height: 450px;
	text-align: center;
	margin: 0 auto;
	background-color: #fce6ed;
	margin-top: 160px;
}

img{
	width: 170px;
	height: 90px;
	margin-top: -60px;
}

.logo1
{
   width: 15px;
	height: 15px;
}
input[type="text"],input[type="password"]{
	margin-top: 30px;
	height: 45px;
	width: 300px;
	font-size: 18px;
	margin-bottom: 20px;
	background-color: #fff;
	padding-left: 40px;
}

.form-input::before{
	image : url("user.jpg");
	font-family: "FontAwesome";
	padding-left: 07px;
	padding-top: 40px;
	position: absolute;
	font-size: 35px;
	color: #2980b9; 
}

.form-input:nth-child(2)::before{
	#content: "\f023";
         background-image: url("LOGO1.jpg");
}

.btn-login{
       font-size: 20px;
	padding: 15px 25px;
	border: none;
	background-color: #27ae60;
	color: #fff;
}
	<link rel="stylesheet" a href="css\style.css">
	<link rel="stylesheet" a href="css\font-awesome.min.css">
</style>
</head>
<body>
	<div class="container">
          <h1><u> Foodix </u></h1>
		<form method='POST' action='wel1.php'>
			<div class="form-input">
                                            
				<input type="text" name="id" placeholder="Enter the User Name"/>	
			</div>
			<div class="form-input" >
				<input type="password" name="pw" placeholder="Enter Password"/>
			</div>
			<input type="submit" type="submit" value="LOGIN" class="btn-login"/>
                      <h3>Forget password? - <a href="#">click here</a></h3>
                       <h2><a href="#" >Click here for Register</a></h2>
		</form>
	</div>
</body>
</html>