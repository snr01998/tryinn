<?php 

	// Allow the config
	define('__CONFIG__', true);

	// Require the config
	require_once "../inc/config.php"; 

	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		// Always return JSON format
		header('Content-Type: application/json');

		$return = [];
        $email = Filter::String($_POST['email']);
        $findUser = $con->prepare("SELECT user_id FROM uers WHERE email = LOWER(:email)LIMIT 1");
        $findUser ->bindParam(':email',$email,PDO::PARAM_STR);
        $findUser->execute();

        if($findUser->rowCount() == 1){
            $return['error'] = "you have alredy have account";
            $return['is_logged_in']=false;
        
        }else{
            $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
            $addUser =$con->prepare("INSERT INTO uers(email,password) VALUES(LOWER(:email),:password)");
            $addUser->bindParam(':email',$email, PDO::PARAM_STR);
            $addUser->bindParam(':password',$password,PDO::PARAM_STR);
            $addUser->execute();
            $user_id = $con->lastInsertId();
            $_SESSION['user_id']=(int)$user_id;
            $return['redirect']='/dashboard.php?message=welcome';
            $return['is_logged_in']=true;
        }
		// Make sure the user does not exist. 

		// Make sure the user CAN be added AND is added 

		// Return the proper information back to JavaScrit to redirect us.
         
		$return['redirect'] = '/dashboard.php?message=welcome';
		$return['is_logged_in'] = true;

		echo json_encode($return, JSON_PRETTY_PRINT); exit;
	} else {
		// Die. Kill the script. Redirect the user. Do something regardless.
		exit('invalid uRl');
	}
?>
