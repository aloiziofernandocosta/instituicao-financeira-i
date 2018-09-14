<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Itaú
    </title>
    <?=  $this->Html->meta('favicon.ico','img/itau/favicon.ico',array('type' => 'icon')); ?>

    <?= $this->Html->css('bootstrap.min') ?>
    <?= $this->Html->css('bootstrap-theme.min') ?>
    <?= $this->Html->css('material-kit') ?>
    <?= $this->Html->css('font-awesome.min') ?>
    <?= $this->Html->css('itau') ?>

    <?= $this->Html->script('jquery-3.2.1.min') ?>
    <?= $this->Html->script('bootstrap.min') ?>
    <?= $this->Html->script('material.min') ?>
    <?= $this->Html->script('nouislider.min') ?>
    <?= $this->Html->script('material-kit') ?>
    <?= $this->Html->script('jquery.mask.min') ?>
    <?= $this->Html->script('bootbox.min') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>

    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <div class="col-">
            <?= $this->fetch('content') ?>
        </div>
    </div>
</body>
</html>
