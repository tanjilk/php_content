<div class="titulo">Person & User</div>

<?php


class Person {
	

	public static $firstName;
	public static $lastName;
	public $age;



	function __construct($firstName, $lastName, $age){
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->age = $age;
	}

	function __destruct(){
		return 'Destructed';
	}

	public function me(){
		echo "Name: {$this->firstName}<br>";
		echo "Last Name: {$this->lastName}<br>";
		echo "Age: {$this->age}<br>";
	}

}

class User extends Person {

	public static $email;
	private $password;
	
	function __construct($firstName, $lastName, $age, $password){
		parent::__construct($firstName, $lastName, $age);
		$this->email = strtolower("{$firstName}" . "{$lastName}@gmail.com");
		$this->password = $password;
	}

	function __destruct(){
		return 'Destructed';
	}

	public function data(){
		parent::me();
		echo "Email: {$this->email}<br>";
		echo "Password: {$this->password}<br>";
	}

	public function changePassword($newPassword){
		$this->password = $newPassword;
	}
}

$person = new Person("Joaquim", "Reis", 20);
$person->me();

echo '------------------------------------<br>';

$user = new User('Manel', 'Dias', 23, '203r3');
$user->data();

echo '------------------------------------<br>';

$user->changePassword("passwordmanel");
$user->data();