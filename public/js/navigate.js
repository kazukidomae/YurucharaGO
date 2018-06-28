// Map管理
var map;
// 現在位置
var mapLatLng;
// 緯度。
var lat = 0;
// 経度。
var lng = 0;
// キャラクター名
var CharacterName = "";
var CharacterIllustration;

// ルートの距離を格納する変数。
var routeDistance;
// ルートの時間を格納する変数。
var routeTime;


function initMap()
{
    // Map描画要素
    var mapArea = document.getElementById('map');
	// 現在地を取得
    navigator.geolocation.getCurrentPosition(
        // 取得成功した場合
        function(position) {
            // 取得した現在地座標へ地図を自動的に移動。
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
            // 現在地にマーカーをセットする。
            hereMarker = new google.maps.Marker({
                position:mapLatLng,
                map:map,
                draggable:false,
                icon:"./testimg/human.png"

            });
            // ページ遷移で受信したゆるキャラの緯度経度を基に、マーカーを作成する。
            charaMarker = new google.maps.Marker({
                position:new google.maps.LatLng(lat,lng),
                map:map,
                draggable:false,
                icon:"./testimg/ticon.png"
            });
            // ルート探索
            createRoute(mapLatLng, charaMarker.getPosition());
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

function createRoute(llStart,llFinish)
{
    // ルート検索の条件を指定。
    var routeOptions =
    {
        origin: llStart, // 出発地
        destination: llFinish, // 目的地
        travelMode: google.maps.DirectionsTravelMode.WALKING //交通手段は徒歩。
    };

    var d = new google.maps.DirectionsService(); // ルート検索
    var r = new google.maps.DirectionsRenderer({ // ルート描画
        map:map,
        suppressMarkers: true //デフォルトのマーカー削除。
    });
    // ルート検索
    d.route(routeOptions, function(result, status){
        // OKの場合ルート描画
        if (status == google.maps.DirectionsStatus.OK) {
            r.setDirections(result);

            // ルートの距離(km単位)、時間情報(時間と分)をセット。
            routeDistance = Math.floor(result.routes[0].legs[0].distance.value / 10.0) / 100.0;
            routeDistance = routeDistance + "km";
            routeTime = getHM( result.routes[0].legs[0].duration.value );

            $('#routeDistance').text( routeDistance );
            $('#routeTime').text( routeTime );


        }
    });
}
// ドキュメントの読み込みが完全に完了したら、initMap関数を実行する。
$(document).ready(function(){
  initMap();
});

// 渡された秒数から時間・分の文字列を返す関数。
function getHM( seconds )
{

    // 戻り値を返す変数。
    var ret = "";

    // 時間を求める。
    var hour = Math.floor( seconds / 3600.0 )
    // 分を求める。
    var minute = Math.floor( (seconds - (hour * 3600.0)) / 60.0 );

    if(hour >= 1)
    {
        ret = ret + hour + "時間";
    }
    ret = ret + minute + "分";

    return ret;

}

