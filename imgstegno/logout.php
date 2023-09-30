<?php 
session_start();
unset($_SESSION["email"]);
unset($_SESSION["uname"]);

								
session_destroy();
echo '<script type="text/javascript">
										alert("Logout Successful");
										location="index.php";
								 </script>';
					
?>