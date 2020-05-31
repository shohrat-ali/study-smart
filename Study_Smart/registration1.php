<?php
		$con=mysql_connect("localhost","root","") or die("can't connect");
		mysql_select_db("register_db",$con) or die("Can't found");
		
		if(isset($_REQUEST['btnsubmit']))
		{
			$name=$_POST['txtname'];
			$course=$_POST['selcourse'];
			$email=$_POST['txtemail'];
			$pwd=$_POST['txtpwd'];
			$cpwd=$_POST['txtcpwd'];
			//echo $name;
			
			mysql_query("insert into table_register(name,course,email,password,confirm_password)
			values('$name','$course','$email','$pwd','$cpwd')") ;
		}
?>
<html>
<head>
<title>Login Form Design</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>	
<body>
    <div class="loginbox">
    <img src="avatar.png" class="avatar">
       <h1>Register Here</h1>
        
        <form class="registration_form" name="myform" method="post">
			<p> Name </p>
			<input type="text" name="txtname" class="form-control" id="uname" placeholder="Enter Your Name">
			<span id="user"  class ="text-danger font-weight-bold"  autocomplete="off"></span>
			<p> Course </p>
			<select name="selcourse">
                <option value="0">select
                <option value="Bca">BCA	</option>
                <option value="Mca">MCA </option>
                <option value="Mba">MBA </option>
                <option value="Mcom">MCOM </option>
                <option value="Bsc">BSC </option>
                <option value="Msc">MSC  </option>	
			</select>
			
            <p>Password</p>
            <input type="password" name="txtpwd" class="form-control" id="pass" placeholder="Enter Password">
			<span id="pd" class ="text-danger font-weight-bold" autocomplete="off"></span>
            <p>Confirm Password</p>
            <input type="password" name="txtcpwd" class="form-control" id="conpass" placeholder="Enter Password">
			<span id="cp" class ="text-danger font-weight-bold" autocomplete="off"></span>
            <P> Email Id </P>
			<input type="text" name="txtemail" class="form-control" id="Email" placeholder="Enter Username">
			<span id="emailid" class ="text-danger font-weight-bold"></span>
			<input type="submit" name="btnsubmit" id="btnsubmit" value="Register">
           
			<a href="login1.php"> Already Registereed? </a>
        
         
        </form>
        
		<script type="text/javascript">
		function validation()
		{
			var way = /^[A-Za-z]+$/;
			var name = document.getElementById("uname").value;
			var passa = document.getElementById("pass").value;
			var conf = document.getElementById("conpass").value;
			var mail = document.getElementById("Email").value;
			
			if(name=="")
			{
				document.getElementById("user").innerHTML="PLEASE FILL THE USERNAME";
				return false;
			}
			if(name.length<3)
			{
				document.getElementById("user").innerHTML="NAME IS TOO SHORT";
				return false;
			}
			if(passa=="")
			{
				document.getElementById("pd").innerHTML="PLEASE FILL THE password";
				return false;
			}
			if(name.match(way))
				true;
			else
			{
				document.getElementById("user").innerHTML="NUMERIC VALUE NOT ALLOWED";
				return false;
			}
			if(conf!=passa)
			{
				document.getElementById("cp").innerHTML="Password are not matching";
				return false;
			}
			if(conf=="")
			{
				document.getElementById("cp").innerHTML="PLEASE FILL THE password";
				return false;
			}
			
			if(mail=="")
			{
				document.getElementById("emailid").innerHTML="PLEASE FILL THE Email";
				return false;
			}
			if(mail.indexof('@') <= 0 )
			{
				document.getElementById("emailid").innerHTML="PLEASE FILL THE Email in proper format";
				return false;
			}
			if((mail.charAt(mail.length-4)!='.')&&(mail.charAt(mail.length-3)!='.'))
			{
				document.getElementById("emailid").innerHTML="PLEASE FILL THE Email in properformat @";
				return false;
			}
			
		} 
	</script>
                
    
        
        
    </div>

</body>
</html>