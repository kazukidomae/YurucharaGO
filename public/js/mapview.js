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
var testdata_lat = new Array();
// ゆるキャラの経度の仮データ。
var testdata_lon = new Array();
// ゆるキャラのアイコン画像の仮データ。
var testdata_icon = new Array();
// ゆるキャラ名の仮データ。
var testdata_charaname = new Array();
// ゆるキャラIDの仮データ。
var testdata_id = new Array();

// ゆるキャラの地図上に表示させるアイコンオブジェクト。
var testdata_gicon = new Array();

// 高尾山の緯度・経度テストデータ。
var takaoLatLng;
// 高尾山のマーカーオブジェクト。
var takaoMarker;

// 現在地の緯度経度情報を格納するオブジェクト。
var llobj;

// グローバル変数　ここまで

function getIdoKeido()
{

	// 現在地を取得
    navigator.geolocation.getCurrentPosition(
        // 取得成功した場合
        function(position) {
        	// 緯度・経度をHTML上にセット。
        	// $("#ido").val( "" + position.coords.latitude);
        	// $("#keido").val( "" + position.coords.longitude);

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

          /*

          // 現在地から半径1kmで円を描画する。
          hereCircle = new google.maps.Circle({
            radius:1000,
            strokeColor:'#f93f00',
            strokeWeight:1,
            strokeOpacity:0.8,
            fillColor:'#ffcf3e',
            fillOpacity:0.4,
            clickable:false,
            draggable:false,
            editable:false,
            map:map,
            center:llobj

          });

          // ゆるキャラの取得。
          showYuruchara(llobj);

          */


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
    
    };
    // Mapを生成
    map = new google.maps.Map(mapArea, mapOptions);

}

// ドキュメントの読み込みが完全に完了したら、initMap関数を実行する。
$(document).ready(function(){
  initMap();

  // 現在地の緯度経度取得処理を実行する。
  getIdoKeido();
});

// 引数に渡された緯度・経度を基に、半径1km以内のゆるキャラを検索し、必要に応じて表示させる関数。
function showYuruchara(ll)
{
  // 2点間の直線距離。
  var between = 0;
  // グーグルマップに表示させるアイコンデータ。
  var gmap;

  for(i=0;i<testdata_lat.length;i++)
  {
    // 2点間の直線距離を計算。
    between = google.maps.geometry.spherical.computeDistanceBetween(ll,new google.maps.LatLng(parseFloat(testdata_lat[i]), parseFloat(testdata_lon[i])) );
    // 直線距離が1km以内なら、ゆるキャラを表示する。
    if(between < 1000)
    {
      gmap = new google.maps.Marker({
          position:new google.maps.LatLng(parseFloat(testdata_lat[i]), parseFloat(testdata_lon[i])),
          map:map,
          title:testdata_charaname[i],
          draggable:false,
          icon:"./testimg/" + testdata_icon[i]
      });

      // アイコンが押されたら、idを表示。
      (function(iVal) {
        gmap.addListener('click', function() {
          window.alert("id:" + iVal);
        });
      })( testdata_id[i] );

      
      testdata_gicon.push(gmap);

    }
  }

}

function pageReload()
{
  window.location.reload(true);
}

function getOnlyIdoKeido(callback)
{

  var testIK = new Array(2);
  var test;
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

    // window.alert("test:" + test);

}

function testResults(geoCodeResults)
{
  $('#ido').text("" + geoCodeResults["lat"] + "");
  $('#keido').text("" + geoCodeResults["lng"] + "");
}


