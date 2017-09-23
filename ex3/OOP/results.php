<?php

//include the classes
function classLoad($class) {
    include_once('classes/' . $class . '.class.php');
}
spl_autoload_register('classLoad');

//grabbing the variables from the form
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];

//instantiating a regular user object
$registeredUser = new regular_user('newuser', 'regular');

//setting the objects attributes from the input taken
$registeredUser->first_name = $fname;
$registeredUser->last_name = $lname;
$registeredUser->email_address = $email;

//outputting the objects attributes if user is regular
if($registeredUser instanceof regular_user) {
    echo "The registered user's first name is: " . $fname . "<br/>";
    echo "The registered user's last name is: " . $lname . "<br/>";
    echo "The registered user's email address is: " . $email . "<br/>";
    echo "**************************************************************" . "<br/>";
    echo "Processing Complete";
} else {
    echo "Failure to create User";
}