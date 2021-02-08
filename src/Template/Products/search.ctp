<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $products
 */
?>
<?php echo $this->HTML->css('my_products.css');?>

<body>

<form action="<?php echo $this->url->build(['controller' =>'Products','action'=>'search']) ?>" method="get">
<div class ="input-group">
<input type="search" name="q" class="form-control" placeholder="Search" value="<?= $search;?>">
<div class="input-group-prepend">
<button class="btn btn-primary input -group-text" type="submit">search</button>
</div>
</div>
</form>
<div class="products index large-9 medium-8 columns content">
    <h3 style="color:rgb(165 165 165);"><?= __('Products') ?></h3>

    <div class="row">
    <?php foreach ($products as $product): ?>
  <div style="width:20%;display:inline-block;color:white;">

                
                <div class=""><?= $this->Html->Link(__($product->name),['action' => 'view',$product->id]) ?></div>
                <div class="product"><?= h($product->price) ?></div>
                <div class="product"><?= h($product->image) ?></div>

                <div class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $product->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $product->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]) ?>
                </div>
          
 
  </div>
  
  <?php endforeach; ?>
 
</div>

</div>
</body>