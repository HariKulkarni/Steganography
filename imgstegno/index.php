<?php
        include "db.php";
        include "header.php";
       
        //Secure Data Transfer Using Image Stegnography
?>
<!-- banner -->
<div id="home" class="w3ls-banner">
		<!-- banner-text -->
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides callbacks callbacks1" id="slider4">
					<li>
						<div class="w3layouts-banner-top">

							<div class="container">
								<div class="agileits-banner-info">
								<h4>DATA HIDING</h4>
									<h3>Secure Data Transfer Using Image STegnography</h3>
										
									<div class="agileits_w3layouts_more menu__item">
				<a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Learn More</a>
			</div>
								</div>	
							</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top1">
							<div class="container">
								<div class="agileits-banner-info">
								<h4>DATA HIDING</h4>
									<h3>Secure Data Transfer Using Image STegnography</h3>
									<div class="agileits_w3layouts_more menu__item">
				<a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Learn More</a>
			</div>
								</div>	
							</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top2">
							<div class="container">
								<div class="agileits-banner-info">
								<h4>DATA HIDING</h4>
									<h3>Secure Data Transfer Using Image STegnography</h3>
									<div class="agileits_w3layouts_more menu__item">
											<a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Learn More</a>
										</div>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
			<!--banner Slider starts Here-->
		</div>
		    <div class="thim-click-to-bottom">
				<a href="#about" class="scroll">
					<i class="fa fa-long-arrow-down" aria-hidden="true"></i>
				</a>
			</div>
	</div>	
	<!-- //banner --> 
<!-- //Modal1 -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
						<!-- Modal1 -->
							<div class="modal-dialog">
							<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4>DATA  <span>HIDING</span></h4>
										<img src="images/b1.jpg" alt=" " class="img-responsive">
										<h5>Secure Data Transfer Using Image Stegnography</h5>
										<p>Providing guests unique and enchanting views from their rooms with its exceptional amenities, makes Star Hotel one of bests in its kind.Try our food menu, awesome services and friendly staff while you are here.</p>
									</div>
								</div>
							</div>
						</div>
<!-- //Modal1 -->

<div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
						<!-- Modal1 -->
							<div class="modal-dialog">
							<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4>LOGIN  <span>FORM</span></h4>
										<img src="images/login.png" alt=" " class="img-responsive">
									
                                            <form  action="login.php" method="post" name="sentMessage" id="contactForm" >
														<div class="control-group form-group">
															
																<label class="contact-p1">Email:</label>
																<input type="email" class="form-control" name="email" id="name" required >
																<p class="help-block"></p>
														   
														</div>	
														<div class="control-group form-group">
															
																<label class="contact-p1">Password:</label>
																<input type="password" class="form-control" name="pass" id="pass" required >
																<p class="help-block"></p>
															
														</div>
														
														
														<input type="submit" name="login" value="Login Now" class="btn btn-primary">	
											</form>
                                                      
                                    </div>
								</div>
							</div>
						</div>
<!-- //Modal1 -->


<!-- //Modal1 -->

<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
						<!-- Modal1 -->
							<div class="modal-dialog">
							<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4>SIGNUP  <span>FORM</span></h4>
										<img src="images/signup.png" alt=" " class="img-responsive" >
									
                                            <form  action="signup.php" method="post" name="sentMessage" id="contactForm" >
														<div class="control-group form-group">
															
																<label class="contact-p1">Name:</label>
																<input type="text" class="form-control" name="uname" id="name" required >
																<p class="help-block"></p>
														   
														</div>	
														
														<div class="control-group form-group">
															
																<label class="contact-p1">Email:</label>
																<input type="email" class="form-control" name="email" id="name" required >
																<p class="help-block"></p>
														   
														</div>	
														
														<div class="control-group form-group">
															
																<label class="contact-p1">Contact No:</label>
																<input type="text" class="form-control" name="cno" id="name" required >
																<p class="help-block"></p>
														   
														</div>	
														
														
														
														<div class="control-group form-group">
															
																<label class="contact-p1">Password:</label>
																<input type="password" class="form-control" name="pass" id="pass" required >
																<p class="help-block"></p>
															
														</div>
														
														<div class="control-group form-group">
															
																<label class="contact-p1">Confirm Password:</label>
																<input type="password" class="form-control" name="cpass" id="pass" required >
																<p class="help-block"></p>
															
														</div>
														
														
														<input type="submit" name="signup" value="Login Now" class="btn btn-primary">	
											</form>
                                                              
                                    </div>
								</div>
							</div>
						</div>
<!-- //Modal1 -->

<?php
         include "footer.php";
?>