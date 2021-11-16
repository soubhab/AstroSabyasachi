$(document).ready(function()
{	
	/* Invoke current Year and add it at the copy right text. */
	document.getElementById("yearLabel").innerHTML = window.getCurrentYear();
	
	/* Initialize Timepicker Plugin. */
	$('.timepicker').wickedpicker();
	
	jQuery('#templatemo_menu #templatemo_left_menu a').on('click', function(e) {
		var currentAttrValue = jQuery(this).attr('href');
		jQuery(this).addClass('current');
		jQuery(this).parent('li').siblings().children().removeClass('current');
		
		jQuery(currentAttrValue).addClass('current');
		jQuery(currentAttrValue).siblings().removeClass('current');
		
		if(currentAttrValue == '#home')
		{
			document.getElementById("footerHomeID").style.fontWeight = "1000";
			document.getElementById("footerServiceID").style.fontWeight = "100";
			document.getElementById("footerAboutUsID").style.fontWeight = "100";
			
			document.getElementById("forgottenPassword").style.fontWeight = "100";
			document.getElementById("registerUser").style.fontWeight = "100";
			jQuery('#main_column').addClass('currentStat');
			jQuery('#main_column_2').removeClass('currentStat');
			jQuery('#main_column_3').removeClass('currentStat');
			jQuery('#main_column_4').removeClass('currentStat');
			jQuery('#main_column_5').removeClass('currentStat');
			$('#login_section').attr('style', 'display:block');
			document.getElementById("txt_email_address").value="";
			document.getElementById("txt_password").value="";
		}
		else if (currentAttrValue == '#service')
		{
			document.getElementById("footerHomeID").style.fontWeight = "100";
			document.getElementById("footerServiceID").style.fontWeight = "1000";
			document.getElementById("footerAboutUsID").style.fontWeight = "100";
		}
		else if(currentAttrValue == '#aboutus')
		{
			document.getElementById("footerHomeID").style.fontWeight = "100";
			document.getElementById("footerServiceID").style.fontWeight = "100";
			document.getElementById("footerAboutUsID").style.fontWeight = "1000";
		}		
	});
});

var myPopup;

/* This method returns the current year. */
function getCurrentYear() 
{
  var d = new Date();
  var n = d.getFullYear();
  return n;
}

/* This is for Read More link in the home page. */
function readMore()
{
	document.getElementById("serviceTab").click();
}

/* Footer menu Home button Click */
function emToggleboldenHomeFooter() { 
	var fontWeightVal = document.getElementById("footerHomeID").style.fontWeight;
	if(fontWeightVal == '100')
	{
		document.getElementById("footerHomeID").style.fontWeight = "1000";
		document.getElementById("footerServiceID").style.fontWeight = "100";
		document.getElementById("footerAboutUsID").style.fontWeight = "100";
		
		document.getElementById("homeTab").click();
	}
}

/* Footer menu Service button Click */
function emToggleboldenServiceFooter() { 
	var fontWeightVal = document.getElementById("footerServiceID").style.fontWeight;
	if(fontWeightVal == '100')
	{
		document.getElementById("footerHomeID").style.fontWeight = "100";
		document.getElementById("footerServiceID").style.fontWeight = "1000";
		document.getElementById("footerAboutUsID").style.fontWeight = "100";
		
		document.getElementById("serviceTab").click();
	}
}

/* Footer menu Aboutus button Click */
function emToggleboldenAboutUsFooter() { 
	var fontWeightVal = document.getElementById("footerAboutUsID").style.fontWeight;
	if(fontWeightVal == '100')
	{
		document.getElementById("footerHomeID").style.fontWeight = "100";
		document.getElementById("footerServiceID").style.fontWeight = "100";
		document.getElementById("footerAboutUsID").style.fontWeight = "1000";
		
		document.getElementById("aboutusTab").click();
	}
}

