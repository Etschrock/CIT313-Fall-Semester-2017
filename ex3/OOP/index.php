<?php

//include the classes
function classLoad($class) {
    include_once('classes/' . $class . '.class.php');
}
spl_autoload_register('classLoad');

//call the static math function
echo "Let's do some math before filling out this form! " . admin_user::someMath(15,20);
?>

<form method="post" action="results.php">
    
    <br>
    <label for="fname">First Name:</label>
    <input id="fname" name="fname"/>
    
    <br>
    <label for="lname">Last Name:</label>
    <input id="lname" name="lname"/>
    
    <br>
    <label for="email">Email Address:</label>
    <input id="email" name="email"/>
    
    <br>
    <button>Register</button>
    
</form>