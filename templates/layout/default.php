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
 * @var \App\View\AppView $this
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Panskura Vidyaniketan</title>  
  
    <link rel="shortcut icon" href="<?php echo $this->Url->image('favicon.ico'); ?>" type="image/x-icon" />
    <link rel="apple-touch-icon" href="<?php echo $this->Url->image('apple-touch-icon.png'); ?>">


    <?= $this->Html->css('bootstrap.min.css') ?>
    
    <?= $this->Html->css('versions.css') ?>
    <?= $this->Html->css('responsive.css') ?>
    <?= $this->Html->css('custom.css') ?>
    <?= $this->Html->script('modernizer.js') ?>
    <?= $this->Html->css('font-awesome.min.css') ?>
    <?= $this->Html->css('font-awesome.css') ?>
    <?= $this->Html->css('style.css') ?>

</head>
<body class="host_version">
    <?php //echo $this->Flash->render(); ?>
    <?= $this->element('header') ?>
    <?= $this->fetch('content') ?>
    <?= $this->element('footer') ?>

    <!-- ALL JS FILES -->
    <?= $this->Html->script('all.js') ?>
    <!-- ALL PLUGINS -->
    <?= $this->Html->script('custom.js') ?>
    <?= $this->Html->script('timeline.min.js') ?>

	<script>
		timeline(document.querySelectorAll('.timeline'), {
			forceVerticalMode: 700,
			mode: 'horizontal',
			verticalStartPosition: 'left',
			visibleItems: 4
		});
	</script>

</body>
</html>
