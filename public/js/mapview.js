function getIdoKeido()
{

	if(navigator.geolocation)
	{
		// GeolocationAPIに対応
		alert("この端末はGeolocationAPIに対応しています。");
	}
	else
	{
		// GeolocationAPIに非対応
		alert("この端末はGeolocationAPIに対応していません。");	
	}

	// 現在地を取得
    navigator.geolocation.getCurrentPosition(
        // 取得成功した場合
        function(position) {
        	// 緯度・経度をHTML上にセット。
        	$("#ido").val( "" + position.coords.latitude);
        	$("#keido").val( "" + position.coords.longitude);
        	getAddress(position.coords.latitude,position.coords.longitude);
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
        alert("address = " + address);
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



