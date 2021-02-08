<!-- $this->Html is the form helper object that contain code snippets for html elements like forms,links,etc
	link() method generate html link
 -->
 

 <h3 style="color:white;padding-left:20px;text-decoration:underline;">Digital Marketing</h3>
 <?php echo $this->HTML->css('display.css');?>
<div class="butt">
<div class='col-md-4'>
    <form action="<?php echo $this->url->build(['action'=>'search']) ?>" method="get">
        <div class ="input-group">
            <input type="search" name="q" class="form-control"/>
            <div class="input-group-prepend">
                <button class="btn btn-primary input -group-text" type="submit">search</button>
            </div>
        </div>        
</form>
</div>
<h1>Blog topics</h1>
<p><?= $this->Html->link('Add Topic', ['action' => 'add']) ?></p>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Created</th>
        <th>Actions</th>
    </tr>

<!-- Here's where we loop through our $topics query object, printing out topic info -->

    <?php foreach ($topics as $topic): ?>
    <tr>
        <td><?= $topic->id ?></td>
        <td>
            <?= $this->Html->link($topic->title, ['action' => 'view', $topic->id]) ?>
        </td>
        <td>
        <?php
            echo "Today is " . date("Y/m/d") . "<br>";
            echo "Today is " . date("l");
        ?>
        <td>
            <?= $this->Html->link('Edit', ['action' => 'edit', $topic->id]) ?>
        </td>
    </tr>
    <?php endforeach; ?>
	<tr>
	<?php  if ($this->request->session()->read('Auth.User')){ ?>
		<td> <?=$this->Html->Link(__('Log out'),['controller'=>'users','action'=>'logout'])?></td>
	<?php }else{  ?>
		<td> <?=$this->Html->Link(__('Login'),['controller'=>'users','action'=>'login',])?></td>
		
       
	<?php } ?>

	</tr>
</table>

</div>