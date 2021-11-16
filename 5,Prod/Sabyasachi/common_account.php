<?php
	if(isset($_POST['category'])) 
	{
		$registrationJson = $_POST['category'];
		
		require "DbConnection.php";
		
		try { 
		    $dbConnectionObj = new DbConnection();
		    $connection = $dbConnectionObj->get_connection();
		
			$obj = json_decode($registrationJson);
			
			$sql = "select * from tbl_users where email='$obj->email';"; 
			
			$result = $connection->query($sql); 
			$result_rows = $result->fetchColumn(); 

			if ($result_rows > 0) 
			{
				echo "The emailId already exists. Please try again from beginning.";
			}
			else
			{
				$registration_Insert_Statement = $connection->prepare("INSERT INTO tbl_users (name, gender, dob, pob, email, password, secret_question, secret_answer, user_type) VALUES ('$obj->name', '$obj->gender', '$obj->dob', '$obj->birthplace', '$obj->email', '$obj->password', '$obj->secretQuestion', '$obj->secretAnswer', 'U')");
					
				if ($registration_Insert_Statement->execute()) {
				  echo "Registration Successful.";
				} else {
				  echo "Unable to create record.";
				}
			}
		} catch (Exception $error2) {
			echo "Data is not inserted : " . $error2->getMessage();
		}
	}
	else if (isset($_POST['forgetpassword'])) 
	{
		$registrationJson = $_POST['forgetpassword'];
		
		require "DbConnection.php";
		
		try { 
		    $dbConnectionObj = new DbConnection();
		    $connection = $dbConnectionObj->get_connection();
		
			$obj = json_decode($registrationJson);
			
			$sql = "select * from tbl_users where email='$obj->email';";
			
			$secretQuestionData = "";
			$result = $connection->query($sql); 
			$row = $result->fetch(PDO::FETCH_ASSOC);
			
			if(is_array($row))
			{
				$secretQuestionData = $row['secret_question'];
			}
			
			$result2 = $connection->query($sql);
			$result_rows = $result2->fetchColumn();
			
			if ($result_rows > 0) 
			{
				echo "{\"status\":\"ok\",\"secretQuestion\":\"".$secretQuestionData."\"}";
			}
			else
			{
				echo "{\"status\":\"invalid\"}";
			}
		} catch (Exception $error2) {
			echo "Data is not inserted : " . $error2->getMessage();
		}
	}
	else if (isset($_POST['retrievePassword'])) 
	{
		$registrationJson = $_POST['retrievePassword'];
		
		require "DbConnection.php";
		
		try { 
		    $dbConnectionObj = new DbConnection();
		    $connection = $dbConnectionObj->get_connection();
		
			$obj = json_decode($registrationJson);
			
			$sql = "select * from tbl_users where email='$obj->email' and secret_answer='$obj->answer';";
			
			$passwordData = "";
			$result = $connection->query($sql); 
			$row = $result->fetch(PDO::FETCH_ASSOC);
			
			if(is_array($row))
			{
				$passwordData = $row['password'];
			}
			
			$result2 = $connection->query($sql);
			$result_rows = $result2->fetchColumn();
			
			if ($result_rows > 0) 
			{
				echo "{\"status\":\"ok\",\"passwordVal\":\"The password : ".$passwordData."\"}";
			}
			else
			{
				echo "{\"status\":\"invalid\"}";
			}
		} catch (Exception $error2) {
			echo "Data Error : " . $error2->getMessage();
		}
	}
	else if (isset($_POST['login'])) 
	{
	//	echo "abcd";
		
		$loginJson = $_POST['login'];
		
	//	echo $loginJson;
		
		try { 
		
			$obj = json_decode($loginJson);
			$sql = "select * from tbl_users where email='$obj->email' and password='$obj->passwordText';";
			
			require "DbConnection.php";
			
		    $dbConnectionObj = new DbConnection();
		    $connection = $dbConnectionObj->get_connection();
			
		//	echo $connection;
			$userType = "";
			$userName = "";
			$userId="";
			$result = $connection->query($sql); 
			$row = $result->fetch(PDO::FETCH_ASSOC);
			
			if(is_array($row))
			{
				$userType = $row['user_type'];
				$userName = $row['name'];
				$userId = $row['id'];
			}
			
			$result2 = $connection->query($sql);
			$result_rows = $result2->fetchColumn();
			
			if ($result_rows > 0) 
			{
				echo "{\"status\":\"ok\",\"userType\":\"".$userType."\",\"userName\":\"".$userName."\",\"userId\":\"".$userId."\"}";
			}
			else
			{
				echo "{\"status\":\"invalid\"}";
			} 
		} catch (Exception $error2) {
			echo "{\"status\":\"error2\"}";
		} 
	}
	else if (isset($_POST['genericUserQuestion'])) 
	{
		$genericUserQuestionJson = $_POST['genericUserQuestion'];
		
		require "DbConnection.php";
		
		try { 
		    $dbConnectionObj = new DbConnection();
		    $connection = $dbConnectionObj->get_connection();
		
			$obj = json_decode($genericUserQuestionJson);
			$currentDateTime = date('Y-m-d H:i:s');
			
			$generic_Question_Insert_Statement = $connection->prepare("INSERT INTO tbl_questionnaire (userId, question, isAnswered, questionDateTime, lastUpdatedDateTime, LastUpdatedBy) VALUES ('$obj->genericUserId', '$obj->genericUserQuestion', 'NO', '$currentDateTime', '$currentDateTime', '$obj->genericUserId')");
				
			if ($generic_Question_Insert_Statement->execute()) {
			  echo "Question successful sent.";
			} else {
			  echo "Unable to create question.";
			}
			
		} catch (Exception $error2) {
			echo "Data is not inserted : " . $error2->getMessage();
		}
	} 
	else if (isset($_POST['moderatorFetchPart'])) 
	{
		$moderatorFetchPartJson = $_POST['moderatorFetchPart'];
		
		require "DbConnection.php";
		
		try { 
		    $dbConnectionObj = new DbConnection();
		    $connection = $dbConnectionObj->get_connection();
		
			$obj = json_decode($moderatorFetchPartJson);
			
			$sqlQuery = "select a.id as question_id, a.userId as user_id, a.question as question, a.isAnswered as isAnswered, b.name as name, b.dob as dob, b.gender as gender, b.pob as pob, a.questionDateTime as questionDateTime
						from tbl_questionnaire a
						LEFT JOIN tbl_users b 
						ON a.userId = b.id 
						where a.isAnswered = 'NO' 
						order by a.questionDateTime ASC
						LIMIT 5"; 			
									
			$stmt = $connection->query($sqlQuery);
			
			$result2 = $connection->prepare("select count(*) from tbl_questionnaire where isAnswered='NO'");
			$result2->execute();
			$rowCount2 = $result2->fetchColumn(0);
			
			$returnJsonPlayload = "{\"status\":\"ok\",\"totalRows\":\"".$rowCount2."\",\"moderatorId\":\"$obj->moderatorId\",\"data\":[";
			$totalRowData = "";	
			while ($row = $stmt->fetch()) {
				$rowData = "{\"question_id\":\"".$row['question_id']."\",\"user_id\":\"".$row['user_id']."\",\"question\":\"".$row['question']."\",\"isAnswered\":\"".$row['isAnswered']."\",\"name\":\"".$row['name']."\",\"dob\":\"".$row['dob']."\",\"gender\":\"".$row['gender']."\",\"pob\":\"".$row['pob']."\",\"questionDateTime\":\"".$row['questionDateTime']."\"}";
				$totalRowData = $totalRowData.$rowData.",";
			}
			
			$totalRowData = rtrim($totalRowData, ",");
			$returnJsonPlayload = $returnJsonPlayload.$totalRowData."]}";
			
			echo($returnJsonPlayload);
			
		} catch (Exception $error101) {
			echo "Unexpected Error: " . $error101->getMessage();
		}
	} 
	else if (isset($_POST['moderatorAnswerSection'])) 
	{
		$moderatorAnswerPayloadJson = $_POST['moderatorAnswerSection'];
		
		require "DbConnection.php";
		
		try { 
		    $dbConnectionObj = new DbConnection();
		    $connection = $dbConnectionObj->get_connection();
		
			$obj = json_decode($moderatorAnswerPayloadJson);
			$currentDateTime = date('Y-m-d H:i:s');
			
			$updateSqlQuery = "UPDATE tbl_questionnaire SET answer=?, moderatorId=?, isAnswered=?, answerDateTime=?, lastUpdatedDateTime=?, LastUpdatedBy=? WHERE id=?";
			$stmt= $connection->prepare($updateSqlQuery);
			$stmt->execute([$obj->moderatorAnswer, $obj->moderatorUserId, 'YES', $currentDateTime, $currentDateTime, $obj->moderatorUserId, $obj->questionId]);
			
			$rowCount = $stmt->rowCount();
			
			if($rowCount == 1)
			{
				echo "{\"status\":\"ok\",\"moderatorUserId\":\"$obj->moderatorUserId\"}";
			}
			else
			{
				echo "{\"status\":\"unsuccessful\"}";
			}
		} catch (Exception $error101) {
			echo "Unexpected Error: " . $error101->getMessage();
		}
	} 
	else if (isset($_POST['userFetchPart'])) 
	{
		$userFetchPartJson = $_POST['userFetchPart'];
		
		require "DbConnection.php";
		
		try { 
		    $dbConnectionObj = new DbConnection();
		    $connection = $dbConnectionObj->get_connection();
		
			$obj = json_decode($userFetchPartJson);
			
			$sqlQuery = "SELECT id, question, answer, isAnswered, questionDateTime, lastUpdatedDateTime FROM tbl_questionnaire WHERE userId=".$obj->userId." ORDER BY questionDateTime DESC LIMIT 5;"; 			
									
			$returnJsonPlayload = "{\"status\":\"ok\",\"data\":[";	
			$totalRowData = "";	
			$stmt = $connection->query($sqlQuery);
			
			while ($row = $stmt->fetch()) {
				$rowData = "{\"question_id\":\"".$row['id']."\",\"question\":\"".$row['question']."\",\"answer\":\"".$row['answer']."\",\"isAnswered\":\"".$row['isAnswered']."\",\"questionDateTime\":\"".$row['questionDateTime']."\",\"lastUpdatedDateTime\":\"".$row['lastUpdatedDateTime']."\"}";
				$totalRowData = $totalRowData.$rowData.",";
			}
			
			$totalRowData = rtrim($totalRowData, ",");
			$returnJsonPlayload = $returnJsonPlayload.$totalRowData."]}";
			
			echo($returnJsonPlayload);
			
		} catch (Exception $error101) {
			echo "Unexpected Error: " . $error101->getMessage();
		}
	} else {
		echo "Noooooooob";
	}
?>