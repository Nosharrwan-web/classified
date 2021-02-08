<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $product
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Products'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="products form large-9 medium-8 columns content">
    <?= $this->Form->create($product,array('type'=>'file')) ?>
    <fieldset>
        <legend><?= __('Add Product') ?></legend>

        <li  style=" color: #AAAAAA;cursor: pointer;font-size: 1.2rem;font-weight: bold;
         line-height: 2; position: absolute; top: 1.625rem; right: 26.375rem; ">
         <?= $this->Html->link(__('close')
          ,['controller' => 'products', 'action']) ?></li>
        <?php
            echo $this->Form->control('name');          
            
             echo $this->Form->input('file', array('type' => 'file', 'multiple'=>'true' ,
             'label' => 'File')); 
           echo $this->Form->control('price');
        ?>
        <?= $this->Form->button(__('Submit')) ?>
        <?= $this->Form->end() ?>
      
        </div>
    </fieldset>
   
</div>
