
<?php echo $this->HTML->css('frontfile.css');?>
<?php echo $this->HTML->css('footer.css');?>
<!DOCTYPE html>
<html>
<head>
	<title>Adsells</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
.tp1{
	color: white;
	font-size: 80px;
	margin-top: 20%;
}

</style>
<body>
    <header>
    <div class="row">

      <h3 style="float: left; padding-left: 35px; color: white; font-size: 40px;font-weight: bold;"><span >Ad</span><span>Sells</span></h3>	
        
<ul style="padding-top:15px;margin-left:18%;">
<li style="border:1px solid white;"><?= $this->Html->link(__('Logout')
          ,['controller' => 'users', 'action' => 'login']) ?></li>

  <li style="border:1px solid white;"><?= $this->Html->link(__('About us'),['controller' => 'Jobs', 'action' => 'add']) ?></li> 
  <li style="border:1px solid white;"><?= $this->Html->link(__('Message'),['controller' => 'Jobs', 'action' => 'add']) ?></li>
  <li style="border:1px solid white;"><?= $this->Html->link(__('Bought Products'),['controller' => 'Jobs', 'action' => 'add']) ?></li>
  <li style="border:1px solid white;"><?= $this->Html->link(__('Products'),['controller' => 'Jobs', 'action' => 'index']) ?></li>
  <li style="border:1px solid white;"><a href="#home">Home</a></li>
</ul>
        
    </div>

    <div class="text-center">
        <h1 class="tp1">Are You Ready?</h1>

        <div class="button" style="background-color:transparent;">
        	<a href="advertise.php" class="btn-one button_n">Advertise</a>
        	<a href="purchase.php" class="btn-two button_n">Purchase</a>
        </div>
    </div>
    </header>

<footer class="container-fluid bg-4 text-center">
  <p>@ 2018 Copyright: <a href="home.php">www.adsells.com </a>| Designed by Prajwal Ghoradkar</p> 
</footer>

    
</body>
</html>


