<html>
	<head>
		<title>The Pi Project</title>
		<link href='<?php echo base_url(); ?>assets/css/style.css' rel='stylesheet'>
        <link href="https://fonts.googleapis.com/css?family=Raleway:200" rel="stylesheet">
        <link rel="icon" href="<?= base_url().'assets/images/logo.png' ?>">
	</head>
	<body>
<a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/images/logo4.png" id="logo" height="13%"></a>
<br>
<div class="navbar">
<ul id="navbar-ul">
  <li id="navbar-li"><a id="navbar-li-a" href="<?php echo base_url(); ?>">Home</a></li>
  <li id="navbar-li"><a id="navbar-li-a" href="<?php echo base_url(); ?>about">About</a></li>
  <li id="navbar-li"><a id="navbar-li-a" href="<?php echo base_url(); ?>products">Products</a></li>
  <li id="navbar-li"><a id="navbar-li-a" href="<?php echo base_url(); ?>support">Support</a></li>

  <li id="navbar-li"><input type="text" name="search" placeholder="Search.." id="searchbar"  onkeydown = "if (event.keyCode == 13)
                        document.getElementById('find').click()"></li>
  <li id="navbar-li"><input type="submit" value="Find" id="find" onclick=" window.location = '<?=base_url()?>products?search=' + document.getElementById('searchbar').value"></li>

  <li id="navbar-li" style="float:right"><a id="navbar-li-a" href="<?php echo base_url(); ?>cart"><img class="cart" src="<?php echo base_url(); ?>assets/images/cart.png" height="32px"></a></li>
    <?php
  if($this->session->userdata('is_LoggedIn')){
  	?>
  		<li style="float:right" id="navbar-li"><a id="navbar-li-a" href="<?php echo base_url().'account/signout'; ?>">Sign Out</a></li>
  		<li style="float:right" id="navbar-li"><a id="navbar-li-a" href="<?php echo base_url().'account/'; ?>">My Account</a></li>
  		

  	<?php
  }else{
  	?>

  		<li style="float:right" id="navbar-li"><a id="navbar-li-a" href="<?php echo base_url().'account/signin'; ?>">Sign In</a></li>
  	<?php
  }
  	
  ?>
    
<!--
	<nav class = "navbar navbar-inverse">
		<div class = "container"> <!--
			<div class = "navbar-header">
				<a class = "navbar-brand" href = "#">TPP</a>
			</div> --> <!--
			<img src="<?php echo base_url(); ?>assets/images/logo.png" name="logo" width="210" height="200">
			
			<div id ="navbar">
				<ul class="nav navbar-nav" id="navbar-ul">
					<li id="navbar-li"><a id="navbar-a" href="<?php echo base_url(); ?>">Home</a></li>
					<li id="navbar-li"><a id="navbar-a" href="<?php echo base_url(); ?>about">About</a><li>
					<li id="navbar-li"><a id="navbar-a" href="<?php echo base_url(); ?>products">Products</a><li>
					<li id="navbar-li"><a id="navbar-a" href="<?php echo base_url(); ?>">Support</a><li>

					
				</ul>
				<a href="<?php echo base_url()."cart/"?>">Shopping Cart (im in header)</a>
			</div>-->

</ul>
</div>
	