/* Member menu Registration link Click */
function registerUserActivation() 
{
	resetRegisterUser();
	resetForgottenUserPassword();
	jQuery('#main_column_3').removeClass('currentStat');
	document.getElementById("forgottenPassword").style.fontWeight = "100";
	
	var fontWeightVal = document.getElementById("registerUser").style.fontWeight;
	if(fontWeightVal == '100')
	{
		document.getElementById("registerUser").style.fontWeight = "1000";
		
		document.getElementById("partOne").innerHTML = "Registration help you generate your <b style=\"color:#FFFF00\">Astrological</b> Birth-Chart and predict your future.";
		document.getElementById("partTwo").innerHTML = "Registration also help you to ask questions to <b style=\"color:#FFFF00\">Astrologer</b>.";
		document.getElementById("partThree").innerHTML = "*Fill all the fields to proceed the registration.";
		
		jQuery('#main_column').removeClass('currentStat');
		jQuery('#main_column_2').addClass('currentStat'); 
		
		/*document.getElementById("homeTab").click(); */
	}
	else
	{
		document.getElementById("registerUser").style.fontWeight = "100";
		
		document.getElementById("partOne").innerHTML = "It is beleived that <b style=\"color:#FFFF00\">Astrology</b> is the key that will help you to unlock a life filled with joy, love and prosperity. Once you have the tools to better understand what has been standing between you and your goals, you will be able to make better choices.";
		document.getElementById("partTwo").innerHTML = "Every part of your <b style=\"color:#FFFF00\">Astrology</b>, <b style=\"color:#FFFF00\">Plam Reading reports</b> and <b style=\"color:#FFFF00\">Numerology</b> charts will be tailored to you personally. With precise calculation system to create an insanely powerful and accurate reports all about you!";
		document.getElementById("partThree").innerHTML = "";
		
		jQuery('#main_column').addClass('currentStat');
		jQuery('#main_column_2').removeClass('currentStat'); 
	}
}

function resetRegisterUser()
{
	document.getElementById("txtName").value = "";
	
	document.getElementById("male").checked = true;
	document.getElementById("female").checked = false;
	
	document.getElementById("txtDOB").value = "";
	
	document.getElementById("txtTob").value = "";
	
	document.getElementById("txtBirthPlace").value = "Tarakeswar, Hooghly, West Bengal";
	
	document.getElementById("txtEmail").value = "";
	
	document.getElementById("txtPassword").value = "";
	
	document.getElementById("txtRetypePassword").value = "";
	
	var secSecretQuestionElement = document.getElementById("secSecretQuestion");
	var secSecretQuestionElementVal = secSecretQuestionElement.options[secSecretQuestionElement.selectedIndex].value;
	$("#secSecretQuestion").val("");
	
	document.getElementById("secret_answer_id").value = "";
	
	//document.getElementById("errorMsgTxt").innerHTML = errorMessage;
	jQuery('#errorMsgDiv').removeClass('current');
	jQuery('#secret_answer_field_div').removeClass('current');
	
	document.getElementById("txt_email_address").value = "";
	document.getElementById("txt_password").value = "";
}

function resetForgottenUserPassword()
{
	document.getElementById("pwdFieldValue").innerText = "";
	document.getElementById("txtEmailFP").value = "";
	document.getElementById("hdtForgottenPasswordFld").value = "first";
	
	jQuery('#answerTheFollowingQues1').removeClass('currentStat');
	jQuery('#answerTheFollowingQues2').removeClass('currentStat'); 
	jQuery('#answerTheFollowingQues3').removeClass('currentStat');
}	

