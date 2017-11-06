<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Post $post
 */
?>
<div class="container">
    <div class="panel-group">
        <div class="panel panel-primary">
            <div class="panel-heading">List View</div>
   <div class="buttonupload">
    <?= $this->Html->link(__('Upload'),['controller'=>'Images/Add/'.$post_id],['class'=>'btn btn-success','right']) ?>
   </div>
    <div class="panel-body">
    <?php if (!empty($post->images)): ?>
        <?php foreach ($post->images as $images): ?>
            <div class="col-lg-3 col-md-4 col-xs-6">
             <?= $this->Html->image('/uploads/files/'.$images->photo, array('width'=>'200px','height'=>'200px')) ?>
              <div class="row button">
               <?= $this->Form->postLink(__('Delete'), ['controller' => 'Images', 'action' => 'delete', $images->id],['class'=>'btn btn-danger'],['confirm' => __('Are you sure you want to delete # {0}?', $images->id)],['class'=>'btn btn-danger']) ?>
               </div>
            </div>
                <?php endforeach; ?>
        <?php endif; ?>
      </div>
        </div>   
    </div>
</div>
