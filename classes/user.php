<?php
include('password.php');
class User extends Password{

    private $_db;

    function __construct($db){
    	parent::__construct();

    	$this->_db = $db;
    }

	private function get_user_hash($name){

		try {
			$stmt = $this->_db->prepare('SELECT password, email, id, name FROM sellers WHERE email = :name AND active="Yes" ');
			$stmt->execute(array('name' => $name));

			return $stmt->fetch();

		} catch(PDOException $e) {
		    echo '<p class="bg-danger">'.$e->getMessage().'</p>';
		}
	}

	public function login($name,$password){

		$row = $this->get_user_hash($name);

		if($this->password_verify($password,$row['password']) == 1){

		    $_SESSION['loggedin'] = true;
		    $_SESSION['name'] = $row['name'];
		    $_SESSION['email'] = $row['email'];
		    $_SESSION['id'] = $row['id'];
		    return true;
		}
	}

	public function logout(){
		session_destroy();
	}

	public function is_logged_in(){
		if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
			return true;
		}
	}

}


?>
