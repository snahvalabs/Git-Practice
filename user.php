<?php
	// error_reporting(E_ERROR | E_PARSE);

	class User{
		public $name;
		public $address;


		function __construct($name=null, $address=null){
			$this->name=$name;
			$this->address=$address;

		}
		public function hello(){
			return "Hello, my name is ".$this->name;
		}
	}

	class businessUser extends User{
		public $phone;
		public function myPhone(){
			return "This is my phone ".$this->phone;
		}
	}

	class Contact{
		public $email;
		public $chat;
	}

	class Car {
	 
	  public $tank;
	 
	  // Add gallons of fuel to the tank when we fill it.
	  public function fill($float)
	  {
	    $this-> tank += $float;
	    return $this;
	  }
	  
	  // Substract gallons of fuel from the tank as we ride the car.
	  public function ride($float)
	  {
	    $miles = $float;
	    $gallons = $miles/50;
	    $this-> tank -= $gallons;
	    return $this;
	  }
	}

	$car1 = new Car();
	// $car1->tank = 10;
	echo "Tank Initial = ".$car1->tank."<br>";
	$car1->fill(15);
	echo "Tank after fill 15 = ".$car1->tank."<br>";
	$car1->ride(5);
	echo "Tank after ride 5 mile = ".$car1->tank."<br>";

	$car2=new Car();
	$tank = $car2 -> fill(15) -> ride(5) -> tank;
	echo "Tank after fill 15 and ride 5 mile = ".$tank."<br>";


	echo "<hr>";

	$user1 = new User();
	$user1->name="Me";
	$user1->address="Jakarta";

	echo $user1->name;
	echo "<br>";
	echo $user1->address;
	echo "<br>";
	echo $user1->hello();

	echo "<hr>";
	$user2 = new User("You","Bandung");
	echo $user2->name;
	echo "<br>";
	echo $user2->address;
	echo "<br>";
	echo $user2->hello();

	echo "<hr>";


	$business1 = new businessUser();
	$business1->name="Bisnisman";
	$business1->address="Everywhere";
	$business1->phone="12345";

	echo $business1->hello();
	echo "<br>";
	echo $business1->myPhone();

?>