/* Member menu Forgotten Password link Click */
function forgottenUserPasswordActivation() 
{ 
	resetRegisterUser();
	resetForgottenUserPassword();
	document.getElementById("registerUser").style.fontWeight = "100";
	
	var fontWeightVal = document.getElementById("forgottenPassword").style.fontWeight;
	if (fontWeightVal == '100')
	{
		document.getElementById("forgottenPassword").style.fontWeight = "1000";
		
		document.getElementById("partOne").innerHTML = "This will help you generate your <b style=\"color:#FFFF00\">Astrological</b> Website password.";
		document.getElementById("partTwo").innerHTML = "This will also help you to login into this <b style=\"color:#FFFF00\">Astrological</b> website.";
		document.getElementById("partThree").innerHTML = "*Fill all the necessary fields to \"<b style=\"color:#FFFF00\">Remember Password\"</b>.";
		
		jQuery('#main_column').removeClass('currentStat');
		jQuery('#main_column_2').removeClass('currentStat'); 
		jQuery('#main_column_3').addClass('currentStat');
		
		resetForgottenPassword();
	}
	else
	{
		document.getElementById("forgottenPassword").style.fontWeight = "100";
		
		document.getElementById("partOne").innerHTML = "It is beleived that <b style=\"color:#FFFF00\">Astrology</b> is the key that will help you to unlock a life filled with joy, love and prosperity. Once you have the tools to better understand what has been standing between you and your goals, you will be able to make better choices.";
		document.getElementById("partTwo").innerHTML = "Every part of your <b style=\"color:#FFFF00\">Astrology</b>, <b style=\"color:#FFFF00\">Plam Reading reports</b> and <b style=\"color:#FFFF00\">Numerology</b> charts will be tailored to you personally. With precise calculation system to create an insanely powerful and accurate reports all about you!";
		document.getElementById("partThree").innerHTML = "";
		
		jQuery('#main_column').addClass('currentStat');
		jQuery('#main_column_2').removeClass('currentStat'); 
		jQuery('#main_column_3').removeClass('currentStat');
	}
}

function enableSelectQuestion()
{
	jQuery('#secret_answer_field_div').addClass('current');
}

function resetForgottenPassword()
{
	jQuery('#answerTheFollowingQues0').removeClass('navContent');
	jQuery('#answerTheFollowingQues4').removeClass('navContent');
	
	document.getElementById("pwdFieldValue").innerHTML = "";
	document.getElementById("txtAnswerFP").value = "";
}

function buildLoginJson(emailIdValue, answerVal)
{
	var JSONObj = {"email":emailIdValue,"passwordText":answerVal};

	jsonValue = JSON.stringify(JSONObj);

	return jsonValue;
}

function loginUser()
{
	var txtNameVal = document.getElementById("txt_email_address").value.trim();
	var txtPasswordVal = document.getElementById("txt_password").value.trim();
	
	var uploadLoginJson = buildLoginJson(txtNameVal, txtPasswordVal);
	//make AJAX call.
	$.ajax({
		type: "POST",
		url: "./common_account.php",
		data: {"login" : uploadLoginJson},
		beforeSend : function() {
			/* Do some start work here */
		},
		success: function (data) {
			var obj = JSON.parse(data);
			if (obj.status == 'ok')
			{
				loggedInUser(obj.userType, obj.userName, obj.userId);
			}
			else {
				alert("Invalid Login");
			}	
		},
		error: function (textStatus, errorThrown) {
			alert (textStatus + " " +errorThrown);
		}
	}); 
	//done after here
}

function logoutFunction()
{
	location.reload();
}	

function loggedInUser(userType, userName, userId)
{	
	//location.reload();
	
	$('#main_column').removeClass('currentStat');
	$('#main_column_2').removeClass('currentStat');
	$('#main_column_3').removeClass('currentStat');
	
	$('#login_section').attr('style', 'display:none');
	
	if(userType == 'U')
	{
		$('#main_column_4').addClass('currentStat');
		$('#main_column_5').removeClass('currentStat');
		document.getElementById("hddnGenericUserId").value = userId;
		document.getElementById("header4p").innerHTML = "Hello " +userName +"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=\"#\" id=\"idLogout\" onclick=\"logoutFunction();\" style=\"font-weight:100; color:#EF0622\">Logout</a>";
		
		userFunctionalityInvocation(userId);
	}
	else if (userType == 'A')
	{
		$('#main_column_4').removeClass('currentStat');
		$('#main_column_5').addClass('currentStat');
		document.getElementById("hddnGenericModeratorId").value = userId;
		
		moderatorFunctionalityInvocation(userId);
	}	
}

