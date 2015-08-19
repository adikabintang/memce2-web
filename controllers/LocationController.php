<?php

namespace app\controllers;
use app\models\Depok;

class LocationController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
	
	public function actionGotodepok() {
		$list = Depok::find()->all();
        return $this->render('depokView', ['data'=>$list]);
	}
	
	public function actionLivedepoksuhu() {
		$list = Depok::find()->all();
		$suhu = array();
		
		$i = count($list)-1;
		$suhu = $list[$i]['suhu'];
		
		header("Content-type: text/json");
		
		echo json_encode($suhu);
	}
	
	public function actionLivedepokkelembaban() {
		$list = Depok::find()->all();
		$kelembaban = array();
		
		$i = count($list)-1;
		$kelembaban = $list[$i]['kelembaban'];
		
		header("Content-type: text/json");
		
		echo json_encode($kelembaban);
	}
	
	public function actionLivedepokkecepatan() {
		$list = Depok::find()->all();
		$speed = array();
		
		$i = count($list)-1;
		$speed = $list[$i]['kecepatan_angin'];
		
		header("Content-type: text/json");
		
		echo json_encode($speed);
	}
	
	public function actionLivedepokhujan() {
		$list = Depok::find()->all();
		$hujan = array();
		
		$i = count($list)-1;
		$hujan = $list[$i]['curah_hujan'];
		
		header("Content-type: text/json");
		
		echo json_encode($hujan);
	}
	
	public function actionLivedepokcahaya() {
		$list = Depok::find()->all();
		$cahaya = array();
		
		$i = count($list)-1;
		$cahaya = $list[$i]['intensitas_cahaya'];
		
		header("Content-type: text/json");
		
		echo json_encode($cahaya);
	}
	
	public function actionLivedepoktekanan() {
		$list = Depok::find()->all();
		$tekanan = array();
		
		$i = count($list)-1;
		$tekanan = $list[$i]['tekanan_udara'];
		
		header("Content-type: text/json");
		
		echo json_encode($tekanan);
	}
}
