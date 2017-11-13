<?php include('views/elements/header.php');?>
<div class="container">
	<div class="page-header">
    <h1> Hello From the View </h1>
  </div>
</div>
<?php foreach($items->channel->item as $item) {?>
    <div class="container">
    <h2><a href="<?php echo $item->link?>"><?php echo $item->title;?></a></h2>
    <div><?php echo $item->description;?> </div>
        <br/>
    <div><?php $date = date_create($item->pubDate); echo date_format($date, 'F d, Y');?></div>
    </div>
    <br/>
    <hr>
<?php }?>
<?php include('views/elements/footer.php');?>
