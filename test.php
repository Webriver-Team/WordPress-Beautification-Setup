<?php
/**
 * Sample file to test beautification functionality of the PHPCS alongside PHPCBF
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package BaseTheme Package
 * @since 1.0.0
 */

echo "The Best PHP Examples<br>";

// This is a single-line comment

# You can also make single-line comments like this

/*
This comment block spans
over multiple
lines
*/

/**
 * Basic Syntax
 */

ECHO "Hello!<br>";
echo "Welcome to Developer News<br>";
EcHo "Enjoy all of the ad-free articles<br>"

/**
 * Variables
 */

$name = "Quincy";
echo "Hi! My name is " . $name . "<br>";
echo "Hi! My name is " . $NAME . "<br>";
echo "Hi! My name is " . $NaMe . "<br>";


// Assign the value "Hello!" to the variable "greeting"
$greeting = "Hello!";
// Assign the value 8 to the variable "month"
$month = 8;
// Assign the value 2019 to the variable "year"
$year = 2019;

/**
 * Text inside quotes (single or double):
 */

$x = "Hello!";
$y = 'Hello!';

/**
 * Booleans
 */

$x = true;
$y = false;


/**
 * Arrays
 */

$colors = array("Magenta", "Yellow", "Cyan");

/**
 * Null
 */

 // Assign the value "Hello!" to greeting
$greeting = "Hello!";

// Empty the value greeting by setting it to null
$greeting = null;


/**
 * Classes and Objects
 */

class Car {
    function Car() {
        $this->model = "Tesla";
    }
}

// create an object
$Lightning = new Car();

// show object properties
echo $Lightning->model;

/**
 * PHP Resource
 */

 // prints: mysql link
$c = mysql_connect();
echo get_resource_type($c) . "\n";

// prints: stream
$fp = fopen("foo", "w");
echo get_resource_type($fp) . "\n";

// prints: domxml document
$doc = new_xmldoc("1.0");
echo get_resource_type($doc->doc) . "\n";

/**
 * Strings
 */

 // Single Quotes.
 $name = 'Joe';
 $last_name = 'O\'Brian';
 $quote = "Mary said, \"I want some toast,\" and then ran away.";
$greeting = "Hello $name"; // now contains the string "Hello Joe"

/**
 * String Functions
 */

echo strlen("Developer News"); // outputs 14
echo strrev("Developer News"); // outputs sweN repoleveD
echo strpos("Developer News", "News"); // outputs 10
echo str_replace("freeCodeCamp", "Developer", "freeCodeCamp News"); // outputs Developer News


/**
 * Constants
 */

define("freeCodeCamp", "Learn to code and help nonprofits", false);
echo freeCodeCamp;

/**
 * Operators
 */


echo 1 <=> 1; // 0
echo 1 <=> 2; // -1
echo 2 <=> 1; // 1


/**
 * If / Else / Elseif Statements
 */

 $condition1 = null;
 $condition2 = 1;
if ($condition1 && $condition2) {
    echo 'Both conditions are true!';
  } elseif (condition 1 || condition2) {
    echo 'One condition is true!';
  } else ($condition1 xor $condition2) {
    echo 'One condition is true, and one condition is false!';
  }

$user = "Glide Admin"
  if($user == !NULL) {
	$message = 'Hello '. $user;
  } else {
	$message = 'Hello guest';
  }

  /**
   * Ternary operator
   */

  $message = 'Hello '.($user == !NULL ? $user : 'Guest');

  /**
   * Switch
   */

   $i = null;

   // Switch Statement Example
	switch ($i) {
    	case "free":
    	    echo "i is free";
    	    break;
    	case "code":
    	    echo "i is code";
    	    break;
    	case "camp":
    	    echo "i is camp";
    	    break;
    	default:
    	    echo "i is freecodecamp";
            break;
	}

	/**
	 * Break
	 */

	$j = 0;

    switch ($i) {
        case '2':
            $j++;
        case '1':
            $j++;
            break;
        default:
            break;
    }

	switch ($i) {
        case '1':
            return 1;
        case '2':
            return 2;
        default:
            break;
     }


	 switch ($i) {
        case '1':
            return 1;
            break;
        case '2':
            return 2;
            break;
        default:
            break;
     }


	 //initialize with a random integer within range
