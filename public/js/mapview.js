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
var takaoMarker;

// グローバル変数　ここまで

function getIdoKeido()
{
  // 現在地の緯度経度情報を格納するオブジェクト。
  var llobj;

	if(navigator.geolocation)
	{
		// GeolocationAPIに対応
		// alert("この端末はGeolocationAPIに対応しています。");
	}
	else
	{
		// GeolocationAPIに非対応
		// alert("この端末はGeolocationAPIに対応していません。");	
	}

	// 現在地を取得
    navigator.geolocation.getCurrentPosition(
        // 取得成功した場合
        function(position) {
        	// 緯度・経度をHTML上にセット。
        	$("#ido").val( "" + position.coords.latitude);
        	$("#keido").val( "" + position.coords.longitude);
        	getAddress(position.coords.latitude,position.coords.longitude);

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
          // 高尾山テストマーカー
          takaoMarker = new google.maps.Marker({
            position:takaoLatLng,
            map:map,
            title:"高尾山",
            draggable:false,
            icon:"./testimg/mountain.png"

          });
          // 高尾山マーカーがクリックされたら、現在地から高尾山まで電車＋徒歩でのルート検索。
          takaoMarker.addListener('click', function(e) {
        
            // ルート検索の条件を指定。
            var routeOptions = 
            {
              origin: llobj, // 出発地
              destination: takaoLatLng, // 目的地
              travelMode: google.maps.DirectionsTravelMode.WALKING //交通手段は徒歩。
            };

            var d = new google.maps.DirectionsService(); // ルート検索
            var r = new google.maps.DirectionsRenderer({ // ルート描画
                map:map,
                preserveViewport: true,
                suppressMarkers: true,
                polylineOptions: {
                  strokeColor: '#ff5c0f',
                  strokeOpacity: 0.7,
                  strokeWeight: 4
                }
            });
            // ルート検索
            d.route(routeOptions, function(result, status){
                // OKの場合ルート描画
                if (status == google.maps.DirectionsStatus.OK) {
                    r.setDirections(result);
                }
                window.alert(status);
            });

          });

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

// 緯度・経度から住所を取得する関数。引数には緯度・経度をセットしてください。
function getAddress(lat,lng)
{

  // ジオコーダーオブジェクト。
  var geocoder = new google.maps.Geocoder();
  // 緯度・経度のjson情報。
  var latlng = {lat: parseFloat(lat), lng: parseFloat(lng)};

  // ジオコード処理
  geocoder.geocode({'location': latlng}, function(results, status) {
    if (status === 'OK') {
      if (results[0].geometry) {
      	// 日本を除いた住所を取り出す。
        var address = results[0].formatted_address;

        // 正規表現を用いて
        // alert("address = " + address);
        $('#address').val(address);
      } else {
        alert('No results found');
      }
    } 
    else
    {
      alert('Geocoder failed due to: ' + status);
    }
  });


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

// ドキュメントの読み込みが完全に完了したら、initMap関数を実行する。
$(document).ready(function(){
  initMap();

  takaoLatLng = new google.maps.LatLng(parseFloat(35.631196), parseFloat(139.256493));
  // takaoLatLng = new google.maps.LatLng(parseFloat(35.688790), parseFloat(139.781267));

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
          title:"ゆるキャラ" + i + "",
          draggable:false,
          icon:"./testimg/" + testdata_icon[i]
      });
      (function(j,k){
        gmap.addListener('click', function(e) {
        
          // ゆるキャラがクリックされたら、現在地からそのゆるキャラまでの徒歩ルートを検索する。
          // ルート検索の条件を指定。
          var routeOptions = 
          {
            origin: ll, // 出発地
            destination: k, // 目的地
            travelMode: google.maps.DirectionsTravelMode.WALKING //交通手段は徒歩。
          };

          var d = new google.maps.DirectionsService(); // ルート検索
          var r = new google.maps.DirectionsRenderer({ // ルート描画
              map:map,
              preserveViewport: true,
              suppressMarkers: true //デフォルトのマーカー削除。
          });
          // ルート検索
          d.route(routeOptions, function(result, status){
              // OKの場合ルート描画
              if (status == google.maps.DirectionsStatus.OK) {
                  r.setDirections(result);
              }
          });

        });
      })(gmap.getTitle(),gmap.getPosition());
      
      testdata_gicon.push(gmap);

    }
  }

}

function pageReload()
{
  window.location.reload(true);
}

