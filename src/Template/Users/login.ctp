<?php echo $this->HTML->css('display.css');?>

	<div class="butt">
<h1> Login </h1>
<p> Enter your username & password: </p>

<?php echo $this->Form->create();
 	 echo $this->Form->input('email');
	 echo $this->Form->input('password');
	 echo $this->Form->button('Login');?>
	 <button class="ali"><?php 
	 echo $this->Html->link(__('Register'),['controller' => 'Users','action' => 'add']); ?>
	  </button><?php
	echo $this->Form->end() 
	?>
	</div>

	
	