<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sri Sabyasachi</title>
<meta name="keywords" content="Astrology Website, Web Template, XHTML CSS" />
<meta name="description" content="Astrology Website, Web Template, XHTML CSS layout provided by Soubhab Pathak" />
<link href="./css/templatemo_style.css" rel="stylesheet" type="text/css" />
<link href="./css/wickedpicker.min.css" rel="stylesheet">
<script src="./js/jquery-3.5.1.min.js"></script>
<script src="./js/wickedpicker.js"></script>
<script src="./js/ui_assembly.js"></script>
<script src="./js/common_functionality.js"></script>
</head>
<body>
<div align=center>
<div id="templatmeo_container">
	<div id="templatemo_site_title_bar">
        <div id="site_title">
        	<h1><a href="#">
            	<img src="images/templatemo_logo.png" alt="logo" />
                <span>Modern Astrology and Future Predictions</span>
            </a></h1>
        </div>
    
    </div> <!-- templatemo_site_title_bar -->
    
    <div id="templatemo_menu">
        <ul id="templatemo_left_menu">
            <li><a id="homeTab" href="#home" class="current"><span></span>Home</a></li>
            <li><a id="serviceTab" href="#service"><span></span>Services</a></li>
            <li><a id="aboutusTab" href="#aboutus"><span></span>Astrologer</a></li>
        </ul>
        
	<!---	<ul id="templatemo_right_menu">
            <li><a href="#" class="first">Sitemap</a></li>
            <li><a href="#">Contact</a></li>
        </ul> --->
    </div>  <!-- end of menu --> 
    
	<div class="tab-content">
		<div id="home" class="tab current">
			<div id="templatemo_banner">
				<div id="banner_left_section">
				  <h2>Welcome to <span>Your Future</span></h2>
					
				  <p id="partOne">It is beleived that <b style="color:#FFFF00">Astrology</b> is the key that will help you to unlock a life filled with joy, love and prosperity. Once you have the tools to better understand what has been standing between you and your goals, you will be able to make better choices.</p>
				  <p id="partTwo">Every part of your <b style="color:#FFFF00">Astrology</b>, <b style="color:#FFFF00">Plam Reading reports</b> and <b style="color:#FFFF00">Numerology</b> charts will be tailored to you personally. With precise calculation system to create an insanely powerful and accurate reports all about you!</p>
				  <p id="partThree"></p>
				</div>
				
				<div id="login_section">
					<h3>Member Login</h3>
					<div class="logindiv">
						<div class="form_row">
							<label>Email :</label>
							<input class="inputfield" name="email_address" type="text" id="txt_email_address"/>
						</div>
						<div class="form_row">
							<label>Password :</label>
							<input class="inputfield" name="password" type="password" id="txt_password"/>
						</div>
						<a id="registerUser" onclick="registerUserActivation();" style="font-weight:100; color:#FFFFFF;" href="#">Register Here</a>
						<button onclick="loginUser();">Login</button>
						<br />
						<a href="#" id="forgottenPassword" onclick="forgottenUserPasswordActivation();" style="font-weight:100; color:#FFFFFF">Forgotten Password?</a>
					</div>
			    </div>
				
				<div class="cleaner"></div>
			</div> <!-- end of banner -->
			
			<div align=center id="templatemo_content">
				<div id="main_column" class= "navContent currentStat">
					<div class="section_w490">
						<h3>Quick Overview</h3>
						<div class="section_w220 fl">
							<img class="image_wrapper fl_image" src="images/birth_chart.jpg" alt="image" />
							<p>Prepare your horoscope and get full life predictions. </p>
							<a onClick="readMore();" href="#">Read more</a>
						</div>
						
						<div class="section_w220 fl">
							<img class="image_wrapper fl_image" src="images/palm_astrology.jpg" alt="image" />
							<p>Plam reading can quickly tell you about your current and future senarios.</p>
							<a onClick="readMore();" href="#">Read more</a>
						</div>
						
						<div class="section_w220 fl">
							<img class="image_wrapper fl_image" src="images/horoscope_matching.jpg" alt="image" />
							<p>Horoscope matching and your marriage predictions.</p>
							<a onClick="readMore();" href="#">Read more</a>
						</div>
						
						<div class="section_w220 fl">
							<img class="image_wrapper fl_image" src="images/gems_stones.jpeg" alt="image" />
							<p>Proper gem stones suggestion and boost your overall success and happiness. </p>
							<a onClick="readMore();" href="#">Read more</a>
						</div>
						<div class="section_w220 fl">
							<img class="image_wrapper fl_image" src="images/numerology.jpg" alt="image" />
							<p>Numerology predictions and forcast of your future with analysis.</p>
							<a onClick="readMore();" href="#">Read more</a>
						</div>
						<div class="section_w220 fl">
							<img class="image_wrapper fl_image" src="images/abcd_img.jpg" alt="image" />
							<p>Vastu is an ancient guide for a positive home, right from the entrance of a house to everything. </p>
							<a onClick="readMore();" href="#">Read more</a>
						</div>
					</div>
				</div> <!--end of main column -->
				
				<div id="main_column_2" class="navContent">
					<div id="registrationForm" class="registration_form">
						<h3>Registration Page</h3>
						<form action="#" name="registrationForm" id="redistrationFormID" method="post">
						
							<div id="errorMsgDiv" class="registrationField tab">
								<label style="float:left;"><p id="errorMsgTxt" style="color:red;">* Name field cannot be empty.</p></label>
							</div>
							<div class="registrationField">
								<label style="float:left;">Name :</label><input class="inputfield" name="txt_Name" type="text" id="txtName" />
							</div>
							<div class="registrationField">
								<label style="float:left;">Please select your gender: </label>  
								<input type="radio" id="male" name="gender" value="male" checked>
								<label for="male">Male</label>
								<input type="radio" id="female" name="gender" value="female">
								<label for="female">Female</label>
							</div>
							<div class="registrationField">
								<label style="float:left;">Date of Birth :</label><input class="inputfield" name="txt_Birth_Date" type="date" id="txtDOB" />
							</div>
							<div class="registrationField">
								<label style="float:left;">Time of Birth :</label>
								<div style="color:#FFFFFF"><input type="text" name="timepicker" id="txtTob" class="timepicker inputfield"/></div>
								<script>
								  var twelveHour = $('.timepicker-12-hr').wickedpicker();
											$('.time').text('//JS Console: ' + twelveHour.wickedpicker('time'));
											$('.timepicker-24-hr').wickedpicker({twentyFour: true});
											$('.timepicker-12-hr-clearable').wickedpicker({clearable: true});
								</script>

							</div>
							<div class="registrationField">
								<label style="float:left;">Place of Birth :</label><input class="inputfield" name="txt_Birth_Place" type="text" id="txtBirthPlace" value="Tarakeswar, Hooghly, West Bengal"/>
							</div>
							<div class="registrationField">
								<label style="float:left;">Email :</label><input class="inputfield" name="txt_Email" type="text" id="txtEmail" />
							</div>
							<div class="registrationField">
								<label style="float:left;">Password :</label><input class="inputfield" name="txt_Password" type="password" id="txtPassword" />
							</div>
							<div class="registrationField">
								<label style="float:left;">Retype Password :</label><input class="inputfield" name="txt_retype_Password" type="password" id="txtRetypePassword" />
							</div>
							<div class="registrationField">
								<label style="float:left;">Secret Question :</label>

								<select class="inputfield" name="question" onchange="enableSelectQuestion();" id="secSecretQuestion">
								  <option value="">----- Select One -----</option>
								  <option value="What is your first school?">What is your first school?</option>
								  <option value="What is the name of your childhood best friend?">What is the name of your childhood best friend?</option>
								  <option value="What is the registration number of your first vehicle?">What is the registration number of your first vehicle?</option>
								  <option value="What is the name of your first pet?">What is the name of your first pet?</option>
								  <option value="Who is your most influential person?">Who is your most influential person?</option>
								</select>
							</div>
							<div id="secret_answer_field_div" class="registrationField tab">
								<label style="float:left;">Secret Answer :</label><input class="inputfield" name="secret_answer" type="text" id="secret_answer_id" />
							</div>
							<div class="registrationField">
								<input type="button" name="Register" id="btnRegister" onclick="registerHere();" value="Register" />
							</div>
						</form>
					</div>
				</div> <!--end of main column -->
				
				<div id="main_column_3" class="navContent">
					<div id="registrationForm" class="registration_form">
						<h3>Forgotten Password Page</h3>
						<h4 id="pwdFieldValue"></h4>
						<form action="#" name="forgetPasswordForm" id="forgetPasswordFormID" method="post">
							<div class="registrationField" id="answerTheFollowingQues0">
								<label style="float:left;">Email :</label><input class="inputfield" name="txt_Email_FP" type="text" id="txtEmailFP" />
							</div>
							<input type="hidden" id="hdtForgottenPasswordFld" name="hdtForgottenPasswordFld" value="first" />
							<div class="registrationField navContent" id="answerTheFollowingQues1">
								<label id="lblSecretQuestionAndSuccessReplyID" style="float:left;font-weight:1000">Answer the following question.</label>
							</div>
							<div class="registrationField navContent" id="answerTheFollowingQues2">
								<label id="lblSecretQuestionAndSuccessReply" style="color:#FFFF00;float:left;font-weight:1000"></label>
							</div>
							<div class="registrationField navContent" id="answerTheFollowingQues3">
								<label style="float:left;">Answer :</label><input class="inputfield" name="txt_Answer_FP" type="text" id="txtAnswerFP" />
							</div>
							<div class="registrationField" id="answerTheFollowingQues4">
								<input type="button" name="btnRememberPassword" id="btnRememberPassword" onclick="forgetPassword();" value="Submit" />
							</div>
						</form>
					</div>
				</div> <!--end of main column -->
				<div id="main_column_4" class="navContent">
					<div id="registrationForm" class="registration_form">
						<h3 id="header4p" style="text-align:left;">Ask Sabyasachi</h3>
						<h4 id="pwdFieldValue"></h4>
						<div id="errorMsgDivLoggedinGenericUser" class="registrationField tab">
							<label style="float:left;"><p id="errorMsgTxtGenericUser" style="color:red;">* Please select a question from dropdown.</p></label>
						</div>
						<form action="#" name="forgetPasswordForm" id="forgetPasswordFormID" method="post">
							<input type="hidden" id="hddnGenericUserId" name="hddnGenericUserId" value="">
							<div class="registrationField">
								<label style="float:left;">Select Question :</label>
								<select class="inputfield" name="selectGenereciUsersQuestion" id="selectGenereciUsersQuestion">
								  <option value="">----- Select One ---</option>
								  <option value="What about my health and longevity?">What about my health and longevity?</option>
								  <option value="What about my education?">What about my education?</option>
								  <option value="Shall I shine in Research?">Shall I shine in Research?</option>
								  <option value="Will there be any problem in my service?">Will there be any problem in my service?</option>
								  <option value="What is my business prediction?">What is my business prediction?</option>
								  <option value="What about my financial expenses?">What about my financial expenses?</option>
								  <option value="What about my relationships with my spouse and relatives?">What about my relationships with my spouse and relatives?</option>
								  <option value="Will my married life be good?">Will my married life be good?</option>
								  <option value="What about my friends and enemies?">What about my friends and enemies?</option>
								  <option value="Is there any chance for accident or operation?">Is there any chance for accident or operation?</option>
								  <option value="What about my mental peace?">What about my mental peace?</option>
								  <option value="What about my honour and fame in life?">What about my honour and fame in life?</option>
								  <option value="Is there any chance for sudden gain or luck?">Is there any chance for sudden gain or luck?</option>
								  <option value="Is there any chance for foreign travel?">Is there any chance for foreign travel?</option>
								  <option value="Is there any chance for spiritual development?">Is there any chance for spiritual development?</option>
								</select>
							</div>
							<div class="registrationField">
								<input type="button" name="GenericUserQuestion" id="btnGenericUserQuestion" onclick="genericUserAskedQuestion();" value="Submit" />
							</div>
							<h4 id="hdrPrevQuestion" style="text-align:left;">Previous Questions</h4>
							<div id="genericUserQuestionPart">
							<!--	<div class="registrationField">
									<label style="float:left;">Q1: </label>
									<label style="float:left;">Shall I face any accident in the next year?</label>
									<br />
									<br/>
									<label style="float:left;text-align:left;"> Waiting for answer.</label>
								</div>
								<div class="registrationField">
									<label style="float:left;">Q2: </label>
									<label style="float:left;">What will be my financial condition next year?</label>
									<br />
									<br/>
									<label style="float:left;text-align:left;">Answer: Your financial condition will improve a lot. You will receive money from unexpected sources.</label>
								</div> -->
							</div>
						</form>
					</div>
				</div> <!--end of main column --> 
				<div id="main_column_5" class="navContent">
					<div id="registrationForm" class="registration_form">
						<input type="hidden" id="hddnGenericModeratorId" name="hddnGenericModeratorId" value="">
						<h3 style="text-align:left;">Sabyasachi, Please Answer &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" id="idLogout" onclick="logoutFunction();" style="font-weight:100; color:#EF0622">Logout</a></h3>
						<label id="lblTotalModeratorQuestion" style="float:left;color:red;">(Total number of questions pending for answer is 1234)</label>
						<div id="moderatorQuestionPart">
						<!--	<div class="registrationField">
								<div id="divModeratorQuestionPart1">
									<label id="lblModeratorQuestionPart1" style="float:left;">Q1: Shall I face any accident in the next year?</label>
									<input type="button" name="btnModeratorQuestionPart1" id="btnModeratorQuestionPart1" onclick="registerHere();" value="Answer" />
									<input type="hidden" id="hddnQidModeratorQuestionPart1" name="hddnQidModeratorQuestionPart1" value="1">
									<input type="hidden" id="hddnuserIdModeratorQuestionPart1" name="hddnuserIdModeratorQuestionPart1" value="3">
									<input type="hidden" id="hddnuserNameModeratorQuestionPart1" name="hddnuserNameModeratorQuestionPart1" value="SSSP PP">
									<input type="hidden" id="hddnuserDOBModeratorQuestionPart1" name="hddnuserDOBModeratorQuestionPart1" value="1987-09-23 11:23:45">
									<input type="hidden" id="hddnuserGenderModeratorQuestionPart1" name="hddnuserGenderModeratorQuestionPart1" value="male">
									<input type="hidden" id="hddnuserPOBModeratorQuestionPart1" name="hddnuserPOBModeratorQuestionPart1" value="Chinsurah, Hooghly. West Bengal">
								</div>
							</div>
							<div class="registrationField">
								<div id="divModeratorQuestionPart2">
									<label id="lblModeratorQuestionPart2" style="float:left;">Q2: What will be my financial condition next year?</label>
									<input type="button" name="btnModeratorQuestionPart2" id="btnModeratorQuestionPart2" onclick="registerHere();" value="Answer" />
									<input type="hidden" id="hddnQidModeratorQuestionPart2" name="hddnQidModeratorQuestionPart2" value="2">
									<input type="hidden" id="hddnuserIdModeratorQuestionPart2" name="hddnuserIdModeratorQuestionPart2" value="3">
									<input type="hidden" id="hddnuserNameModeratorQuestionPart2" name="hddnuserNameModeratorQuestionPart2" value="STSP PP">
									<input type="hidden" id="hddnuserDOBModeratorQuestionPart2" name="hddnuserDOBModeratorQuestionPart2" value="1988-09-16 10:27:47">
									<input type="hidden" id="hddnuserGenderModeratorQuestionPart2" name="hddnuserGenderModeratorQuestionPart2" value="male">
									<input type="hidden" id="hddnuserPOBModeratorQuestionPart2" name="hddnuserPOBModeratorQuestionPart2" value="Bandel, Hooghly. West Bengal">
								</div>
							</div> -->
						</div> 
					</div>
				</div> <!--end of main column -->
				<div id="side_column">
				
					<div id="quick_contact">
						<h3>Quick Contact</h3>
						<ul class="list">
							<li>Astrologer : Sri Sabyasachi</li>
							<li>Contact No: +91 9732868360</li>
							<li>WhatsApp: +91 9732868360</li>
							<li>Email: sri.sabyasachi@yahoo.com</li>
						</ul>
					</div>
				
				</div> <!-- end of side column -->
			   <div class="cleaner"></div>
			</div> <!-- end of templatemo_content -->
		</div> <!--- Home Tab Content Completes here --->
		<div id="service" class="tab">
			<div id="body_banner">
				<div id="banner_left_section">
					<h2>Welcome to <span>Your Future</span></h2>
					<p>The purpose of <b style="color:#FFFF00">Astrology</b> is to guide you in the unforseen future safely. <b style="color:#FFFF00">Astrology</b> helps you to take right decisions, improve finance, to find suitable partner for marriage etc.</p>
					<p>The following services are offered to improve your overall quality of life.</p>
				</div>
			
				<div id="main_column">
					<div class="section_body">
						<h3></h3>
						<div class="section_body_content fl">
							<img class="image_wrapper fl_image" src="images/birth_chart.jpg" alt="image" />
							<p class="section_text_class">Prepare your <b>Horoscope</b>. Preparation of kunduli is time consuming. Having a Kunduli is always helpful to predict the future accurately. Services are ready for you to build kunduli and get full life predictions. </p>
						</div>
						
						<div class="section_body_content fl">
							<img class="image_wrapper fl_image" src="images/palm_astrology.jpg" alt="image" />
							<p class="section_text_class"><b>Palmistry</b>, the study of the palm, is mainly to observe the palm's shape, color,and lines as well as the length of the fingers. Some people also take the spirals of the fingers into consideration. People use itas a way to determine good or bad luck. They believe that palmistry can help them learn about their life and realize more about themselves.</p>
						</div>
						
						<div class="section_body_content fl">
							<img class="image_wrapper fl_image" src="images/horoscope_matching.jpg" alt="image" />
							<p class="section_text_class">During <b>Horoscope</b> matching, the horoscopes of the bride and groom are matched to ascertain whether their married life will be happy and successful. If certain number of points or more points match, it makes a good marriage and if the matches are below that certain points, then the marriage is not approved by astrology.</p>
						</div>
						
						<div class="section_body_content fl">
							<img class="image_wrapper fl_image" src="images/numerology.jpg" alt="image" />
							<p class="section_text_class"><b>Numerology</b> is the divine or mystical relationship between a number and one or more coinciding events. It is also the study of the numerical value of the letters in words, names, and ideas. It is often associated with the paranormal, alongside astrology and similar divinatory arts. </p>
						</div>
						
						<div class="section_body_content fl">
							<img class="image_wrapper fl_image" src="images/gems_stones.jpeg" alt="image" />
							<p class="section_text_class"><b>Gemstones</b> are considered as a source of new hope and energy to solve the difficulties of life caused by the unfavorable conditions of planets in a horoscope. Each planet is represented by a gemstone which consists its energy. </p>
						</div>
						
						<div class="section_body_content fl">
							<img class="image_wrapper fl_image" src="images/abcd_img.jpg" alt="image" />
							<p class="section_text_class"><b>Vastu shastra</b> is a traditional Indian system of architecture originating in India. Texts from the Indian subcontinent describe principles of design, layout, measurements, ground preparation, space arrangement, and spatial geometry.</p>
						</div>

					</div>
				</div> <!--end of main column -->
			</div>
		</div> <!--- Service Tab completes here --->
		<div id="aboutus" class="tab">
			<div id="body_banner">
				<div id="banner_left_section">
					<h2>Welcome to <span>Your Future</span></h2>
					<p>The purpose of <b style="color:#FFFF00">Astrologer</b> is to guide you in the unforeseen future safely. An <b style="color:#FFFF00">Astrologer's</b> responsibility is to help you to take right decisions from your future upcoming events.</p>
					<p>An Astrologer is also fortune teller and provide proper guidance throughout your life.</p>
				</div>
			</div>
			
			<div id="main_column_aboutus">
				<div class="section_body_aboutus">
					<h3></h3>
					<div class="section_body_content_aboutus fl">
						<p class="section_text_class"><b>Sri Sabyasachi</b> is a very well known astrologer. He is having more than 25 years of experience in astrology.</p>
					</div>
					
					<div class="section_body_content_aboutus fl">
						<p class="section_text_class"><b>Sri Sabyasachi</b> is an expert in the filed of palmistry. <b>Sri Sabyasachi</b> is also an expert in <b>Vastu Shastra</b>.</p>
					</div>
					
					<div class="section_body_content_aboutus fl">
						<p class="section_text_class"><b>Sri Sabyasachi</b> provides excellent suggestion in horoscope matching for proper match and to overcome any future problem in married life. <b>Sri Sabyasachi</b> is also an well known numerologist. <b>Sri Sabyasachi</b> also provides proper gemstones to overcome difficulties.</p>
					</div>
					
					<div class="section_body_content_aboutus fl">
						<p class="section_text_class">You are free to connect <b>Sri Sabyasachi</b> at any time to get proper suggestion to overcome any problem. Contact details are given in this website. <b>Sri Sabyasachi</b> is a <b>Traditional</b> and <b>K.P.Bisarad(MKP)</b> astrologer.</p>
					</div>
				</div>
			</div> <!--end of main column -->
			<div id="side_column_aboutus">
				<div id="quick_contact_aboutus">
				</div>
			</div> <!-- end of side column -->
		</div> <!--- About Us completes here --->
	</div>
    
	<div id="templatemo_footer">
        <ul class="footer_menu">
        	<li><a id="footerHomeID" style="font-weight:1000;" onclick="emToggleboldenHomeFooter();" href="#home" class="activeText"><span></span>Home</a></li>
            <li><a id="footerServiceID" style="font-weight:100;" onclick="emToggleboldenServiceFooter();" href="#service"><span></span>Services</a></li>
            <li><a id="footerAboutUsID" style="font-weight:100;" onclick="emToggleboldenAboutUsFooter();" href="#aboutus"><span></span>Astrologer</a></li>
        </ul>
        
        Copyright © <label id="yearLabel"> </label> <b style="color:#FFFF00"><strong>Sri Sabyasachi</strong></b>
	</div> <!-- end of footer -->

	
</div> <!-- end of tempatemo_container -->
</div>
<!--- <div align=center>This template  downloaded form <a href='http://all-free-download.com/free-website-templates/'>free website templates</a></div></body> --->
</body>
</html>