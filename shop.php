<?php

##Connecting to the database

require("config.php");
        
        if(isset($_POST["digital-btn"])){
            
            $merchandise_firstname = $_POST["digital-firstname"];
            $merchandise_lastname = $_POST["digital-lastname"];
            $merchandise_email = $_POST["digital-email"];
            $merchandise_product = $_POST["digital-product"];
            $merchandise_phone = $_POST["digital-phone"];
            $merchandise_msg = $_POST["digital-msg"];
            
            
            //Send email to client
            $frm = "info@brandesty.com";
            $sub = "Thank You For Ordering ". $merchandise_product ."";
            
            // To send HTML mail, the Content-type header must be set
            $headers  = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html;charset=UTF=8' . "\r\n";
            $n = "Brandesty";
            
            // Create email headers
            $headers .= 'From: '.$n."\r\n".
                'Reply-To: '.$frm."\r\n" .
                'X-Mailer: PHP/' . phpversion();
                
                // Compose a simple HTML email message
                 $message = '<html><body>';
               $message .= '<style type="text/css">
                    		/*////// RESET STYLES //////*/
                    		body{height:100% !important; margin:0; padding:0; width:100% !important;}
                    		table{border-collapse:separate;}
                    		img, a img{border:0; outline:none; text-decoration:none;}
                    		h1, h2, h3, h4, h5, h6{margin:0; padding:0;}
                    		p{margin: 1em 0;}
                    
                    		/*////// CLIENT-SPECIFIC STYLES //////*/
                    		.ReadMsgBody{width:100%;} .ExternalClass{width:100%;}
                    		.ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div{line-height:100%;}
                    		table, td{mso-table-lspace:0pt; mso-table-rspace:0pt;}
                    		#outlook a{padding:0;}
                    		img{-ms-interpolation-mode: bicubic;}
                    		body, table, td, p, a, li, blockquote{-ms-text-size-adjust:100%; -webkit-text-size-adjust:100%;}
                    
                    		/*////// GENERAL STYLES //////*/
                    		img{ max-width: 100%; height: auto; }
                    
                    		/*////// TABLET STYLES //////*/
                    		@media only screen and (max-width: 620px) {
                    
                    			/*////// GENERAL STYLES //////*/
                    			#foxeslab-email .table1 { width: 90% !important;}
                    			#foxeslab-email .table1-2 { width: 98% !important; margin-left: 1%; margin-right: 1%;}
                    			#foxeslab-email .table1-3 { width: 98% !important; margin-left: 1%; margin-right: 1%;}
                    			#foxeslab-email .table1-4 { width: 98% !important; margin-left: 1%; margin-right: 1%;}
                    			#foxeslab-email .table1-5 { width: 90% !important; margin-left: 5%; margin-right: 5%;}
                    
                    			#foxeslab-email .tablet_no_float { clear: both; width: 100% !important; margin: 0 auto !important; text-align: center !important; }
                    			#foxeslab-email .tablet_wise_float { clear: both; float: none !important; width: auto !important; margin: 0 auto !important; text-align: center !important; }
                    
                    			#foxeslab-email .tablet_hide { display: none !important; }
                    
                    			#foxeslab-email .image1 { width: 98% !important; }
                    			#foxeslab-email .image1-290 { width: 100% !important; max-width: 290px !important; }
                    
                    			.center_content{ text-align: center !important; }
                    			.center_image{ margin: 0 auto !important; }
                    			.center_button{ width: 50% !important;margin-left: 25% !important;max-width: 250px !important; }
                    			.centerize{margin: 0 auto !important;}
                    		}
                    
                    
                    		/*////// MOBILE STYLES //////*/
                    		@media only screen and (max-width: 480px){
                    			/*////// CLIENT-SPECIFIC STYLES //////*/
                    			body{width:100% !important; min-width:100% !important;} /* Force iOS Mail to render the email at full width. */
                    			table[class="flexibleContainer"]{ width: 100% !important; }/* to prevent Yahoo Mail from rendering media query styles on desktop */
                    
                    			/*////// GENERAL STYLES //////*/
                    			img[class="flexibleImage"]{height:auto !important; width:100% !important;}
                    
                    			#foxeslab-email .table1 { width: 98% !important; }
                    			#foxeslab-email .no_float { clear: both; width: 100% !important; margin: 0 auto !important; text-align: center !important; }
                    			#foxeslab-email .wise_float {	clear: both;	float: none !important;	width: auto !important;	margin: 0 auto !important;	text-align: center !important;	}
                    
                    			#foxeslab-email .mobile_hide { display: none !important; }
                    			.auto_height{height: auto !important;}
                    		}
	                        </style>
	                        
	                        <table class="table_full editable-bg-color bg_color_f8f8f8 editable-bg-image" bgcolor="#f8f8f8" width="100%" align="center"  mc:repeatable="castellab" mc:variant="Header" cellspacing="0" cellpadding="0" border="0" style="background-image: url(#); background-position: top center; background-repeat: no-repeat; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" background="#">
	<tr>
		<td>
			<table class="table1" width="600" align="center" border="0" cellspacing="0" cellpadding="0" style="margin: 0 auto;">
				<tr><td height="20"></td></tr>
				<tr>
					<td>
						<!-- Logo -->
						<table class="tablet_no_float" width="260" align="left" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td class="editable-img">
									<a href="#">
										<img editable="true" width="100" mc:edit="image101" class="center_image" src="https://brandesty.com/tester/assets/img/brandesty-logo.png" style="display:block; line-height:0; font-size:0; border:0;" border="0" alt="image" />
									</a>
								</td>
							</tr>
							<!-- margin-bottom -->
							<tr><td height="20"></td></tr>
						</table><!-- END logo -->

						<!-- Nav menu -->
						<table class="tablet_no_float" width="240" align="left" border="0" cellspacing="0" cellpadding="0">
							<tr><td height="5"></td></tr>
							<tr>
								<!-- Home -->
								<td mc:edit="text101" class="text_color_282828" style="color: #282828; font-size: 14px; font-weight: 500; font-family: "Open Sans", Helvetica, sans-serif; mso-line-height-rule: exactly;">
									<div class="editable-text">
										<span class="text_container">
											<a href="https://brandesty.com" target="_blank" class="text_color_282828" style="text-decoration: none; color: #282828;">Home</a>
										</span>
									</div>
								</td>

								<!-- vertical gap -->
								<td width="30" align="left"></td>

								<!-- Work -->
								<td mc:edit="text102" class="text_color_282828" style="color: #282828; font-size: 14px; font-weight: 500; font-family: "Open Sans", Helvetica, sans-serif; mso-line-height-rule: exactly;">
									<div class="editable-text">
										<span class="text_container">
											<a href="https://brandesty.com" target="_blank" class="text_color_282828" style="text-decoration: none; color: #282828;">Service</a>
										</span>
									</div>
								</td>

								<!-- vertical gap -->
								<td width="30"></td>

								<!-- Contact -->
								<td mc:edit="text103" class="text_color_282828" style="color: #282828; font-size: 14px; font-weight: 500; font-family: "Open Sans", Helvetica, sans-serif; mso-line-height-rule: exactly;">
									<div class="editable-text">
										<span class="text_container">
											<a href="https://brandesty.com" target="_blank" class="text_color_282828" style="text-decoration: none; color: #282828;">Contact</a>
										</span>
									</div>
								</td>
							</tr>
							<!-- margin-bottom -->
							<tr><td height="20"></td></tr>
						</table><!-- END nav menu -->

						<!-- button -->
						<table  class="tablet_no_float" width="100" align="right" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td align="center">
									<table class="button_bg_color_ffffff bg_color_ffffff table1" bgcolor="#ffffff" width="100" height="30" align="center" border="0" cellpadding="0" cellspacing="0" style="border: 1px solid #ebebeb;border-radius:25px;border-collapse:separate;">
										<tr>
											<td mc:edit="text104"  class="text_color_ff9403" align="center" valign="middle" style="color: #fed23f; font-size: 13px; font-weight: 500; font-family: "Open Sans", Helvetica, sans-serif; mso-line-height-rule: exactly;">
												<div class="editable-text">
													<span class="text_container">
														<a href="https://brandesty.com/tester/shop/" class="text_color_ff9403" style="text-decoration: none; color: #fed23f;">SHOP NOW</a>
													</span>
												</div>
											</td>
										</tr>
									</table>
								</td>
							</tr>
							<!-- margin-bottom -->
							<tr><td height="20"></td></tr>
						</table>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table><!-- END wrapper -->

<!-- section-2 -->
<table class="table_full editable-bg-color bg_color_ffffff editable-bg-image" bgcolor="#ffffff"  width="100%" align="center"  mc:repeatable="castellab" mc:variant="Header" cellspacing="0" cellpadding="0" border="0" style="border-bottom: 1px solid #ebebeb;background-image: url(#); background-repeat: no-repeat; background-position: center left; background-size: cover; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" background="#">
	<tr>
		<td>
			<table class="table1" width="600" align="center" border="0" cellspacing="0" cellpadding="0">
				<tr><td height="40"></td></tr>
				<!-- text -->
				<tr>
					<td>
						<!-- column-1 -->
						<table class="table1-2" width="290" align="left" border="0" cellspacing="0" cellpadding="0">
							<tr><td height="50"></td></tr>
							<tr>
								<td mc:edit="text201" align="left" class="text_color_ff9403 center_content" style="line-height: 1;color: #fed23f;letter-spacing: 2px; font-size: 13px;font-weight: 500; font-family: "Open Sans", verdana, Helvetica, sans-serif; mso-line-height-rule: exactly;">
									<div class="editable-text" style="line-height: 1;">
										<span class="text_container">Hello</span>
									</div>
								</td>
							</tr>
							<!-- horizontal gap -->
							<tr><td height="20"></td></tr>
							<tr>
								<td mc:edit="text202" align="left" class="text_color_282828 center_content" style="line-height: 1;color: #282828;letter-spacing: 1px; font-size: 32px;font-weight: 700; font-family: lato, verdana, Helvetica, sans-serif; mso-line-height-rule: exactly;">
									<div class="editable-text" style="line-height: 1;">
										<span class="text_container"> '. $merchandise_firstname .' ." ".  '. $merchandise_lastname .'</span>
									</div>
								</td>
							</tr>
							<!-- horizontal gap -->
							<tr><td height="25"></td></tr>
							<tr>
								<td mc:edit="text203" align="left" class="text_color_282828 center_content" style="color: #282828;letter-spacing: 1px; font-size: 14px;font-weight: 600; font-family: "Open Sans", verdana, Helvetica, sans-serif; mso-line-height-rule: exactly;">
									<div class="editable-text">
										<span class="text_container">Thank you for ordering  '.$merchandise_product.'</span>
									</div>
								</td>
							</tr>

							<!-- horizontal gap -->
							<tr><td height="20"></td></tr>
							<tr>
								<td mc:edit="text205" align="left" class="text_color_282828 center_content" style="color: #282828;line-height: 2; font-size: 14px;font-weight: 500; font-family: "Open Sans", verdana, Helvetica, sans-serif; mso-line-height-rule: exactly;">
									<div class="editable-text" style="line-height: 2;">
										<span class="text_container"> '."We are reviewing your order, and we'll get back to you as soon as possible.".' <br /><br/> In the meantime, you can give us a call on <a href="tel:08135331188">08135331188</a> or email <a href="mailto:support@brandesty.com">support@brandesty.com</a>. <br /> The Brandesty Team</span>
									</div>
								</td>
							</tr>
							<!-- horizontal gap -->
							<tr><td height="30"></td></tr>
							<tr>
								<td>
									<table class="button_bg_color_ff9403 bg_color_ff9403 center_button" bgcolor="#fed23f" width="125" height="35" align="left" border="0" cellpadding="0" cellspacing="0" style="border-radius:25px; border-collapse: separate">
										<tr>
											<td mc:edit="text206"  class="text_color_ffffff" align="center" valign="middle" style="color: #ffffff; font-size: 13px; font-weight: 500; font-family: "Open Sans", Helvetica, sans-serif; mso-line-height-rule: exactly;">
												<div class="editable-text">
													<span class="text_container">
														<a href="https://brandesty.com/tester/shop/" target="_blank" class="text_color_ffffff" style="text-decoration: none; color: #ffffff;">Shop more</a>
													</span>
												</div>
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table><!-- END column-1 -->

						<!-- vertical gap -->
						<table class="tablet_hide" width="24" align="left" border="0" cellspacing="0" cellpadding="0">
							<tr><td height="1"></td></tr>
						</table>

						<!-- column-2  -->
						<table class="table1-2" width="286" align="right" border="0" cellspacing="0" cellpadding="0">
							<tr><td height="50"></td></tr>
							<tr>
								<td class="editable-img" align="center">
									<img editable="true" mc:edit="image201" class="image1-290" src="https://brandesty.com/tester/assets/img/welcome-guy.png" style="display:block; line-height:0; font-size:0; border:0;" border="0" alt="" width="250px" />
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>


<table class="table_full editable-bg-color bg_color_f8f8f8 editable-bg-image" bgcolor="#f8f8f8" width="100%" align="center"  mc:repeatable="castellab" mc:variant="Header" cellspacing="0" cellpadding="0" border="0" style="border-bottom: 1px solid #ebebeb;background-image: url(#); background-position: top center; background-repeat: no-repeat; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" background="#">
	<tr>
		<td>
			<table class="table1" width="600" align="center" border="0" cellspacing="0" cellpadding="0">
				<tr><td height="20"></td></tr>
				<tr>
					<td>
						<table class="table1-2" align="left" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td>
									<table align="center" border="0" cellspacing="0" cellpadding="0">
										<tr>
											<td width="25" style="padding-top: 5px;">
												<div class="editable-img">
												    <a href="https://www.instagram.com/thebrandesty/" target="_blank">
												        <img editable="true" mc:edit="image701" src="https://www.camelproductions.net/wp-content/uploads/2017/08/Instagram-Logo-2017.png" width="20" style="display:inline-block;margin-right: 10px; line-height:0; font-size:0; border:0;" border="0" alt="" />
												    </a>
												</div>
											</td>
											<td mc:edit="text701" align="left" class="center_content text_color_282828" style="line-height: 1;color: #282828; font-size: 14px; font-weight: 500; font-family: "lato", Helvetica, sans-serif; mso-line-height-rule: exactly;">
												<div class="editable-text" style="line-height: 1">
													<span class="text_container">
														<a  href="https://www.instagram.com/thebrandesty/" target="_blank" class="text_color_282828" style="text-decoration: none; color: #282828;"></a>
													</span>
												</div>
											</td>
											<td width="25" style="padding-top: 5px;">
												<div class="editable-img">
												    <a href="https://twitter.com/thebrandesty/" target="_blank">
												        <img editable="true" mc:edit="image701" src="https://cdn4.iconfinder.com/data/icons/social-media-icons-the-circle-set/48/twitter_circle-512.png" width="20" style="display:inline-block;margin-right: 10px; line-height:0; font-size:0; border:0;" border="0" alt="" />
												    </a>
												</div>
											</td>
											<td mc:edit="text701" align="left" class="center_content text_color_282828" style="line-height: 1;color: #282828; font-size: 14px; font-weight: 500; font-family: "lato", Helvetica, sans-serif; mso-line-height-rule: exactly;">
												<div class="editable-text" style="line-height: 1">
													<span class="text_container">
														<a href="https://twitter.com/thebrandesty" class="text_color_282828" style="text-decoration: none; color: #282828;"></a>
													</span>
												</div>
											</td>
											<td width="25" style="padding-top: 5px;">
												<div class="editable-img">
												    <a href="https://www.facebook.com/brandesty/?ref=py_c&__xts__" target="_blank">
												        <img editable="true" mc:edit="image701" src="https://cdn4.iconfinder.com/data/icons/social-media-icons-the-circle-set/48/facebook_circle-512.png" width="20" style="display:inline-block;margin-right: 10px; line-height:0; font-size:0; border:0;" border="0" alt="" />
												    </a>
												</div>
											</td>
											<td mc:edit="text701" align="left" class="center_content text_color_282828" style="line-height: 1;color: #282828; font-size: 14px; font-weight: 500; font-family: "lato", Helvetica, sans-serif; mso-line-height-rule: exactly;">
												<div class="editable-text" style="line-height: 1">
													<span class="text_container">
														<a href="https://www.facebook.com/brandesty/?ref=py_c&__xts__" class="text_color_282828" style="text-decoration: none; color: #282828;"></a>
													</span>
												</div>
											</td>
										</tr>
										
									</table>
								</td>
							</tr>
							<tr><td height="15"></td></tr>
						</table>
						<table class="table1-2" align="right" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td>
									<table align="center" border="0" cellspacing="0" cellpadding="0">
										<tr>
											<td width="30" style="padding-top: 5px;">
												<div class=" editable-img">
													<img editable="true" mc:edit="image702" src="http://emails.castellab.com/supermail/images/51-icon-view.png" width="14" style="display: inline-block;margin-right: 10px; line-height:0; font-size:0; border:0;" border="0" alt="" />
												</div>
											</td>
											<td mc:edit="text702" align="left" class="center_content text_color_282828" style="line-height: 1; color: #282828; font-size: 14px; font-weight: 500; font-family: "lato", Helvetica, sans-serif; mso-line-height-rule: exactly;">
												<div class="editable-text" style="line-height: 1">
													<span class="text_container">
														<a href="#" class="text_color_282828" style="text-decoration: none; color: #282828;">&copy; 2020 Brandesty Content. All rights reserved.</a>
													</span>
												</div>
											</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr><td height="15"></td></tr>
						</table>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table><!-- END Wrapper -->


<!-- section-8 -->
<table class="table_full editable-bg-color bg_color_f2f2f2 editable-bg-image" bgcolor="#f2f2f2" width="100%" align="center"  mc:repeatable="castellab" mc:variant="Header" cellspacing="0" cellpadding="0" border="0"  style="background-image: url(#); background-position: top center; background-repeat: no-repeat; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" background="#">
	<tr>
		<td>
			<table class="table1" width="460" align="center" border="0" cellspacing="0" cellpadding="0" style="margin: 0 auto;">
				<!-- padding-top -->
				<tr><td height="60"></td></tr>

				<tr>
					<td mc:edit="text801"  class="center_content text_color_322f3b" align="center" style="letter-spacing: 3px;color: #322f3b; font-size: 22px; font-weight: 600; font-family: "Raleway", verdana, Helvetica, sans-serif; mso-line-height-rule: exactly;">
						<div class="editable-text">
							<span class="text_container">ABOUT US</span>
						</div>
					</td>
				</tr>
				<!-- horizontal gap -->
				<tr><td height="30"></td></tr>

				<tr>
					<td mc:edit="text802" align="center" class="text_color_1b1b1b" style="color: #1b1b1b;letter-spacing: 2px; font-size: 13px;line-height: 2; font-weight: 500; font-family: "Open Sans", Helvetica, sans-serif; mso-line-height-rule: exactly;">
						<div class="editable-text">
							<span class="text_container" style="line-height: 2;">A digital solutions consulting company known for building relevant business strategies forDesigning, Branding and improving enterprises.</span>
						</div>
					</td>
				</tr>
				<!-- padding-bottom -->
				<tr><td height="60"></td></tr>
			</table>
		</td>
	</tr>
</table>

<table class="table_full editable-bg-color bg_color_1b1b1b editable-bg-image" bgcolor="#1b1b1b" width="100%" align="center"  mc:repeatable="castellab" mc:variant="Header" cellspacing="0" cellpadding="0" border="0" style="background-image: url(#); background-position: top center; background-repeat: no-repeat; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" background="#">
	<tr>
		<td>
			<table class="table1" width="600" align="center" border="0" cellspacing="0" cellpadding="0" style="margin: 0 auto;">
				<tr><td height="30"></td></tr>
				<tr>
					<td>
						<!-- Logo -->
						<table class="no_float" width="138" align="left" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td align="center">
									<a href="#" class="editable-img">
										<img editable="true" mc:edit="image901" width="110" src="https://brandesty.com/tester/assets/img/brandesty-logo.png" style="display:block; line-height:0; font-size:0; border:0; margin: 0 auto !important;" border="0" alt="image" />
									</a>
								</td>
							</tr>
							<!-- margin-bottom -->
							<tr><td height="25"></td></tr>
						</table>

						<table class="no_float" width="" align="right" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<!-- Unsubscribe -->
								<td mc:edit="text901" style="color: #fed23f; font-size: 16px; font-weight: 400; font-family: "Open Sans", Helvetica, sans-serif; mso-line-height-rule: exactly;">
									<div class="editable-text">
										<span class="text_container"><a href="#" class="text_color_7cb342" style="text-decoration: none; color: #fed23f;">Subscribe</a></span>
									</div>
								</td>
							</tr>
							<!-- margin-bottom -->
							<tr><td height="25"></td></tr>
						</table>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>';
                $message .= '</body></html>';

                
                // Sending email
                mail($merchandise_email, $sub, $message, $headers);
            
            
            //
            
            $to = "info@brandesty.com";
            $subject = " $merchandise_firstname $merchandise_lastname has been sent a mail";
            
            $message = "
                <html>
                    <body>
                        
                        <div>
                            <table>
                           <tr>
                            <td style='width; 150px;'> <strong>Client First name</strong></td>
                            <td style='width: 400px;'> $merchandise_firstname </td>
                           </tr>
                           
                            <tr>
                            <td style='width; 150px;'> <strong>Client Last name</strong></td>
                            <td style='width: 400px;'> $merchandise_lastname </td>
                           </tr>

                           <tr>
                           <td style='width; 150px;'> <strong>Client Email Address</strong></td>
                           <td style='width: 400px;'> $merchandise_email </td>
                          </tr>

                          <tr>
                          <td style='width; 150px;'> <strong>Client Product </strong></td>
                          <td style='width: 400px;'> $merchandise_product </td>
                         </tr>
                           
                            <tr>
                            <td style='width; 150px;'> <strong>Client Phone Number</strong></td>
                            <td style='width: 400px;'> $merchandise_phone </td>
                           </tr>
                           
                            <tr>
                            <td style='width; 150px;'> <strong>Product Description</strong></td>
                            <td style='width: 400px;'> $merchandise_msg </td>
                           </tr>
                           
                        </table>
                        </div>
                    </body>
                </html>
            ";
            
        
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF=8" . "\r\n";
            
            $headers .= 'From: Brandesty <info@brandesty.com>' . "\r\n";
            $headers .= 'Bcc: bart@ekobits.academy' . "\r\n";
            
            if(mail($to, $subject, $message, $headers)){
                echo "<script> alert('Thank you for contacting Brandesty') </script>";
            }else{
                echo "<script> alert('failed die..') </script>";
            }
            $merSql = "INSERT INTO digital (firstname, lastname, merEmail, product, phoneNumber, merMessage) VALUES ('$merchandise_firstname', '$merchandise_lastname', '$merchandise_email', '$merchandise_product', '$merchandise_phone', '$merchandise_msg')";

            if(mysqli_query($connect, $merSql)){
                echo "<script> console.log('Inserted') </script>";
            }else{
                echo "<script>alert('Not Connected')</script>";
            }
    
            mysqli_close($connect);
        }
      
        
        ?>


