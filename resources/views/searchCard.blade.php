@extends('layouts.app')
@section('content')

    <!-- javascriptのインポート -->
    <script type="text/javascript" src="{{ asset('/js/mapview.js') }}"></script>

    <!-- モーダル用javascriptのインポート -->
    <script type="text/javascript" src="{{ asset('/js/iziModal.min.js') }}"></script>

    <!-- スタイルシートのインポート -->
    <link href="{{ asset('/css/map.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/iziModal.min.css') }}" rel="stylesheet" type="text/css">

    <!-- グーグルマップのAPIの読み込み -->
    <script src="https://maps.googleapis.com/maps/api/js?v=3&libraries=geometry&key=AIzaSyAG3Rgb56sGXTKKIABifXlwM_YHrc3z_5M&callback=initMap&language=en"></script>


    <!-- グーグルマップの表示領域。 -->
    <div id="map"></div>
    <div id="but" class="update_btn" onclick="pageReload();"><img src="{{ asset('/images/update.png') }}"></div>

    <!-- モーダル用表示領域。 -->
    <div id="modal" class="modal">
        <!-- カードの画像 -->
        <img src="images/card.png" id="modalCard" class="modalCard" alt="カードイラスト" width="150" height="150">
        <p id="mainText"></p>
    </div>

    <!-- 現在地非同期処理 -->
    <script type="text/javascript">
        $(function(){
            // モーダルウィドウを初期化する。
            $('#modal').iziModal({
                background:'#fef5c5',
                padding:24,
                transitionIn:'fadeInDown',
                transitionOut:'fadeOutDown',
                width:'80%'
            });

            getPosition(positionProcessing);
        });
    </script>
@endsection
