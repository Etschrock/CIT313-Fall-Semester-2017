<?php include('elements/header.php');

//see if numbers is empty
if (!isset($numbers)) {
    $numbers = "";
}

?>
<div class="container">
	<div class="page-header">
   <h1> the Login View </h1>
   <?php echo $numbers ?>
  </div>

    <form action="<?php echo BASE_URL?>/login/"<?php echo $task?>" method="post">

        <label for="username">Username:</label>
        <input name="username" id="username" type="text" required/>

        <label for="password">Password:</label>
        <input name="password" id="password" type="password" required/>

    </form>
</div>
<?php include('elements/footer.php');?>

