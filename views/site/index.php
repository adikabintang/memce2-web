<?php

?>
<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">Home</h3>
	</div>
	
	<div class="panel-body">
		<!-- isi disini. Ini desain sederhana gw -->
		<div class="jumbotron">
	        <h1>Selamat Datang!</h1>
	
	        <p class="lead">MEMCE2 Weather Portal - Portal Untuk Mengamati Kondisi Cuaca dan Iklim</p>
    	</div>
    	
    	<div class="body-content">

	        <div class="row">
	            <div class="col-lg-4">
	            	<div class="panel panel-default">
  						<div class="panel-body">
			                <h2>Depok </h2>
			                <h3>Status: <span class="label label-info">Berawan</span></h3>
							<a href="<?= \yii\helpers\Url::to(['/location/gotodepok']) ?>" class="thumbnail">
						      <img src="<?php echo Yii::$app->request->baseUrl. '/pictures/map_depok.JPG'?>" alt="depok">
						    </a>
			                
			                <p><a class="btn btn-default" href="<?= \yii\helpers\Url::to(['/location/gotodepok']) ?>">Lihat Depok &raquo;</a></p>
	            		</div>
	            	</div>
	            </div>
	            <div class="col-lg-4">
	            	<div class="panel panel-default">
  						<div class="panel-body">
			                <h2>Bogor</h2>
							<h3>Status: <span class="label label-primary">Hujan</span></h3>
							<a href="<?= \yii\helpers\Url::to(['/location/gotodepok']) ?>" class="thumbnail">
						      <img src="<?php echo Yii::$app->request->baseUrl. '/pictures/map_depok.JPG'?>" alt="depok">
						    </a>
			                
			                <p><a class="btn btn-default" href="<?= \yii\helpers\Url::to(['/location/gotodepok']) ?>">Lihat Bogor &raquo;</a></p>
	            		</div>
	            	</div>
	            </div>
	            <div class="col-lg-4">
	            	<div class="panel panel-default">
  						<div class="panel-body">
			                <h2>Jakarta</h2>
							<h3>Status: <span class="label label-danger">Panas</span></h3>
							<a href="<?= \yii\helpers\Url::to(['/location/gotodepok']) ?>" class="thumbnail">
						      <img src="<?php echo Yii::$app->request->baseUrl. '/pictures/map_depok.JPG'?>" alt="depok">
						    </a>
			                
			                <p><a class="btn btn-default" href="<?= \yii\helpers\Url::to(['/location/gotodepok']) ?>">Lihat Jakarta &raquo;</a></p>
	            		</div>
	            	</div>
	            </div>
	            <div class="col-lg-4">
	            	<div class="panel panel-default">
  						<div class="panel-body">
			                <h2>Jogjakarta</h2>
							<h3>Status: <span class="label label-warning">Cerah</span></h3>
							<a href="<?= \yii\helpers\Url::to(['/location/gotodepok']) ?>" class="thumbnail">
						      <img src="<?php echo Yii::$app->request->baseUrl. '/pictures/map_depok.JPG'?>" alt="depok">
						    </a>
			                
			                <p><a class="btn btn-default" href="<?= \yii\helpers\Url::to(['/location/gotodepok']) ?>">Lihat Jogjakarta &raquo;</a></p>
	            		</div>
	            	</div>
	            </div>
	            <div class="col-lg-4">
	            	<div class="panel panel-default">
  						<div class="panel-body">
			                <h2>Bandung</h2>
							<h3>Status: <span class="label label-success">Sejuk</span></h3>
							<a href="<?= \yii\helpers\Url::to(['/location/gotodepok']) ?>" class="thumbnail">
						      <img src="<?php echo Yii::$app->request->baseUrl. '/pictures/map_depok.JPG'?>" alt="depok">
						    </a>
			                
			                <p><a class="btn btn-default" href="<?= \yii\helpers\Url::to(['/location/gotodepok']) ?>">Lihat Bandung &raquo;</a></p>
	            		</div>
	            	</div>
	            </div>
	            <div class="col-lg-4">
	            	<div class="panel panel-default">
  						<div class="panel-body">
			                <h2>Tangerang</h2>
							<h3>Status: <span class="label label-success">Sejuk</span></h3>
							<a href="<?= \yii\helpers\Url::to(['/location/gotodepok']) ?>" class="thumbnail">
						      <img src="<?php echo Yii::$app->request->baseUrl. '/pictures/map_depok.JPG'?>" alt="depok">
						    </a>
			                
			                <p><a class="btn btn-default" href="<?= \yii\helpers\Url::to(['/location/gotodepok']) ?>">Lihat Tangerang &raquo;</a></p>
	            		</div>
	            	</div>
	            </div>
	        </div>
	
	    </div>
		<!-- ampe sini -->
	</div>
</div>