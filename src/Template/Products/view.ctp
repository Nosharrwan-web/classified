<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $property
 */
?>
<div class="properties view large-9 medium-8 columns content">
    <h3><?= h($product->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($product->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Image') ?></th>
            <td><?= $this->Html->image( $product->image, ['border' => '0', 'data-src' => $product->image, 'class' => 'img-responsive']); ?>
</td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= h($product->price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($product->id) ?></td>
        </tr>
    </table>
</div>
<!-- Display status message -->
<?php echo !empty($statusMsg)?'<p class="status-msg">'.$statusMsg.'</p>':''; ?>



