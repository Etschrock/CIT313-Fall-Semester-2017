
<?php include('elements/header.php');?>
<?php

//if $post or $posts do not exist, set them to ""
if (!isset($user)) {
    $user = "";
}
if (!isset($users)) {
    $users = "";
}

if( is_array($user) ) {
    extract($user);?>

    <div class="container">
        <div class="page-header">

            <h1>Member: <?php echo $uID;?></h1>
        </div>

        <?php
        echo "Name: " . $first_name . " " . $last_name . "<br/>";
        echo "Email: " . $email;
        ?>

    </div>
<?php }?>

<?php if( is_array($users) ) {?>

    <div class="container">
        <div class="page-header">

            <h1><?php echo $title;?></h1>
        </div>

        <?php foreach($users as $u){?>
            <h3><a href="<?php echo BASE_URL?>/members/view/<?php echo $u['uID'] ?>"><?php echo $u['email'] ?></a></h3>
            <p>Name: <?php echo $u['first_name'] . " " . $u['last_name'] ?></p>
            <p>Email: <?php echo  $u['email'] ?></p>

        <?php }?>
    </div>

<?php }?>


<?php include('elements/footer.php');?>