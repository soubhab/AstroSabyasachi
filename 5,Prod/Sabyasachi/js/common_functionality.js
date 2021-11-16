/* Registration link Click */
function registerHere()
{ 
	var errorMessage = "";
	
	var txtNameVal = document.getElementById("txtName").value.trim();
	
	var genderVal = document.querySelector('input[name = "gender"]:checked').value.trim();
	
	var txtDobVal = document.getElementById("txtDOB").value.trim();
	
	var txtTobVal = document.getElementById("txtTob").value.trim();
	
	var txtBirthPlaceVal = document.getElementById("txtBirthPlace").value.trim();
	
	var txtEmailVal = document.getElementById("txtEmail").value.trim();
	
	var txtPasswordVal = document.getElementById("txtPassword").value.trim();
	
	var txtRetypePasswordVal = document.getElementById("txtRetypePassword").value.trim();
	
	var secSecretQuestionElement = document.getElementById("secSecretQuestion");
	var secSecretQuestionElementVal = secSecretQuestionElement.options[secSecretQuestionElement.selectedIndex].value;
	
	var txtSecretAnswerVal = document.getElementById("secret_answer_id").value.trim();
	
	if(txtNameVal == "")
	{
		errorMessage = "*Name field cannot be blank.";
	}
	else
	{
		if(txtDobVal == "")
		{
			errorMessage = "*Date of Birth field cannot be blank. Please select your date of birth.";
		}
		else
		{
			if(txtBirthPlaceVal == "")
			{
				errorMessage = "*Place of Birth field cannot be blank.";
			}
			else
			{
				if(txtEmailVal == "")
				{
					errorMessage = "*Email field cannot be blank.";
				}
				else
				{
					if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(txtEmailVal) == false)
					{
						errorMessage = "*You have entered an invalid email address.";
					}	
					else
					{
						if(txtPasswordVal == "")
						{
							errorMessage = "*Password field cannot be blank.";
						}
						else
						{
							if(txtRetypePasswordVal == "")
							{
								errorMessage = "*Retype Password field cannot be blank.";
							}
							else
							{
								if(txtPasswordVal != txtRetypePasswordVal)
								{
									errorMessage = "*Password and Retype Password is not matching.";
								}
								else
								{
									if (secSecretQuestionElementVal == "")
									{
										errorMessage = "*Please select a secrect question.";
									}
									else
									{	
										if (txtSecretAnswerVal == "")
										{
											errorMessage = "*Secret answer cannpt be blank. Please enter the secret answer.";
										}
										else
										{
											errorMessage = "No";
										}
									}	
								}								
							}
						}
					}				
				}
			}
		}	
	}	
	
	if (errorMessage != "")
	{
		//Final work.
		if(errorMessage == "No")
		{
			jQuery('#errorMsgDiv').removeClass('current');
			/*alert(txtDobVal); */
			
			var dateTimeFinalVal = calculateDateTimeVal(txtDobVal, txtTobVal); 
			
		/*	var values = convertDateTimeValue(dateTimeFinalVal);
			alert(values[0]);
			alert(values[1]);  */
			
			var buildJsonToPostData = buildRegistrationJson(txtNameVal, genderVal, dateTimeFinalVal, txtBirthPlaceVal, txtEmailVal, txtPasswordVal, secSecretQuestionElementVal, txtSecretAnswerVal);
			
			//make AJAX call.
			$.ajax({
				type: "POST",
				url: "./common_account.php",
				data: {"category" : buildJsonToPostData},
				beforeSend : function() {
					/* Do some start work here */
				},
				success: function (data) {
					alert(data);
				},
				error: function (textStatus, errorThrown) {
					alert (textStatus + " " +errorThrown);
				},
				complete: function() {
					/* Do Some complete work here. */
					location.reload(false);
					return false;
				}
			}); 
			//done after here
			/*return Success;*/
		}
		else 
		{
			document.getElementById("errorMsgTxt").innerHTML = errorMessage;
			jQuery('#errorMsgDiv').addClass('current');
		}
	}
}

function buildRegistrationJson(nameValue, genderValue, dateTimeFinalValue, birthPlaceValue, emailValue, passwordValue, secSecretQuestionElementValue, secretAnswerValue)
{
	var JSONObj = {"name":nameValue, "gender":genderValue, "dob":dateTimeFinalValue, "birthplace":birthPlaceValue, "email": emailValue, "password":passwordValue, "secretQuestion":secSecretQuestionElementValue, "secretAnswer":secretAnswerValue};

	jsonValue = JSON.stringify(JSONObj);

	return jsonValue;
}

/*Convert date and time to datetime. */
function calculateDateTimeVal(dateVal, timeVal) 
{	
	var hours = Number(timeVal.match(/^(\d+)\s/)[1].trim());
	var minutes = Number(timeVal.match(/:\s(\d+)/)[1].trim());
	var AMPM = timeVal.match(/\s(.[A-Z])$/)[1];
	if(AMPM == "PM" && hours<12) hours = hours+12;
	if(AMPM == "AM" && hours==12) hours = hours-12;
	var sHours = hours.toString();
	var sMinutes = minutes.toString();
	if(hours<10) sHours = "0" + sHours;
	if(minutes<10) sMinutes = "0" + sMinutes;
	var dateTimeCalculatedVal = dateVal + " " +sHours + ":" + sMinutes +":" +"00";
	
	return dateTimeCalculatedVal;
}

