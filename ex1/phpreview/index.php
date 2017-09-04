<?php
include_once('includes/header.php');
?>

<h3>PHP Review</h3>

<?php
//creating an array with all of my preferences
$myPreferences = array("name" => "Eric Schrock", "favColor" => "Blue", "favMovie" => "Avengers",
    "favBook" => "Arthas", "favWebsite" => "Reddit");

//grabbing my name out of the array and outputting it in a h1 tag
print "<h1>" . $myPreferences["name"] . "</h1>";

//create a function to output items in the array
function outputPreferences($myPreferences) {

    echo "<ul>";
//create a loop to output values in the array
    foreach ($myPreferences as $key => $item) {

        //if the key is name, don't output anything
        if ($key == "name") {
            
        } else {
            //loops through the array and will print out everything but name
            print "<li>" . $item . "</li>";
        }
    }
}

//calling the function
outputPreferences($myPreferences);

echo "</ul>";
?>

<?php
include_once('includes/footer.php');
?>
