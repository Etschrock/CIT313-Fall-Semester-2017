<?php include('views/elements/header.php');?>
<?php
if( is_array($post) ) {
    extract($post);
}?>

<div class="container">
	<div class="page-header">

<h1><?php echo $title;?></h1>
  </div>

<?php
echo "<p> Date Posted: " . $date . "</p>";
echo "<p>" . $content . "</p>";
echo "<p> Written By: " . $uID . "</p>";
echo "<p> Category: " . $categoryID . "</p>";
?>

</div>

<?php include('views/elements/footer.php');?>