
<?php include('elements/header.php');?>
<?php

//if $post or $posts do not exist, set them to ""
if (!isset($post)) {
    $post = "";
}
if (!isset($posts)) {
    $posts = "";
}

if( is_array($post) ) {
	extract($post);?>

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
<?php }?>

<?php if( is_array($posts) ) {?>

<div class="container">
<div class="page-header">

<h1><?php echo $title;?></h1>
  </div>

	<?php foreach($posts as $p){?>
    <h3><a href="<?php echo BASE_URL?>blog/view/<?php echo $p['pID'];?>" title="<?php echo $p['title'];?>"><?php echo $p['title'];?></a></h3>
        <p><?php echo "Date Posted: " . $p['date'];?></p>
	<p><?php echo $p['content'];?></p>
        <p><?php echo "Written By: " . $p['uID'];?></p>
        <p><?php echo "Category: " . $p['categoryID'];?></p>
<?php }?>
</div>

<?php }?>


<?php include('elements/footer.php');?>