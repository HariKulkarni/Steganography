<?php
	  include "db.php";
	

	if(isset($_POST['login']))
	{
				
						
					

						$email =$_POST['email'];
						$pass = $_POST['pass'];
		
		
		$sql = "select * from signup where email='$email' AND pass='$pass'";
		
		
		
		
		$result=mysqli_query($conn, $sql);
		$rowcount=mysqli_num_rows($result);
		
		
		$arr=mysqli_fetch_array($result);
				
		
				
		
		
		
		
		if ($rowcount > 0)
		{
				
								
				
						$email=$arr['email']; 
						$uname=$arr['uname']; 
						
                        session_start();	
					
					$_SESSION['email']=$email;
					$_SESSION['uname']=$uname;
					
					
					echo $_SESSION['uname'];
					
			
					echo '<script type="text/javascript">
										alert("Login Successful");
										location="home.php";
								 </script>';
					
					
				
				
		}
		else
		{
			echo '<script type="text/javascript">
										alert("Email ID Or Password  is Wrong ");
										location="index.php";
								 </script>';
		}
		
		
	}
?>
