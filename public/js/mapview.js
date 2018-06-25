// Map管理
var map;
// 現在位置
var mapLatLng;
// マーカー
var marker = [];
// カードデータ
var cardData;

function initMap()
{
    // Map描画要素
    var mapArea = document.getElementById('map');
	// 現在地を取得
    navigator.geolocation.getCurrentPosition(
        // 取得成功した場合
        function(position) {
            // 現在地取得
            mapLatLng = new google.maps.LatLng(parseFloat(position.coords.latitude), parseFloat(position.coords.longitude));
            var mapOptions = {
                // 中央位置
                center: mapLatLng,
                // ズーム値
                zoom: 15,
                // 航空写真無効
                mapTypeControl: false
            };
            // Map生成
            map = new google.maps.Map(mapArea, mapOptions);
            // マーカー生成
            initMarker();
            // 現在地から半径1kmで円を描画。
            initCircle(mapLatLng);
        },
        // 取得失敗した場合
        function(error) {
          switch(error.code) {
            case 1: //PERMISSION_DENIED
              alert("位置情報の利用が許可されていません");
              break;
            case 2: //POSITION_UNAVAILABLE
              alert("現在位置が取得できませんでした");
              break;
            case 3: //TIMEOUT
              alert("タイムアウトになりました");
              break;
            default:
              alert("その他のエラー(エラーコード:"+error.code+")");
              break;
          }
        }
    );
}

// 円生成
// 引数:latlng　生成したい円の中心座標(google.maps.LatLng)
function initCircle(latlng)
{
	// 円描画
	var circle = new google.maps.Circle({
		map:map,
		center:latlng,
		radius:1000,
		clickable:false,
		draggable:false,
		editable:false,
		fillColor:"#caffff",
		fillOpacity:0.4,
		strokeColor:"#0028a0",
		strokeOpacity:0.8,
		strokeWeight:3

	});

}

// Marker生成
function initMarker(){
    var markerCount = 0
    // 現在地にマーカー
    marker[markerCount] = new google.maps.Marker({
        position: mapLatLng,
        map: map
    });
    // カード枚数分マーカー
    for (var item in cardData.data) {
        var markerPosition = {lat: cardData.data[item].latitude, lng: cardData.data[item].longitude};
        marker[markerCount] = new google.maps.Marker({
            position: markerPosition,
            map: map,
            icon: {
                url: cardData.data[item].CardIllustration,
                scaledSize: new google.maps.Size(45, 45)
            },
            optimized: false
        });
        // マーカーイベント付与
        markerEvent(markerCount);
        markerCount = ++markerCount;
    }
}

// マーカーイベント
function markerEvent(markerCount){

    // // マウスオーバー
    // marker[markerCount].addListener('mouseover',function(){
    //     infoWindow[markerCount].open(map,marker[markerCount])
    // });
    // // マウスアウト
    // marker[markerCount].addListener('mouseout', function(){
    //     infoWindow[markerCount].close();
    // });

    // マウスクリック
    marker[markerCount].addListener('click', function(){
        $.ajax({
            url:'/YurucharaGO/public/getcard',
            type:'GET',
            data: {
                'cardID': cardData.data[markerCount].CardID,
            },
            dataType:'json',
            timeout:1000,
        }).done(function(data1,textStatus,jqXHR) {
            console.log("カード入手");
        }).fail(function(jqXHR, textStatus, errorThrown ) {

        }).always(function(){

        });
    });
}

function getPosition(callback)
{
  navigator.geolocation.getCurrentPosition(
      // 取得成功した場合
        function(position) {
          callback({"lat":position.coords.latitude, "lng":position.coords.longitude});
        },
        // 取得失敗した場合
        function(error) {
          switch(error.code) {
            case 1: //PERMISSION_DENIED
              alert("位置情報の利用が許可されていません");
              break;
            case 2: //POSITION_UNAVAILABLE
              alert("現在位置が取得できませんでした");
              break;
            case 3: //TIMEOUT
              alert("タイムアウトになりました");
              break;
            default:
              alert("その他のエラー(エラーコード:"+error.code+")");
              break;
          }
        }
    );
}

function positionProcessing(geoCodeResults)
{
    $.ajax({
        url:'/YurucharaGO/public/range',
        type:'GET',
        data: {
            'lat': geoCodeResults["lat"],
            'lng': geoCodeResults["lng"],
        },
        dataType:'json',
        timeout:1000,
    }).done(function(data1,textStatus,jqXHR) {
        cardData = data1;
        initMap();
    }).fail(function(jqXHR, textStatus, errorThrown ) {

    }).always(function(){

    });
}

// ページ更新処理
function pageReload()
{
	window.location.reload(true);
}


$(document).ready(function(){

});
