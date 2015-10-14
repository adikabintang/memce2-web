<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;

/* @var $this \yii\web\View */
/* @var $content string */
?>

<header class="main-header">
	
    <?= Html::a('<span class="logo-mini">W</span><span class="logo-lg">Weather Portal MEMCE2</span>', Yii::$app->homeUrl, ['class' => 'logo']) ?>

    <nav class="navbar navbar-static-top" role="navigation">

        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">

            <ul class="nav navbar-nav">

                <li class="dropdown user user-menu">
                    <a href="<?= \yii\helpers\Url::to(['/site/about']) ?>">                        
                        <span class="hidden-xs">Tentang MEMCE2</span>
                    </a>
                    
                </li>

            </ul>
        </div>
    </nav>
</header>
