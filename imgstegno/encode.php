<?php


include "header1.php";

function steganize($file, $message,$email) {
	include "db.php";
  // Encode the message into a binary string.
  $binaryMessage = '';
  for ($i = 0; $i < mb_strlen($message); ++$i) {
    $character = ord($message[$i]);
    $binaryMessage .= str_pad(decbin($character), 8, '0', STR_PAD_LEFT);
  }

  // Inject the 'end of text' character into the string.
  $binaryMessage .= '00000011';

  // Load the image into memory.
  //$img = imagecreatefromjpeg($file);
  $img = imagecreatefromjpeg("send/".$file);

  // Get image dimensions.
  $width = imagesx($img);
  $height = imagesy($img);

  $messagePosition = 0;

  for ($y = 0; $y < $height; $y++) {
    for ($x = 0; $x < $width; $x++) {

      if (!isset($binaryMessage[$messagePosition])) {
        // No need to keep processing beyond the end of the message.
        break 2;
      }

      // Extract the colour.
      $rgb = imagecolorat($img, $x, $y);
      $colors = imagecolorsforindex($img, $rgb);

      $red = $colors['red'];
      $green = $colors['green'];
      $blue = $colors['blue'];
      $alpha = $colors['alpha'];

      // Convert the blue to binary.
      $binaryBlue = str_pad(decbin($blue), 8, '0', STR_PAD_LEFT);

      // Replace the final bit of the blue colour with our message.
      $binaryBlue[strlen($binaryBlue) - 1] = $binaryMessage[$messagePosition];
      $newBlue = bindec($binaryBlue);

      // Inject that new colour back into the image.
      $newColor = imagecolorallocatealpha($img, $red, $green, $newBlue, $alpha);
      imagesetpixel($img, $x, $y, $newColor);

      // Advance message position.
      $messagePosition++;
    }
  }

  // Save the image to a file.
 // $newImage = 'secret1.png';
  $newImage = "encode/".$file;
  imagepng($img, $newImage, 9);

  // Destroy the image handler.
  imagedestroy($img);
  
					session_start();	
					
					$semail=$_SESSION['email'];
					$sname=$_SESSION['uname'];
  
				$str_result = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789'; 
							  
								// Shufle the $str_result and returns substring 
								// of specified length 
			    $verificationcode =   substr(str_shuffle($str_result), 0, 8); 
								
				$sql = "INSERT INTO msg( semail,sname,email,file,verificationcode) VALUES('$semail','$sname','$email','$file','$verificationcode')";
								
							// $dept, $subject, $contact, $email

									if (mysqli_query($conn, $sql))
									{
										
											
											 

											 
													echo '<script type="text/javascript">
													alert("Text hide inside image successfully and sent");
													location="send.php";
													</script>';
											 
											 


											
										 mysqli_close($conn);
													// mysqli_close($conn);
											
									} 
									
									else 
									{
											echo "Error: " . $sql . "<br>" . mysqli_error($conn);
									}
  
  
									
}


            $email =$_POST['email'];
            $etext = $_POST['etext'];
            $file = $_FILES['file']['name'];

           // echo $file;
						$ext = pathinfo($file, PATHINFO_EXTENSION);
						$validExt = array ('jpg', 'jpeg');
						if (empty($file))
						{
												
							echo '<script type="text/javascript">
													alert(" Attach a file");
													location="send.php";
									</script>';
						}
						else if ($_FILES['file']['size'] <= 0 || $_FILES['file']['size'] > 30720000 )
						{
								
								echo '<script type="text/javascript">
													alert("file size is not proper");
													location="send.php";
									</script>';
						}
						else if (!in_array($ext, $validExt))
						{
							
							echo '<script type="text/javascript">
													alert("Not a valid file only jpg format support");
													location="send.php";
									</script>';

						}
						else 
						{
							
							
											 
													$folder  = './send/';
													$fileext = strtolower(pathinfo($file, PATHINFO_EXTENSION) );
													$notefile = rand(1000 , 1000000) .'.'.$fileext;
													
													if(move_uploaded_file($_FILES['file']['tmp_name'], $folder.$notefile)) 
													{
															//echo "stored image in send folder";

															 // $file = "send/".$notefile;
															   $file = $notefile;
															   $message = $etext;
															   
															 //  echo $message;
															   echo $notefile;
															//echo '<img src="send/'.$notefile.'" />';
															 
															  steganize($file, $message,$email);
													}


											
											// mysqli_close($conn);
													// mysqli_close($conn);
											
							
							
						}
						
						



?>