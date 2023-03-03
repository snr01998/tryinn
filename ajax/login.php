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
            $User = $findUser->fetch(PDO::FETCH_ASSOC);
            $user_id = (int)$User['user_id'];
            $hash = (string)$User['password'];
            if(password_verify($password,$hash)){
                $return['redirect']='/dashboard.php';
                $_SESSION['user_id']=$user_id;
            }else{
                $return['error']="invalid user mail";
            }
            $return['error']="you alredy have account";
        }else{
             
            $return['error']="you dont have accoutn";
        }
		// Make sure the user does not exist. 

		// Make sure the user CAN be added AND is added 

		// Return the proper information back to JavaScrit to redirect us.
      
		$return['is_logged_in'] = true;

		echo json_encode($return, JSON_PRETTY_PRINT); exit;
	} else {
		// Die. Kill the script. Redirect the user. Do something regardless.
		exit('invalid uRl');
	}
?>
