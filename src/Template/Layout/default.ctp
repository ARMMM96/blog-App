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

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<?= $this->Html->docType(); ?>
<html>

<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css') ?>

    <?= $this->Html->meta(
        'keywords',
        'PHP, CakePHP, frameworks'
    ); ?>
    <?= $this->Html->meta(
        'description',
        'This the app description'
    ); ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><?= $this->fetch('title') ?></a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <!-- <li class="active"><a href="<?= $this->Html->link('Home', '/'); ?>">Home</a></li> -->
                    <li><?php echo $this->Html->link('Home', '/'); ?></li>
                    <li><?php echo $this->Html->link('Crete Post', '/posts/create'); ?></li>

                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>




    <div class="container clearfix">
        <div class="row">
            <div class="col-md-4 col-lg-3 col-sm-4">
                <?= $this->element('latest'); ?>
            </div>
            <div class="col-md-8 col-lg-9 col-sm-8">
                <?= $this->Flash->render() ?>
                <?= $this->fetch('content') ?>
            </div>

        </div>
    </div>
    </div>
    <footer>
    </footer>
</body>

</html>