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

// 徒歩ルートの距離を格納する変数
var routeWalkDistance;
// 徒歩ルートの時間を格納する変数
var routeWalkTime;
// 自動車ルートの距離を格納する変数
var routeCarDistance;
// 自動車ルートの時間を格納する変数
var routeCarTime;

// 吹き出し(インフォウィンドウ)内部の情報を格納する変数。
var iw;
// 現在吹き出しを表示中か記録するフラグ。表示中ならtrue、まだ表示していなければfalse。
var iwnow = false;

// 現在地のマーカー。
var hereMarker;
// ゆるキャラのマーカー。
var charaMarker;
// スポットのマーカー一覧リスト。
var spotMarker = new Array();

// ゆるキャラの取得済み情報を格納する変数。取得済みの場合は1となる。
var alreadyGet;

// ゆるキャラの各取得スポットの緯度をセットする配列。
var spot_lat = new Array();
// ゆるキャラの各取得スポットの経度をセットする配列。
var spot_lng = new Array();

// 各スポットごとの徒歩ルートの距離を格納する配列
var spotRouteWalkDistance = new Array();
// 各スポットごとの徒歩ルートの時間を格納する配列
var spotRouteWalkTime = new Array();
// 各スポットごとの自動車ルートの距離を格納する配列
var spotRouteCarDistance = new Array ();
// 各スポットごとの自動車ルートの時間を格納する配列
var spotRouteCarTime = new Array();

// 現在のルート探索の進捗状況。ルート探索が完了したスポット数がセットされる。
var spotCompleted = 0;


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
                icon:"./images/human.png"

            });
            // ページ遷移で受信したゆるキャラの緯度経度を基に、マーカーを作成する。
            // ゆるキャラが未取得の場合
            if(alreadyGet != 1)
            {
                // ？マークを表示する。
                CharacterIllustration = "./images/unknown.png";
            }

            for(i=0;i<spot_lat.length;i++)
            {
                spotMarker.push(
                    new google.maps.Marker({
                        position:new google.maps.LatLng(spot_lat[i],spot_lng[i]),
                        map:map,
                        draggable:false,
                        title:"Spot" + i,
                        icon:
                        {
                            url:CharacterIllustration,
                            scaledSize:new google.maps.Size(100, 100) //画像のサイズ
                        }
                    })
                );
            }

            // charaMarker = new google.maps.Marker({
            //     position:new google.maps.LatLng(spot_lat[0],spot_lng[0]),
            //     map:map,
            //     draggable:false,
            //     icon:
            //     {
            //         url:CharacterIllustration,
            //         scaledSize:new google.maps.Size(100, 100) //画像のサイズ
            //     }
            // });

            // ルート探索開始
            createRoute(mapLatLng, spotMarker[0].getPosition(),"徒歩",addIconClickEvent);
            // createRoute(mapLatLng, charaMarker.getPosition(),"自動車",addIconClickEvent);

            // マーカーをクリックした
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

