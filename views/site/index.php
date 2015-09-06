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
			                <h3>Status: <span class="label label-info">Aktif</span></h3>
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
							<h3>Status: <span class="label label-danger">Belum Tersedia</span></h3>
							<a href="#" class="thumbnail">
						      <img src="<?php echo Yii::$app->request->baseUrl. '/pictures/map_bogor.png'?>" alt="depok">
						    </a>
			                
			                <p><a class="btn btn-default" href="#">Lihat Bogor &raquo;</a></p>
	            		</div>
	            	</div>
	            </div>
	            <div class="col-lg-4">
	            	<div class="panel panel-default">
  						<div class="panel-body">
			                <h2>Jakarta</h2>
							<h3>Status: <span class="label label-danger">Belum Tersedia</span></h3>
							<a href="#" class="thumbnail">
						      <img src="<?php echo Yii::$app->request->baseUrl. '/pictures/map_jakarta.png'?>" alt="depok">
						    </a>
			                
			                <p><a class="btn btn-default" href="<?= \yii\helpers\Url::to(['/location/gotodepok']) ?>">Lihat Jakarta &raquo;</a></p>
	            		</div>
	            	</div>
	            </div>
	            <div class="col-lg-4">
	            	<div class="panel panel-default">
  						<div class="panel-body">
			                <h2>Jogjakarta</h2>
							<h3>Status: <span class="label label-danger">Belum Tersedia</span></h3>
							<a href="#" class="thumbnail">
						      <img src="<?php echo Yii::$app->request->baseUrl. '/pictures/map_jogja.png'?>" alt="depok">
						    </a>
			                
			                <p><a class="btn btn-default" href="#">Lihat Jogjakarta &raquo;</a></p>
	            		</div>
	            	</div>
	            </div>
	            <div class="col-lg-4">
	            	<div class="panel panel-default">
  						<div class="panel-body">
			                <h2>Bandung</h2>
							<h3>Status: <span class="label label-danger">Belum Tersedia</span></h3>
							<a href="#" class="thumbnail">
						      <img src="<?php echo Yii::$app->request->baseUrl. '/pictures/map_bandung.png'?>" alt="depok">
						    </a>
			                
			                <p><a class="btn btn-default" href="#">Lihat Bandung &raquo;</a></p>
	            		</div>
	            	</div>
	            </div>
	            <div class="col-lg-4">
	            	<div class="panel panel-default">
  						<div class="panel-body">
			                <h2>Tangerang</h2>
							<h3>Status: <span class="label label-danger">Belum Tersedia</span></h3>
							<a href="#" class="thumbnail">
						      <img src="<?php echo Yii::$app->request->baseUrl. '/pictures/map_tangerang.png'?>" alt="depok">
						    </a>
			                
			                <p><a class="btn btn-default" href="#">Lihat Tangerang &raquo;</a></p>
	            		</div>
	            	</div>
	            </div>
	        </div>
	
	    </div>
		<!-- ampe sini -->
	</div>
</div>