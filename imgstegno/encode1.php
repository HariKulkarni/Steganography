<?php

include "db.php";
include "header1.php";

function steganize($file, $message) {
  // Encode the message into a binary string.
  $binaryMessage = '';
  for ($i = 0; $i < mb_strlen($message); ++$i) {
    $character = ord($message[$i]);
    $binaryMessage .= str_pad(decbin($character), 8, '0', STR_PAD_LEFT);
  }

  // Inject the 'end of text' character into the string.
  $binaryMessage .= '00000011';

  // Load the image into memory.
  $img = imagecreatefromjpeg($file);

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
  $newImage = 'secret1.png';
  imagepng($img, $newImage, 9);

  // Destroy the image handler.
  imagedestroy($img);
}


            $email =$_POST['email'];
            $etext = $_POST['etext'];
            $file = $_FILES['file']['name'];

            echo $file;
						$ext = pathinfo($file, PATHINFO_EXTENSION);
						$validExt = array ('png', 'jpg', 'jpeg');
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
													alert("Not a valid file");
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
                                  echo "stored image in send folder";

                                  $file = "send/".$notefile;
                                  $message = $etext;
                                  steganize($file, $message);
													}


											
											// mysqli_close($conn);
													// mysqli_close($conn);
											
							
							
						}
						
						



?>