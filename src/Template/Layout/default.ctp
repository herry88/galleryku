<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Gallery CakePHP Herry Prasetyo';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <!-- include file css -->
    <?= $this->Html->css('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css',['inline'=>'false']) ?>
    <?= $this->Html->css('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css',array('inline'=>'false')) ?>
    <?= $this->Html->css('https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css',['inline'=>'false']) ?>
    <?= $this->Html->css('thumbnail-gallery.css') ?>
    <?= $this->Html->css('cssku.css') ?>

    <!-- javascript -->
    <?= $this->Html->script('https://code.jquery.com/jquery-1.12.4.js',['inline'=>'false']) ?>
    <?= $this->Html->script('https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js',['inline'=>'false']) ?>
    <?= $this->Html->script('https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js') ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    <script type="text/javascript">
        $(document).ready(function() {
        $('#example').DataTable();
    });
    </script>
</head>
<body>
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Example</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        
        <li><?= $this->Html->link(__('List Image'),['controller'=>'images'], ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Posts'), ['controller' => 'Posts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Image'), ['controller' => 'Images', 'action' => 'add']) ?></li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
      </ul>
    </div>
  </div>
</nav>
    <?= $this->Flash->render() ?>
    <div class="container">
        <div class="row">
            <?= $this->fetch('content') ?>
        </div>
    </div>
    <!-- Footer -->
    <footer>
     
    </footer>
</body>
</html>
