<?php

//include the classes
include_once ('classes/user.class.php');
include_once ('classes/user_type_1.class.php');
include_once ('classes/user_type_2.class.php');

//instantiate the objects
$regularUser = new user_type_1("Regular User", "kschrock");
$adminUser = new user_type_2("Admin", "bsmith");

//setting attributes for object 1
$regularUser->first_name = "Katie";
$regularUser->last_name = "Schrock";
$regularUser->email_address = "thisisyetanotheremail@email.com";

//setting attributes for object 2
$adminUser->first_name = "Bob";
$adminUser->last_name = "Smith";
$adminUser->email_address = "thisisanemail@email.com";

//outputting attributes for object 1
echo "User Level: " . $regularUser->user_level . "<br/>";
echo "Registered User ID: " . $regularUser->user_id . "<br/>";
echo "Registered User Type: " . $regularUser->user_type . "<br/>";
echo "Registered First Name: " . $regularUser->first_name . "<br/>";
echo "Registered Last Name: " . $regularUser->last_name . "<br/>";
echo "Registered Email: " . $regularUser->email_address . "<br/>";

echo "*******************************************" . "<br>";

//outputting attributes for object 2
echo "User Level: " . $adminUser->user_level . "<br/>";
echo "Admin User ID: " . $adminUser->user_id . "<br/>";
echo "Admin User Type: " . $adminUser->user_type . "<br/>";
echo "Admin First Name: " . $adminUser->first_name . "<br/>";
echo "Admin Last Name: " . $adminUser->last_name . "<br/>";
echo "Admin Email: " . $adminUser->email_address;