function userFunctionalityInvocation(userId)
{
	var userInitialPlayloadJson = userInitialPlayload(userId);
	//make AJAX call.
	$.ajax({
		type: "POST",
		url: "./common_account.php",
		data: {"userFetchPart" : userInitialPlayloadJson},
		beforeSend : function() {
			/* Do some start work here */
		},
		success: function (data) {
		//	alert(data);
			var obj = JSON.parse(data);
			if (obj.status == 'ok')
			{
				updateUserPart(obj.data);
			}
			else {
				alert("Some Error Occurred");
			} 
		},
		error: function (textStatus, errorThrown) {
			alert (textStatus + " PP moderatorId:"+userId +" " + +errorThrown);
		}
	}); 
	//done after here
}

function updateUserPart(jsonArrayData)
{
	var innerDivData = "";
	
	var i=1;
	for(i=1; i<=jsonArrayData.length; i++)
	{
		jsonValue = jsonArrayData[i-1];
		
		innerDivData = innerDivData + "<div class=\"registrationField\">";
		innerDivData = innerDivData + "<label style=\"float:left;\">Q" +i +":&nbsp;</label>";
		
		
		if(jsonValue['isAnswered'] == 'NO')
		{
			innerDivData = innerDivData + "<label style=\"float:left;\">" +jsonValue['question'].trim() +"</label><br /><label style=\"color:red;float:left;\">(Asked on "+jsonValue['questionDateTime'] +")</label>";
			innerDivData = innerDivData + "<br />";
			innerDivData = innerDivData + "<br />";
			innerDivData = innerDivData + "<label style=\"float:left;text-align:left;\"> Waiting for answer.</label>";
		}
		else
		{
			innerDivData = innerDivData + "<label style=\"float:left;\">" +jsonValue['question'].trim() +"</label><br /><label style=\"color:red;float:left;\"> (Answered on "+jsonValue['lastUpdatedDateTime'] +")</label>";
			innerDivData = innerDivData + "<br />";
			innerDivData = innerDivData + "<br />";
			innerDivData = innerDivData + "<label style=\"float:left;text-align:left;\"><strong>Answer:&nbsp;</strong>" +jsonValue['answer'] +"</label>";
		}	
		
		innerDivData = innerDivData + "</div>";
	}
	
	$("#genericUserQuestionPart").empty();
	
	document.getElementById("genericUserQuestionPart").innerHTML = innerDivData;
}

function userInitialPlayload(userId)
{
	var JSONObj = {"userId":userId};

	jsonValue = JSON.stringify(JSONObj);

	return jsonValue;
}	

function moderatorFunctionalityInvocation(userId)
{
	var moderatorInitialPlayloadJson = moderatorInitialPlayload(userId);
	//make AJAX call.
	$.ajax({
		type: "POST",
		url: "./common_account.php",
		data: {"moderatorFetchPart" : moderatorInitialPlayloadJson},
		beforeSend : function() {
			/* Do some start work here */
		},
		success: function (data) {
			//alert(data);
			var obj = JSON.parse(data);
			if (obj.status == 'ok')
			{
				updateModeratorPart(obj.data, obj.moderatorId, obj.totalRows);
			}
			else {
				alert("Some Error Occurred");
			} 
		},
		error: function (textStatus, errorThrown) {
			alert (textStatus + " PP moderatorId:"+userId +" " + +errorThrown);
		}
	}); 
	//done after here
}	

function moderatorInitialPlayload(moderatorUserId)
{
	var JSONObj = {"moderatorId":moderatorUserId};

	jsonValue = JSON.stringify(JSONObj);

	return jsonValue;
}

