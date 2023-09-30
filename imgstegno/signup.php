<?php

include "db.php";

	
									
	if(isset($_POST['signup']))
	{
		
		
		if($_POST['pass'] == $_POST['cpass'])
		{
						
					
						$email=$_POST['email'];
						$sql = "select * from signup where email='$email'";
						$result=mysqli_query($conn, $sql);
						$rowcount=mysqli_num_rows($result);
						//echo $sql;
										
						
				if($rowcount > 0)
				{	
						echo '<script type="text/javascript">
										alert("This Mail Id is already Registered");
										location="index.php";
								 </script>';
				}
				else
				{
						
						


						
					

						$email =$_POST['email'];
						$uname =$_POST['uname'];
						$con = $_POST['cno'];
						
						$pass = $_POST['pass'];
						$cpass =$_POST['cpass'] ;
						
						
						
							



								$sql = "INSERT INTO signup( email,uname,con,pass) 
													 VALUES('$email','$uname', '$con','$pass')";
								
							// $dept, $subject, $contact, $email

									if (mysqli_query($conn, $sql))
									{
										
											
											 

											 
													echo '<script type="text/javascript">
													alert("user registration done successfully");
													location="index.php";
													</script>';
											 
											 
											 


											
										 mysqli_close($conn);
													// mysqli_close($conn);
											
									} 
									
									else 
									{
											echo "Error: " . $sql . "<br>" . mysqli_error($conn);
									}
									
				}
		}
			else
			{
				echo '<script type="text/javascript">
										alert("Password and Confirm Password not same");
										location="index.php";
								 </script>';
			}
	}
	else
	{
		echo '<script type="text/javascript">
										alert("There is No Direct Access to this page");
										location="index.php";
								 </script>';
	}
?>