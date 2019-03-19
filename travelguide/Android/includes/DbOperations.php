<?php 
require_once "../../dbconect/User.php";
	class DbOperations{


		public function createUser($username, $pass, $email){
			if(User::find($username,"%",$email,"%")){
				return 0; 
			}else{
				$password = $pass;
                generate:
                $d = date("y");
                $i = mt_rand(111111, 999999);

                $id = "us".$d.$i;
                if(User::findThis($id))
                    goto generate;

                $user = new User();
                $user->userid = $id;
                $user->fname = $username;
                $user->email = $email;
                $user->password = $password;
				if($user->save()){
					return 1; 
				}else{
					return 2; 
				}
			}
		}

		/*public function userLogin($username, $pass){
			$password = $pass;
            if(User::find("%","%",$username,$password)){
                $stmt = User::find("%","%",$username,$password);
                return $stmt[0];
            }else
                return 0;
		}*/

    }