function updateModeratorPart(jsonArrayData, moderatorId, totalRows)
{
	var innerDivData = "";
	
	var i=1;
	for(i=1; i<=jsonArrayData.length; i++)
	{
		jsonValue = jsonArrayData[i-1];
		
		innerDivData = innerDivData + "<div class=\"registrationField\">";
		innerDivData = innerDivData + "<div id=\"divModeratorQuestionPart" +i +"\">";
		innerDivData = innerDivData + "<label id=\"lblModeratorQuestionPart" +i +"\" style=\"float:left;\">Q" +i +": " +jsonValue['question'] +"</label><br /><label style=\"color:red;float:left;\">(Asked by " +jsonValue['name'] +" on "+jsonValue['questionDateTime'] +")</label>";
		innerDivData = innerDivData + "<br />";
		innerDivData = innerDivData + "<input type=\"button\" style=\"float:left;padding: 5px 5px 5px 5px;\" name=\"btnModeratorQuestionPart" +i +"\" id=\"btnModeratorQuestionPart" +i +"\" onclick=\"openPopup(" +jsonValue['question_id'] +"," +moderatorId +");\" value=\"Answer Q" +i +"\" />";
		innerDivData = innerDivData + "<input type=\"hidden\" id=\"hddnQidModeratorQuestionPart" +i +"\" name=\"hddnQidModeratorQuestionPart" +i +"\" value=\"" +jsonValue['question_id'] +"\">";
		
		innerDivData = innerDivData + "</div>";
		innerDivData = innerDivData + "</div>";
	}
	
	$("#moderatorQuestionPart").empty();
	
	document.getElementById("moderatorQuestionPart").innerHTML = innerDivData;
	document.getElementById("lblTotalModeratorQuestion").innerHTML = "(Total number of questions pending for answer is " +totalRows +")";
}

function updateModeratorPartFromPopup(jsonArrayData, moderatorId, totalRows)
{
	var innerDivData = "";
	
	var i=1;
	for(i=1; i<=jsonArrayData.length; i++)
	{
		jsonValue = jsonArrayData[i-1];
		
		innerDivData = innerDivData + "<div class=\"registrationField\">";
		innerDivData = innerDivData + "<div id=\"divModeratorQuestionPart" +i +"\">";
		innerDivData = innerDivData + "<label id=\"lblModeratorQuestionPart" +i +"\" style=\"float:left;\">Q" +i +": " +jsonValue['question'] +"</label><br /><label style=\"color:red;float:left;\">(Asked by " +jsonValue['name'] +" on "+jsonValue['questionDateTime'] +")</label>";
		innerDivData = innerDivData + "<br />";
		innerDivData = innerDivData + "<input type=\"button\" style=\"float:left;padding: 5px 5px 5px 5px;\" name=\"btnModeratorQuestionPart" +i +"\" id=\"btnModeratorQuestionPart" +i +"\" onclick=\"openPopup(" +jsonValue['question_id'] +"," +moderatorId +");\" value=\"Answer Q" +i +"\" />";
		innerDivData = innerDivData + "<input type=\"hidden\" id=\"hddnQidModeratorQuestionPart" +i +"\" name=\"hddnQidModeratorQuestionPart" +i +"\" value=\"" +jsonValue['question_id'] +"\">";
		
		innerDivData = innerDivData + "</div>";
		innerDivData = innerDivData + "</div>";
	}
	
	$("#moderatorQuestionPart",opener.document).empty();
	
	$("#moderatorQuestionPart",opener.document).html(innerDivData);
	$("#lblTotalModeratorQuestion",opener.document).html("(Total number of questions pending for answer is " +totalRows +")");
	
	//document.getElementById("moderatorQuestionPart").innerHTML = innerDivData;
}	

function openPopup(questionId, moderatorId)
{
	//window.open ("http://www.javascript-coder.com", "mywindow","menubar=1,resizable=1,width=6//00px,height=400px");
	myPopup = window.open ("answerpopup.php?questionId="+questionId +"&moderatorUserId=" +moderatorId, "mywindow","menubar=1,resizable=1,width=600px,height=400px");
}

