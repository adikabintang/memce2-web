<?php
use yii\bootstrap\Nav;

?>
<aside class="main-sidebar">

    <section class="sidebar">

        <ul class="sidebar-menu">
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-location-arrow"></i> <span>Lokasi</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= \yii\helpers\Url::to(['/location/gotodepok']) ?>"><span class="fa fa-file-code-o"></span> Depok</a>
                    </li>
                    <li><a href="<?= \yii\helpers\Url::to(['/debug']) ?>"><span class="fa fa-dashboard"></span> Bogor</a>
                    </li>
                    
                </ul>
            </li>
            <li>
            	<a href="<?= \yii\helpers\Url::to(['/site/about']) ?>"><i class="fa fa-user"></i><span>Tentang Kami</span></a>
            </li>
            <li>
            	<a href="<?= \yii\helpers\Url::to(['/site/gotohow']) ?>"><i class="fa fa-github"></i><span>Bagaimana Cara Kerjanya?</span></a>
            </li>
        </ul>

    </section>

</aside>
