<?php
		$con=mysql_connect("localhost","root","") or die("can't connect");
		mysql_select_db("register_db",$con) or die("Can't found");
		
		$res=mysql_query("select * from table_register");
		$data=mysql_fetch_array($res);
		
		$name1=$data['name'];
		$name=$_POST['txtname'];
		
		$pwd1=$data['password'];
		$pwd=$_POST['txtpwd'];
		
		if($name1==$name && $pwd1==$pwd)
		{
			header("location:index.html");
		}
		/*$data=mysql_fetch_array($res);
		{
			echo $data['name'];
		}*/
		/*if(isset($_REQUEST['btnsubmit']))
		{
			$name=$_POST['txtname'];
			$course=$_POST['selcourse'];
			//echo $name;
			
			mysql_query("insert into table_register(name,course,email,password,confirm_password)
			values('$name','$course','$email','$pwd','$cpwd')") ;
		}*/
?>
<html>
<head>
<title>Login Form Design</title>
    <link rel="stylesheet" type="text/css" href="style.css">
<body>
    <div class="loginbox">
    <img src="avatar.png" class="avatar">
        <h1>Login Here</h1>
        
        <form method="post">
            <p>Username</p>
            <input type="text" name="txtname" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="txtpwd" placeholder="Enter Password">
            <input type="submit" name="btnsubmit" id="btnsubmit" value="Login"> </a>
            
            <a href="registration1.php">Don't have an account?</a>
        </form>
        
    </div>

</body>
</head>
</html>