function genericUserAskedQuestion()
{
	var secGenericUserQuestion = document.getElementById("selectGenereciUsersQuestion");
	var txtGenericUserQuestionVal = secGenericUserQuestion.options[secGenericUserQuestion.selectedIndex].value;
	
	if(txtGenericUserQuestionVal == "")
	{
		jQuery('#errorMsgDivLoggedinGenericUser').addClass('current');
	}
	else
	{
		var txtUserId = document.getElementById('hddnGenericUserId').value;
		var genericUserQuestionJson = buildGenericUserQuestionPlayload(txtUserId, txtGenericUserQuestionVal);
		
		//make AJAX call.
		$.ajax({
			type: "POST",
			url: "./common_account.php",
			data: {"genericUserQuestion" : genericUserQuestionJson},
			beforeSend : function() {
				/* Do some start work here */
			},
			success: function (data) {
			//	alert(data);
			/* var obj = JSON.parse(data);
				if (obj.status == 'ok')
				{
					loggedInUser(obj.userType, obj.userName, obj.userId);
				}
				else {
					alert("Invalid Login");
				} */
				userFunctionalityInvocation(txtUserId);
			},
			error: function (textStatus, errorThrown) {
				alert (textStatus + " " +errorThrown);
			}
		}); 
		//done after here
	}
}

function buildGenericUserQuestionPlayload(txtUserId, txtGenericUserQuestionVal)
{
	var JSONObj = {"genericUserId":txtUserId,"genericUserQuestion":txtGenericUserQuestionVal};

	jsonValue = JSON.stringify(JSONObj);

	return jsonValue;
}

function submitAnswerFromPopup(questionId, moderatorUserId)
{
	var txtAnswer = document.getElementById("popupTextAreaAnswer").value.trim();
	
	if(txtAnswer == "")
	{
		document.getElementById("lblPopupErrorMessage").style.display = "block";
	}
	else 
	{
		var submitModeratorAnswerJson = buildModeratorAnswerPlayload(questionId, txtAnswer, moderatorUserId);
		
		var moderatorInitialPlayloadJson;
		//make AJAX call.
		$.ajax({
			type: "POST",
			url: "./common_account.php",
			data: {"moderatorAnswerSection" : submitModeratorAnswerJson},
			beforeSend : function() {
				/* Do some start work here */
			},
			success: function (data) {
			//	alert(data);
				var obj = JSON.parse(data);
				if (obj.status == 'ok')
				{
					moderatorInitialPlayloadJson = moderatorInitialPlayload(obj.moderatorUserId);
				}
				else {
					alert("Some error occurred.");
				} 
			},
			error: function (textStatus, errorThrown) {
				alert (textStatus + " Outer " +errorThrown);
			},
			complete: function() {
				//alert(moderatorInitialPlayloadJson);
				//make AJAX call.
				$.ajax({
					type: "POST",
					url: "./common_account.php",
					data: {"moderatorFetchPart" : moderatorInitialPlayloadJson},
					beforeSend : function() {
						/* Do some start work here */
					},
					success: function (data2) {
						//alert("Data Two : " +data2);
						var obj2 = JSON.parse(data2);
						if (obj2.status == 'ok')
						{
							updateModeratorPartFromPopup(obj2.data, obj2.moderatorId, obj2.totalRows);
						}
						else {
							alert("Some Error Occurred");
						} 
					},
					error: function (textStatus, errorThrown) {
						alert (textStatus + " Internal moderatorId:"+userId +" " + +errorThrown);
					},
					complete: function() {
					//	window.opener.location.reload(); // or whatever needs to be done (if anything)
						window.close();
						return false;
					}
				}); 
				//done after here
			}
		}); 
		//done after here
	}
}	

function buildModeratorAnswerPlayload(questionId, txtAnswer, moderatorUserId)
{
	var JSONObj = {"questionId":questionId,"moderatorAnswer":txtAnswer,"moderatorUserId":moderatorUserId};

	jsonValue = JSON.stringify(JSONObj);

	return jsonValue;
}