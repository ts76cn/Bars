<?php

//JSONデータの置かれているURL先を格納
$url = "http://webservice.recruit.co.jp/hotpepper/gourmet/v1/?key=1a4d613f7eca7581&middle_area=Y550&middle_area=Y886&card=1&genre=G002&genre=G012&non_smoking=1&child=1&format=json";

//JSONデータを全て文字列に読み込み
$json = file_get_contents($url);

//文字化け防止
$json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');

//JSONデータを連想配列にする
$arr = json_decode($json,true);


if ($arr === NULL) {
		return;

// マーカーを立てる場所名・緯度・経度
}else{
print '
$C = "img/camera_man.png";
	markerData = [
		{';
	$json_count = count($arr['results']['shop']);
	$name　= array();
	$lat = array();
	$lng = array();
	$url = array();
	for($i=0;$i<$json_count;$i++){
		$name[] = $arr['results']['shop'][$i]["name"];
		$lat[] = $arr['results']['shop'][$i]["lat"];
		$lng[] = $arr['results']['shop'][$i]["lng"];
		$urls[] = $arr['results']['shop'][$i]["urls"]["pc"];
		print 'name:"' . $name[$i] . '",';
		print 'lat:'. $lat[$i] . ',';
		print 'lng:'. $lng[$i] . ',';
		print 'urls:"'. $urls[$i].'",';
		print 'icon:$C' ;

		// 最後のレコードだったら
		if ($i == ($json_count - 1)) {
			print '}]';

		// それ以外
		} else {
			print '},{';
		}
	}
}
?>