// ルート探索を行う関数。
// 引数:
// llStart 出発地の緯度経度。
// llFinish 目的地の緯度経度。
// travel: 移動手段。　"徒歩":徒歩で移動　"自動車":自動車で移動。
// callback: ルート探索が完了した後に実行するコールバック関数。
function createRoute(llStart,llFinish,travel,callback)
{

    var routeOptions;
    var r;

    // ルート検索の条件を指定。
    if(travel == "徒歩")
    {
        routeOptions =
        {
            origin: llStart, // 出発地
            destination: llFinish, // 目的地
            travelMode: google.maps.DirectionsTravelMode.WALKING //交通手段は徒歩。
        };
        r = new google.maps.DirectionsRenderer({ // ルート描画
            map:map,
            suppressMarkers: true,
            polylineOptions: {
                strokeColor: '#43a5fe',
                opacity:0.7,
                strokeWeight:5
            }

        });
    }
    else if(travel == "自動車")
    {
        routeOptions =
        {
            origin: llStart, // 出発地
            destination: llFinish, // 目的地
            travelMode: google.maps.DirectionsTravelMode.DRIVING //交通手段は徒歩。
        };
        r = new google.maps.DirectionsRenderer({ // ルート描画
            map:map,
            suppressMarkers: true,
            polylineOptions: {
                strokeColor: '#ff227a',
                opacity:0.7,
                strokeWeight:5
            }

        });
    }

    var d = new google.maps.DirectionsService(); // ルート検索

    // ルート検索
    d.route(routeOptions, function(result, status){
        // OKの場合ルート描画
        if (status == google.maps.DirectionsStatus.OK) {
            r.setDirections(result);

            // ルートの距離(km単位)、時間情報(時間と分)をセット。
            routeDistance = Math.floor(result.routes[0].legs[0].distance.value / 10.0) / 100.0;
            routeDistance = routeDistance + "km";
            routeTime = getHM( result.routes[0].legs[0].duration.value );

            if( travel == "徒歩" )
            {
                // routeWalkDistance = routeDistance;
                // routeWalkTime = routeTime;
                spotRouteWalkDistance.push( routeDistance );
                spotRouteWalkTime.push( routeTime );
            }
            else if( travel == "自動車" )
            {
                // routeCarDistance = routeDistance;
                // routeCarTime = routeTime;
                spotRouteCarDistance.push(routeDistance);
                spotRouteCarTime.push(routeTime);
            }

            // コールバック関数を実行する。
            callback(travel);

        }
    });
}

// ルート探索処理が終わった後に呼び出される関数。自動車ルート探索終了後、ゆるキャラアイコンにクリックイベントを追加する。
function addIconClickEvent(travel)
{
    // 変数宣言　ここから
    // 吹き出しのHTMLデータを格納する変数。
    var naviHTML = '';
    // 変数宣言　ここまで

    // 自動車ルートの探索が終了した場合
    if(travel == "自動車")
    {
        // スポットの完了個数をプラス。
        spotCompleted++;
        // 未処理のスポットがあれば、そのスポットの徒歩ルートを探索する。
        if( spotCompleted < spot_lat.length )
        {
            // 次のスポットの徒歩ルート探索を開始する。
            createRoute(mapLatLng, new google.maps.LatLng(spot_lat[spotCompleted], spot_lng[spotCompleted]),"徒歩",addIconClickEvent );
        }
        else
        {
            // スポットのルート検索が全て終了したら、全ルートの検索結果を吹き出し上に表示させる。
            for(i=0;i<spot_lat.length;i++)
            {
                naviHTML = '<table><tr><td colspan="2"></td><th>Distance</th><th>Time</th></tr>';
                naviHTML +=  '<tr><td colspan="4">Spot' + (i + 1) + ':</td></tr>';
                // 徒歩ルート
                naviHTML += '<tr><td><div class="walkLine"></div></td><td><img src="./images/walkicon.png" alt="walk" width="48" height="48"></td>';
                naviHTML += '<td>' + spotRouteWalkDistance[i] + '</td><td>' + spotRouteWalkTime[i] + '</td></tr>';
                // 自動車ルート
                naviHTML += '<tr><td><div class="carLine"></div></td><td><img src="./images/caricon.png" alt="car" width="48" height="48"></td>';
                naviHTML += '<td>' + spotRouteCarDistance[i] + '</td><td>' + spotRouteCarTime[i] + '</td></tr>';
                naviHTML += '</table>';

                // マーカーをクリックした際のイベント付加。
                ( function(ini,nh){
                    spotMarker[ini].addListener('click', function(e){

                        // 吹き出しの作成
                        iw = new google.maps.InfoWindow({
                            position:e.latLng,
                            content:nh
                        });

                        iw.open(map);

                    });
                } )(i,naviHTML);

            }

        }

    }
    // 徒歩ルートの探索が終了した場合
    else if(travel == "徒歩")
    {
        // 自動車ルートの探索を開始する。
        createRoute(mapLatLng,new google.maps.LatLng(spot_lat[spotCompleted], spot_lng[spotCompleted]),"自動車",addIconClickEvent);
    }

}

// スポットの全てのルート探索結果を、吹き出しに表示させる関数。
function showAllSpot()
{

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
        ret = ret + hour + "hours and ";
    }
    ret = ret + minute + "minutes";

    return ret;

}

