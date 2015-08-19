<?php
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */


if (Yii::$app->controller->action->id === 'login') { 
/**
 * Do not use this code in your template. Remove it. 
 * Instead, use the code  $this->layout = '//main-login'; in your controller.
 */
    echo $this->render(
        'main-login',
        ['content' => $content]
    );
} else {

    if (class_exists('backend\assets\AppAsset')) {
        backend\assets\AppAsset::register($this);
    } else {
        app\assets\AppAsset::register($this);
    }

    dmstr\web\AdminLteAsset::register($this);

    $directoryAsset = Yii::$app->assetManager->getPublishedUrl('@vendor/almasaeed2010/adminlte/dist');
    ?>
    <?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
    	<!-- css -->
    	<link rel="stylesheet" type="text/css" href="<?= Yii::$app->params['plugin']?>css/jquery.dataTables.min.css">
    
    	<!-- js -->
    	<!-- buat datatables -->
    	<script src="<?= Yii::$app->params['plugin']?>js/jquery-1.11.3.min.js"></script>
    	<script src="<?= Yii::$app->params['plugin']?>js/jquery.dataTables.js"></script>
    	
    	<!-- buat highcharts -->
    	<script src="<?= Yii::$app->params['plugin']?>js/highcharts.js"></script>
		<script src="<?= Yii::$app->params['plugin']?>js/exporting.js"></script>
		<script src="<?= Yii::$app->params['plugin']?>js/chartdepok.js"></script>
		<script src="<?= Yii::$app->params['plugin']?>js/chartHumDepok.js"></script>
    	
    	<!-- buat google maps -->
    	 <script src="<?= Yii::$app->params['plugin']?>js/googlemaps.js"></script> 
    	<script>
			function initialize() {
			  var mapProp = {
			    center:new google.maps.LatLng(-6.367305, 106.829043),
			    zoom:12,
			    mapTypeId:google.maps.MapTypeId.ROADMAP
			  };
			  var map=new google.maps.Map(document.getElementById("depokMap"),mapProp);
			  
			  var marker = new google.maps.Marker({
			    position: {lat: -6.367305, lng: 106.829043},
			    map: map,
			    title: 'Depok'
			  });

			}
			google.maps.event.addDomListener(window, 'load', initialize);
		</script>
		<script>
    		var $jq = jQuery.noConflict();
			//buat datatables
			$jq(document).ready(function() {
			    $jq('#tabledepok').DataTable();
			});
		</script>
    	<!-- end of js -->
        <meta charset="<?= Yii::$app->charset ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title>Weather Portal MEMCE2</title>
        <?php $this->head() ?>
    </head>
    <body class="skin-blue sidebar-mini">
    <?php $this->beginBody() ?>
    <div class="wrapper">

        <?= $this->render(
            'header.php',
            ['directoryAsset' => $directoryAsset]
        ) ?>

        <?= $this->render(
            'left.php',
            ['directoryAsset' => $directoryAsset]
        )
        ?>

        <?= $this->render(
            'content.php',
            ['content' => $content, 'directoryAsset' => $directoryAsset]
        ) ?>

    </div>

    <?php $this->endBody() ?>
    
    </body>
    </html>
    <?php $this->endPage() ?>
<?php } ?>
