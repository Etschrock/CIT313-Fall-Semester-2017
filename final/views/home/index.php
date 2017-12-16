<?php include('views/elements/header.php');?>
<div class="container">
	<div class="page-header">
    <h1> All Things Gaming </h1>
  </div>
</div>

<div class="container">
    <img src="views/img/videogame.jpg" style="width: 100%; height: 200px; margin-bottom: 10px;"/>

<table>
    <tr>
    <td>
            <p>
                Hey there gamer fans! This is a blog for all things gaming! Here you will read some blogs by a few gaming fanatics. This will be a colab website, so please register and join
                in on the discussion!
                <br/>
                Right now this website is a work in progress! While the blog is working(for the most part!), the other type of filler content is going to be worked on daily. If you were curious
                about why the website changes so often, that is the reason! hopefully, this will not be bothersome, and hopefully you can continue enjoying yourselves on this blog!
            </p>
    </td>
    <td>
            <h4>Get your local weather</h4>
            <form method="post" action="<?php echo BASE_URL ?>weather/getresults">
                <label for="zip">Enter your Zipcode</label>
                <input name="zip" id="zip" type="text" required/>
                <br/>
                <button type="submit" class="btn btn-primary">View Weather</button>
            </form>
    </td>
    </tr>
</table>
</div>


<?php include('views/elements/footer.php');?>
