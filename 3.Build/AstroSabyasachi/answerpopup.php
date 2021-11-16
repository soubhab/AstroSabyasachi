<!DOCTYPE html>
<html>
<head>
<title>Answer Question</title>
<script src="./js/jquery-3.5.1.min.js"></script>
<script src="./js/ui_assembly.js"></script>
<script src="./js/answerpopup.js"></script>
</head>

<body bgcolor="#726668">
<center>
  <?php
	$questionId = $_GET['questionId'];
	$moderatorUserId = $_GET['moderatorUserId'];
	
	require "DbConnection.php";
	
	try 
	{ 
		$dbConnectionObj = new DbConnection();
		$connection = $dbConnectionObj->get_connection();
		
		$sqlQuery = "select a.id as question_id, a.userId as user_id, a.question as question, a.isAnswered as isAnswered, b.name as name, b.dob as dob, b.gender as gender, b.pob as pob
					from tbl_questionnaire a
					LEFT JOIN tbl_users b 
					ON a.userId = b.id 
					where a.id=".$questionId;
					
		$stmt = $connection->query($sqlQuery);
		if ($row = $stmt->fetch()) {
	?>
	  <p style="color:white;"><strong>Name:</strong> <?php echo $row['name'] ?></p>
	  <p style="color:white;"><strong>Gender:</strong> <?php echo $row['gender'] ?></p>
	  <p style="color:white;"><strong>Datetime of Birth:</strong> <?php echo $row['dob'] ?></p>
	  <p style="color:white;"><strong>Place of Birth:</strong> <?php echo $row['pob'] ?></p>
	  <p style="color:white;"><strong>Question:</strong> <?php echo $row['question'] ?></p>
	  <input type="hidden" id="hddnPopupQuestionId" name="hddnPopupQuestionId" value="<?php echo $questionId ?>" />
	  <input type="hidden" id="hddnPopupModeratorUserId" name="hddnPopupModeratorUserId" value="<?php echo $moderatorUserId ?>" />
	  <label id="lblPopupErrorMessage" style="float:center;display:none;color:red;">* Please answer the question in the textarea.</label>
	  <textarea id="popupTextAreaAnswer" name="popupTextAreaAnswer" rows="6" cols="70" ></textarea>
	  <div>
		<label id="lblTexer" style="color:white;text-align:left">(Total characters left 40)</label>
		<input type="button" id="btnPopupClose" name="btnPopupClose" value="Close" onclick="self.close()" />
		<input type="button" id="btnSubmitPopupAnswer" name="btnSubmitPopupAnswer" onclick="submitAnswerFromPopup(<?php echo $questionId ?>,<?php echo $moderatorUserId ?>)" value="Submit" />
	  </div>
	<?php
		}
	}
	catch (Exception $error) {
		echo "Enexpected Error: " . $error->getMessage();
	}
  ?>
</center>
</body>

</html>