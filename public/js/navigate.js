// グローバル変数　ここから
// グーグルマップの描画領域オブジェクトを格納する変数。
var mapArea;
// マップ動作管理オブジェクト。
var map;
// 現在地のマーカーオブジェクト。・
var hereMarker;
// 現在地の円オブジェクト。
var hereCircle;
// ゆるキャラの緯度の仮データ。
var testdata_lat = [35.693683,39.703488,32.789389,35.689367];
// ゆるキャラの経度の仮データ。
var testdata_lon = [139.701447,141.142839,130.689780,139.688537];
// ゆるキャラのアイコン画像の仮データ。
var testdata_icon = ["ticon.png","ticon.png","ticon.png","ticon.png"];
// ゆるキャラの地図上に表示させるアイコンオブジェクト。
var testdata_gicon = new Array();

// 高尾山の緯度・経度テストデータ。
var takaoLatLng;
// 高尾山のマーカーオブジェクト。
var charaMarker;

// ページ遷移で送られたゆるキャラの緯度。
var ido = 0;
// ページ遷移で送られたゆるキャラのの経度。
var keido = 0;
// ページ遷移で送られたゆるキャラの名前。
var yurucharaName = "";

// グローバル変数　ここまで

function getIdoKeido()
{
  // 現在地の緯度経度情報を格納するオブジェクト。
  var llobj;

	// 現在地を取得
  navigator.geolocation.getCurrentPosition(
        // 取得成功した場合
        function(position) {

          // 取得した現在地座標へ地図を自動的に移動。
          llobj = new google.maps.LatLng(parseFloat(position.coords.latitude), parseFloat(position.coords.longitude));

          // window.alert(position.coords.latitude + "," + position.coords.longitude);
          map.panTo( llobj );

          // 現在地にマーカーをセットする。
          hereMarker = new google.maps.Marker({
            position:llobj,
            map:map,
            title:"現在地",
            draggable:false,
            icon:"./testimg/human.png"

          });

          // ページ遷移で受信したゆるキャラの緯度経度を基に、マーカーを作成する。
          charaMarker = new google.maps.Marker({
            position:new google.maps.LatLng(ido,keido),
            map:map,
            title:yurucharaName,
            draggable:false,
            icon:"./testimg/ticon.png"

          });

          // 現在地からゆるキャラまでの徒歩ルート探索。
          createRoute(llobj,charaMarker.getPosition());

          
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

// ブラウザの領域上にマップを表示させる関数。
function initMap()
{
  // Map座標
    var mapPosition = {lat: parseFloat(35.906119), lng: parseFloat(139.623327)};
    // Map描画要素
    mapArea = document.getElementById('map');
    var mapOptions = {
        // 中央位置
        center: mapPosition,
        // ズーム値
        zoom: 15,
        // 航空写真は無効
        mapTypeControl:false
    
    // Mapの色変更
    //styles: [{
      //featureType: 'all',
      //elementType: 'all',
          //stylers: [{
        // 色相
              //hue: '#5FB404'
          //}, {
        // 彩度
              //saturation: -50
          //}, {
        // 明度
              //lightness: 10
          //}, {
              //gamma: 1
          //}]
      //}]
    
    };
    // Mapを生成
    map = new google.maps.Map(mapArea, mapOptions);

}

// 指定座標の出発地から指定座標の目的地までのルート検索を行う関数。
// 引数:
// llStart 出発地の緯度経度。
// llFinish 目的地の緯度経度。
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
      // preserveViewport: true,
      suppressMarkers: true //デフォルトのマーカー削除。
  });
  // ルート検索
  d.route(routeOptions, function(result, status){
      // OKの場合ルート描画
      if (status == google.maps.DirectionsStatus.OK) {
          r.setDirections(result);
      }
  });

}

function pageReload()
{
  window.location.reload(true);
}


// ドキュメントの読み込みが完全に完了したら、initMap関数を実行する。
$(document).ready(function(){
  initMap();

  // takaoLatLng = new google.maps.LatLng(parseFloat(35.631196), parseFloat(139.256493));
  // takaoLatLng = new google.maps.LatLng(parseFloat(35.688790), parseFloat(139.781267));

  testdata_lat[1] = parseFloat(ido);
  testdata_lon[1] = parseFloat(keido);

  // 現在地の緯度経度取得処理を実行する。
  getIdoKeido();
});

