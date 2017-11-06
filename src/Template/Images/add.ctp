<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Image $image
 */
?>
<div class="container">
    <div>
        
    
<div class="row">
    <?= $this->Form->create($image,['type'=>'file']) ?>
    <fieldset>
        <legend><?= __('Add Image') ?></legend>
        <div class="form-group">
        <?php 
            //echo $this->Form->control('post_id', ['options' => $posts, 'empty' => true],['class'=>'form-control']);
            echo $this->Form->hidden('post_id',['default' => $post_id]);
            ?>
        </div>
        <?php
            echo $this->Form->control('name',['class'=>'form-control']);  
        ?>
        <div class="form-group">
            <?php
                echo $this->Form->input('photo',['type'=>'file']); 
            ?>
        </div>
    </fieldset>
    <div class="form-group"> 
        <?= $this->Form->button(__('Upload'),['class'=>'btn btn-primary']) ?>
    </div>
    <?= $this->Form->end() ?>
</div>
</div>