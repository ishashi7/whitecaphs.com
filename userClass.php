<?php
class userClass
{
	 /* User Login */
     public function userLogin($usernameEmail,$password)
     {

         $db = getDB();
          $stmt = $db->prepare("SELECT uid FROM users WHERE  (username=:usernameEmail or email=:usernameEmail) AND  password=:password");
          $stmt->bindParam("usernameEmail", $usernameEmail,PDO::PARAM_STR) ;
		  $stmt->bindParam("password", $password,PDO::PARAM_STR) ;
          $stmt->execute();
          $count=$stmt->rowCount();
          $data=$stmt->fetch(PDO::FETCH_OBJ);
          $db = null;
          if($count)
          {
                $_SESSION['uid']=$data->uid;
                return true;
          }
          else
          {
               return false;
          }
     }
	 
	 
}
?>
