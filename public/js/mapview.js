// Map管理
var map;
// 現在位置
var mapLatLng;
// マーカー
var marker = [];
var cardData = [];

function initMap()
{
    // Map描画要素
    var mapArea = document.getElementById('map');
	// 現在地を取得
    navigator.geolocation.getCurrentPosition(
        // 取得成功した場合
        function(position) {
            // 現在地
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
            initMarker();
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

// Marker生成
function initMarker(){
    var markerCount = 0
    // 現在地にマーカー
    marker[markerCount] = new google.maps.Marker({
        position: mapLatLng,
        map: map
    });

    // Marker
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
        // // POSTデータを送信
        // var form = document.createElement('form');
        // document.body.appendChild(form);
        // var input = document.createElement('input');
        // input.setAttribute('type','hidden');
        //
        // input.setAttribute('name', 'searchConditions[0]');
        // input.setAttribute('value' , 'screenName');
        // form.appendChild(input);
        // input = input.cloneNode(false);
        //
        // input.setAttribute('name', 'searchConditions[1]');
        // input.setAttribute('value' , document.getElementById('screen_name').innerHTML);
        // form.appendChild(input);
        //
        // form.setAttribute('action', './php/Controller.php');
        // form.setAttribute('method' , 'post');
        // form.submit();
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
$(document).ready(function(){

});
