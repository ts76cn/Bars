var map;
var marker= [];
var infoWindow = [];

function initMap() {
  // 地図の作成
  // 緯度経度のデータ作成
  var mapLatLng = new google.maps.LatLng({lat: 38.256548, lng: 140.876264}); 
  // #markerに地図を埋め込む
  map = new google.maps.Map(document.getElementById('marker'), { 
    // 地図の中心を指定
    center: mapLatLng, 
    // 地図のズームを指定
    zoom: 15 
  });

  for (var i = 0; i < markerData.length; i++) {
    // 緯度経度のデータ作成
    markerLatLng = new google.maps.LatLng({lat: markerData[i]['lat'], lng: markerData[i]['lng']});
    // マーカーの追加
    marker[i]  = new google.maps.Marker({ 
      // マーカーを立てる位置を指定
      position: markerLatLng, 
      // マーカーを立てる地図を指定
      map: map 
    });

    // 吹き出しの追加
    infoWindow[i] = new google.maps.InfoWindow({ 
      // 吹き出しに表示する内容
      content: '<div class="marker"><a href=' + markerData[i]['urls'] + '>' + markerData[i]['name'] + '</a></div>'
    });

    // マーカー表示方法の実行
    markerEvent(i); 

  }
}

//マーカー表示方法
function markerEvent(i) {
  // マーカー上にマウスが乗った時
  marker[i].addListener('mouseover', function () { 
    // 吹き出しの表示
    infoWindow[i].open(map, marker[i]); 
  });
}
