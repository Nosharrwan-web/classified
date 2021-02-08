<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $products
 */
?>
<?php echo $this->HTML->css('my_products.css');?>

<body>
<nav class="top-bar" data-topbar role="navigation">
         <ul class="title-area">
            <li class="name">
               <h1><a>classified site</a></h1>
            </li>
            <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
            <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
         </ul>
         <section class="top-bar-section">
            <!-- Right Nav Section -->
            <ul class="right">
               <li class="divider"></li>
               <li><a href="index.php"></a></li>
               <li class="divider"></li>
               <li class="divider"></li>
               <li><a href="upload-photo.php" data-reveal-id="uploadModal" data-reveal-ajax="true"><?= $this->Html->link(__('New Product'), ['action' => 'add']) ?></a></li>
               <li><?= $this->Html->link(__('Logout')
                ,['controller' => 'users', 'action' => 'login']) ?></li>
               <li class="divider"></li>
			   
            </ul>
         </section>
      </nav>
         <nav class="large-3 medium-4 columns" id="actions-sidebar">
         <ul class="side-nav">
        
        
        <!--<li><?//= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'myproducts']) ?></li>
        <li><?//= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'myproducts']) ?></li>-->

         </ul>
      </nav>
<div class="searching" style="background-color:lightblue;">
   <form action="<?php echo $this->url->build(['controller' =>'Products','action'=>'search']) ?>" method="get">
      <div class ="input-group">
      <input type="search" name="q" class="form-control" placeholder="Search">
      <div class="input-group-prepend">
      <button class="btn btn-primary input -group-text" type="submit">search</button>
      </div>
      </div>
   </form>
</div>
<div class="products index large-9 medium-8 columns content" style="padding-left:30px; width:100%;background-color:aliceblue;">
    <h3 style="color:rgb(72 28 511);text-decoration:underline;text-align:center;font-size:35px;"><?= __('Products') ?></h3>

    <div class="row">
    <?php foreach ($products as $product): ?>
  <div style="width:30%;display:inline-block;color:white;">

                      
       <div class="" style="padding:0px 0px 0px 0px"><?= $this->Html->image( $product->image, ['data-src' => $product->image, 'class' => 'imag']); ?></div>
       <div class="detail" style="background-color:brown;text-align:center;">
       <div ><?= $this->Html->Link(__($product->name),['action' => 'view',$product->id]) ?></div>
       <div class="product"><?= h($product->price) ?></div>
               
       <div class="actions">
        <button style="background-color:white;font-size:10px;"><?= $this->Html->link(__('View'), ['action' => 'view', $product->id])?></button>
        <button style="background-color:white;font-size:10px;"> <?= $this->Html->link(__('Edit'), ['action' => 'edit', $product->id]) ?></button>
        <button style="background-color:white;font-size:10px;"> <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]) ?></button>
       </div>
      </div>   
 
  </div>
  
  <?php endforeach; ?>
 
</div>

</div>  
</body>