<div class="pop-up" id="correccion-popup">
    <div class="overlay close-popup"></div>
    <div class="box l-r-container">
        <div class="close-popup x">
            <span></span>
            <span></span>
        </div>

        <div class="left">
            <h2 class="mayus c-blue">Digital Marketing</h2>
            <div class="vertical-line delay-4"></div>
            <p class="normal-p c-black">
                We utilize online based digital technologies, navigating tools and insights to promote your products and
                services
            </p>
        </div>

        <div class="right top-line">
            <div class="service">
                <div class="text">
                    <form action="" method="post">
                        <div class="text-center">
                            <h3>Place your order now.</h3>
                        </div>
                        <div class="form-div">
                            <input type="text" name="digital-firstname" required placeholder="First name"
                                class="form-control">
                        </div>
                        <div class="form-div">
                            <input type="text" name="digital-lastname" required placeholder="Last name"
                                class="form-control">
                        </div>
                        <div class="form-div">
                            <input type="text" name="digital-email" required placeholder="Email Address"
                                class="form-control">
                        </div>
                        <div class="form-div">
                            <select name="digital-product" required id="">
                                <option> <strong>Select a service</strong> </option>
                                <option>SEO</option>
                            </select>
                        </div>
                        <div class="form-div">
                            <input type="number" name="digital-phone" required placeholder="Phone Number"
                                class="form-control">
                        </div>
                        <div class="form-div">
                            <textarea type="text" rows="10" name="digital-msg" required
                                placeholder="Product Description" cols="" class="form-control"></textarea>
                        </div>
                        <div style="margin-top: 40px;">
                            <button type="submit" class="button" name="digital-btn" style="font-size: 15px !important;">
                                <span>Order Now</span> </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>