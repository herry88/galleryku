<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Image[]|\Cake\Collection\CollectionInterface $images
 */
?>

<div class="container">
    <h3><?= __('Images') ?></h3>
    <div class="row">
    <?= $this->Html->link(__('New Image'), ['controller' => 'Images', 'action' => 'add'],['class'=>'btn btn-primary']) ?>
    </div>
    <br>
    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('post_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('photo') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($images as $image): ?>
            <tr>
                <td><?= $this->Number->format($image->id) ?></td>
                <td><?= $image->has('post') ? $this->Html->link($image->post->title, ['controller' => 'Posts', 'action' => 'view', $image->post->id]) : '' ?></td>
                <td><?= h($image->name) ?></td>
                <td><?= $this->Html->image('/uploads/files/'.$image->photo, array('width'=>'200px')) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $image->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $image->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $image->id], ['confirm' => __('Are you sure you want to delete # {0}?', $image->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
</div>