/* This will conver datetime to date and time. */
function convertDateTimeValue(valDateTime)
{			
	// Split timestamp into [ Y, M, D, h, m, s ]
	var t = valDateTime.split(/[- :]/);

	// Apply each element to the Date function
	var d = new Date(Date.UTC(t[0], t[1]-1, t[2], t[3], t[4], t[5]));

	d.setHours(d.getHours() - 5); 
	d.setMinutes(d.getMinutes() - 30);
	
	var year, month, day;
    year = String(d.getFullYear());
    month = String(d.getMonth() + 1);
    if (month.length == 1) {
        month = "0" + month;
    }
    day = String(d.getDate());
    if (day.length == 1) {
        day = "0" + day;
    }
	
    var dateValue = day + "-" + month + "-" + year;
	
	var hours = d.getHours() ; // gives the value in 24 hours format
	var AmOrPm = hours >= 12 ? 'PM' : 'AM';
	hours = (hours % 12) || 12;
	var minutes = d.getMinutes();
	var finalTime = hours + ":" + minutes + " " + AmOrPm; 
	
	return [dateValue, finalTime];
}	

/* This is for remember password. */
function forgetPassword()
{
	var txtEmailVal = document.getElementById("txtEmailFP").value.trim();
	var hdtForgetPasswordVal = document.getElementById("hdtForgottenPasswordFld").value.trim();
	
	if (txtEmailVal == "")
	{
		alert("Email ID cannot be blank.");
	}
	else if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(txtEmailVal) == false)
	{
		errorMessage = "*You have entered an invalid email address.";
		alert(errorMessage);
	}	
	else
	{
		if (hdtForgetPasswordVal == 'first')
		{
			var buildJsonToPostData = buildEmailIdJson(txtEmailVal);
			
			//make AJAX call.
			$.ajax({
				type: "POST",
				url: "./common_account.php",
				data: {"forgetpassword" : buildJsonToPostData},
				beforeSend : function() {
					/* Do some start work here */
				},
				success: function (data) {
				 var obj = JSON.parse(data);
					if (obj.status == 'ok')
					{
						jQuery('#answerTheFollowingQues1').addClass('currentStat');
						jQuery('#answerTheFollowingQues2').addClass('currentStat');
						jQuery('#answerTheFollowingQues3').addClass('currentStat');
						
						document.getElementById("lblSecretQuestionAndSuccessReply").innerHTML = obj.secretQuestion;
						document.getElementById("hdtForgottenPasswordFld").value = "second";
						document.getElementById("txtEmailFP").value = txtEmailVal;
					}
				},
				error: function (textStatus, errorThrown) {
					alert (textStatus + " " +errorThrown);
				},
				complete: function() {
					/* Do Some complete work here. */
					return false;
				}
			}); 
			//done after here
			/*return Success;*/
		}
		else if (hdtForgetPasswordVal == 'second')
		{
			document.getElementById("txtEmailFP").value = txtEmailVal;
			var answerValue = document.getElementById("txtAnswerFP").value.trim();
			
			if (answerValue == "")
			{	
				alert("Answer field cannot be empty!");
			}
			else
			{
				var buildJsonToPostData = buildForgetPasswordJson(txtEmailVal, answerValue);
				
				//make AJAX call.
				$.ajax({
					type: "POST",
					url: "./common_account.php",
					data: {"retrievePassword" : buildJsonToPostData},
					beforeSend : function() {
						/* Do some start work here */
					},
					success: function (data) {
						var obj = JSON.parse(data);
						if (obj.status == 'ok')
						{
							jQuery('#answerTheFollowingQues0').addClass('navContent');
							jQuery('#answerTheFollowingQues1').removeClass('currentStat');
							jQuery('#answerTheFollowingQues2').removeClass('currentStat');
							jQuery('#answerTheFollowingQues3').removeClass('currentStat');
							jQuery('#answerTheFollowingQues4').addClass('navContent');
							
							document.getElementById("pwdFieldValue").innerHTML = obj.passwordVal;
						}
						else if (obj.status == 'invalid')
						{
							alert("Invalid Input");
						}
					},
					error: function (textStatus, errorThrown) {
						alert (textStatus + " " +errorThrown);
					},
					complete: function() {
						/* Do Some complete work here. */
						return false;
					}
				}); 
				//done after here
				/*return Success;*/
			}
		}
	}	
}

function buildEmailIdJson(emailIdValue)
{
	var JSONObj = {"email":emailIdValue};

	jsonValue = JSON.stringify(JSONObj);

	return jsonValue;
}

function buildForgetPasswordJson(emailIdValue, answerVal)
{
	var JSONObj = {"email":emailIdValue,"answer":answerVal};

	jsonValue = JSON.stringify(JSONObj);

	return jsonValue;
}

function buildEmailIdJson(emailIdValue)
{
	var JSONObj = {"email":emailIdValue};

	jsonValue = JSON.stringify(JSONObj);

	return jsonValue;
}