$diceNumber = mt_rand(1, 6);

//initialize
$numText = "";

//calling switch statement
  switch($diceNumber)
					  {
  case 1:
    $numText = "One";
    break;
  case 2:
    $numText = "Two";
    break;
  case 3:
  case 4:
    // case 3 and 4 will go to this line
    $numText = "Three or Four";
    break;
  case 5:
    $numText = "Five";
    echo $numText;
    // break; //without specify break or return it will continue execute to next case.
  case 6:
    $numText = "Six";
    echo $numText;
    break;
  default:
    $numText = "unknown";
  }

  //display result
  echo


  /**
   * Loops
   */

  for($index = 0; $index < 5; $index ++)
  {
	  echo "Current loop counter ".$index.".\n";
  }


  $index = 10;
while ($index >= 0)
{
    echo "The index is ".$index.".\n";
    $index--;
}

$index = 3;
do
{
    // execute this at least 1 time
    echo "Index: ".$index.".\n";
    $index --;
}
while ($index > 0);


/**
 * Functions
 */
// Simple Function + Call

function say_hello() {
	return "Hello!";
  }

  echo say_hello();

//   Simple Function + Parameter + Call
function say_hello($friend) {
  return "Hello " . $friend . "!";
}

echo say_hello('Tommy');

// strtoupper - Makes all Chars BIGGER AND BIGGER!
function makeItBIG($a_lot_of_names) {
  foreach($a_lot_of_names as $the_simpsons) {
    $BIG[] = strtoupper($the_simpsons);
  }
  return $BIG;
}

$a_lot_of_names = ['Homer', 'Marge', 'Bart', 'Maggy', 'Lisa'];
var_dump(makeItBIG($a_lot_of_names));


/**
 * Arrays
 */

// Indexed Array
$shopping_list = array("eggs", "milk", "cheese");
echo $shopping_list[0];
echo $shopping_list[1];
echo $shopping_list[2];


// Associative Array
$student_scores = array("Joe" => 83, "Frank" => "93", "Benji" => "90");

echo $student_scores['Joe'];
echo $student_scores['Frank'];
echo $student_scores['Benji'];


// Multidimensional Array

$students =
  array(
    array("first_name" => "Joe", "score" => 83, "last_name" => "Smith"),
    array("first_name" => "Frank", "score" => 92, "last_name" => "Barbson"),
    array("first_name" => "Benji", "score" => 90, "last_name" => "Warner")
  );

  echo $students[0]['first_name'];

// Get The Length of an Array - The count() Function
  $cars = array("Volvo", "BMW", "Toyota");
echo count($cars);


/**
 * Sorting Arrays
 */

$freecodecamp = array("free", "code", "camp");
sort($freecodecamp);
print_r($freecodecamp);

rsort($freecodecamp);
print_r($freecodecamp);

$freecodecamp = array("zero"=>"free", "one"=>"code", "two"=>"camp");
asort($freecodecamp);
print_r($freecodecamp);

ksort($freecodecamp);
print_r($freecodecamp);

arsort($freecodecamp);
print_r($freecodecamp);

krsort($freecodecamp);
print_r($freecodecamp);



/**
 * Forms
 */

/*
<html>
<body>
  <form method="get" action="target_proccessor.php">
      <input type="search" name="search" /><br />
      <input type="submit" name="submit" value="Search" /><br />
  </form>
<body>
</html>
*/

/**
 * Checking form to make sure its set
 */

$firstName = $_GET['firstName']

if(isset($firstName)){
  echo "firstName field is set". "<br>";
}
else{
  echo "The field is not set."."<br>";
}
