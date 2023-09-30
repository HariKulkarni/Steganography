<?php
      include "db.php";
      include "header1.php";
     



?>

    <div class="container">
        <br>
        <br>

							<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4>HIDDEN  <span>TEXT</span></h4>
										
                                            <form  action="send1.php" method="post" name="sentMessage" id="contactForm" >
														<div class="control-group form-group">
															
																<label class="contact-p1">TEXT:</label>
																<input type="text" class="form-control" name="htext"  required >
																<p class="help-block"></p>
														   
														</div>	
														
														<div class="control-group form-group">
															
																<label class="contact-p1">Reciver Email:</label>
																<input type="email" class="form-control" name="email"  required >
																<p class="help-block"></p>
														   
														</div>	
														
																		
														
														
														<input type="submit" name="send" value="Select Image  fot Hide Text" class="btn btn-primary">	
											</form>
                                                              
                                    </div>
								</div>
</div>
							
<!-- //Modal1 -->

