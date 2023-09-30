	<?php
											
												
													
													 include "db.php";
													$id =$_POST['id'];
													
													$sql = "DELETE FROM `msg` WHERE `msg`.`id` = '$id'";
													if(mysqli_query($conn, $sql))
													{
														echo '<script type="text/javascript">
														alert("Deleted  Successful");
														location="check.php";
														 </script>';
													}

?>
												