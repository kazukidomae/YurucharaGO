// ユーザー:


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
    // 地図のスタイルに関する配列。
 //    var styleArray = [

 //    	{
	// 		featureType: 'all',
	// 		elementType: 'all',
	//     	stylers: [{
	//        	 	hue:'#BFFF8A'
	//     	}, {
	// 			// 彩度
	//         	saturation:0
	//     	}, {
	// 			// 明度
	//         	lightness:-20
	//     	}, {
	//         	gamma: 1
	//     	}]
	// 	},
	//     {
	// 		featureType: 'road',
	// 		elementType: 'all',
	//     	stylers: [{
	//        	 	hue:'#3C3C3C'
	//     	}, {
	// 			// 彩度
	//         	saturation:0
	//     	}, {
	// 			// 明度
	//         	lightness:-80
	//     	}, {
	//         	gamma: 1
	//     	}]
	// 	}

	// ];

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
                zoom: 17.0,
                // 航空写真無効
                mapTypeControl: false,
                // Mapの色変更
				// styles:styleArray

            };
            // Map生成
            map = new google.maps.Map(mapArea, mapOptions);
            // マーカー生成
            initMarker();
            // 現在地から半径100mで円を描画。
            initCircle(mapLatLng);
        },
        // 取得失敗した場合
        function(error) {

            console.log(error);
          // switch(error.code) {
          //   case 1: //PERMISSION_DENIED
          //     alert("位置情報の利用が許可されていません");
          //     break;
          //   case 2: //POSITION_UNAVAILABLE
          //     alert("現在位置が取得できませんでした");
          //     break;
          //   case 3: //TIMEOUT
          //     alert("タイムアウトになりました");
          //     break;
          //   default:
          //     alert("その他のエラー(エラーコード:"+error.code+")");
          //     break;
          // }
        }
    );
}

// 100mの半径で円生成
// 引数:latlng　生成したい円の中心座標(google.maps.LatLng)
function initCircle(latlng)
{
	// 円描画
	var circle = new google.maps.Circle({
		map:map,
		center:latlng,
		radius:100,
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
    // 2地点間の直線距離を格納。
    var between = 0;

    // アイコンのファイルパスを格納。
    var iconPath = "";

    // 現在地にマーカー
    marker[markerCount] = new google.maps.Marker({
        position: mapLatLng,
        draggable:false,
        icon:"./images/human.png",
        map: map
    });
    // カード枚数分マーカー
    for (var item in cardData.data) {
        var markerPosition = {lat: cardData.data[item].latitude, lng: cardData.data[item].longitude};

        // ユーザーがそのカードをまだ持っていない場合は、アイコンを「はてなマーク」とする。
        if( cardData.data[item].UserID == null )
        {
            iconPath = "./images/unknown.png";
        }
        else
        {
            iconPath = './images/CharacterImage/'+cardData.data[item].CardIllustrationPath;
        }


        marker[markerCount] = new google.maps.Marker({
            position: markerPosition,
            map: map,
            icon: {
                url:iconPath,
                scaledSize: new google.maps.Size(45, 45)
            },
            optimized: false
        });
        // 半径100m以内のマーカーで、かつ未取得のカードをクリックした場合のみ、マーカーイベントを付与
        between = google.maps.geometry.spherical.computeDistanceBetween( mapLatLng,marker[markerCount].getPosition() );
        if( between <= 100 )
        {
            if(cardData.data[item].UserID == null)
            {
                markerEvent(markerCount,cardData.data[item].CardIllustrationPath,1);
            }
            else
            {
                markerEvent(markerCount,cardData.data[item].CardIllustrationPath,2);
            }
        }

        markerCount = ++markerCount;
    }
}

// マーカーイベント
// 引数:
// mode:モーダルウィンドウの表示モード。　1:ゆるキャラ取得用緑メッセージ　2:ゆるキャラ所持用赤メッセージ
function markerEvent(markerCount,path,mode){

    // // マウスオーバー
    // marker[markerCount].addListener('mouseover',function(){
    //     infoWindow[markerCount].open(map,marker[markerCount])
    // });
    // // マウスアウト
    // marker[markerCount].addListener('mouseout', function(){
    //     infoWindow[markerCount].close();
    // });

    // マウスクリック
    if(mode == 1)
    {
        marker[markerCount].addListener('click', function(){
            // $('#modal').leanModal();
            $.ajax({
                // url:'/YurucharaGO/public/getcard',
                url:'/getcard',
                type:'GET',
                data: {
                    'cardID': cardData.data[markerCount].CardID,
                },
                dataType:'json',
                timeout:1000,
            }).done(function(data1,textStatus,jqXHR) {
                // $('#mainText').text("ゆるキャラを手に入れた！");
                // $('#modal').modal({
                //     fadeDuration: 800
                // });
                // showModal("カードGET","カードを手に入れた！");
                // モーダルウィンドウ内画像をゆるキャラの画像へ変更。
                $('#modalCard').attr('src',path);
                $('#modalCard').show();
                $('#mainText').text("You got a Yuruchara!");

                // モーダルウィンドウを表示。
                $('#modal').iziModal('setHeaderColor','#68f776');
                $('#modal').iziModal('setTitle','GET');
                $('#modal').iziModal('open');
            }).fail(function(jqXHR, textStatus, errorThrown ) {

            }).always(function(){

            });

        });
    }
    else
    {
        marker[markerCount].addListener('click', function(){
            $('#modalCard').hide();
            $('#mainText').text("You already have the Yuruchara.");

            // モーダルウィンドウを表示。
            $('#modal').iziModal('setHeaderColor','#fe1d3f');
            $('#modal').iziModal('setTitle','Already got');
            $('#modal').iziModal('open');

        });
    }

}

function getPosition(callback)
{
  navigator.geolocation.getCurrentPosition(
      // 取得成功した場合
        function(position) {
            // モーダルウィンドウが閉じられた際のイベントを追加。
            $(document).on('closed','#modal',function(e){
                // 現在地の緯度・経度を基にゆるキャラカードを再検索。
                positionProcessing({ "lat":position.coords.latitude, "lng":position.coords.longitude });
            });
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
        // url:'/YurucharaGO/public/range',
        url:'/range',
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
        console.log(cardData);
    }).fail(function(jqXHR, textStatus, errorThrown ) {

    }).always(function(){

    });
}

// ページ更新処理
function pageReload()
{
	window.location.reload(true);
}

// モーダルを表示する関数。
// 引数:
// titleText:モーダルのタイトル文字を指定してください。
// mainText:モーダルのメイン文字を指定してください。
function showModal(titleText,mainText)
{
    // $('#modal').iziModal('setTitle', titleText);
    // $('#mainText').text(mainText);
    // $('#modal').iziModal('open');
}

// モーダルを閉じる関数。
function modalFinish()
{
    // $('#modal').modal.close();
}


$(document).ready(function(){

    // モーダルを初期化。
    // $('#modal').iziModal(
        // {
        //     title:'',
        //     subtitle:'',
        //     headerColor:'#85d870',
        //     overlay: true,
        //     overlayClose: false,
        //     transitionIn:'fadeInDown',
        //     transitionOut:'fadeOutDown'

        // }
    // );

});
