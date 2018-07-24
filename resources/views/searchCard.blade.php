@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div id="card-body" class="card-body">
                    <!-- javascriptのインポート -->
                    <script type="text/javascript" src="{{ asset('/js/mapview.js') }}"></script>

                    <!-- モーダル用javascriptのインポート -->
					<script type="text/javascript" src="{{ asset('/js/iziModal.min.js') }}"></script>

                    <!-- スタイルシートのインポート -->
                    <link href="{{ asset('/css/map.css') }}" rel="stylesheet" type="text/css">
                    <link href="{{ asset('/css/iziModal.min.css') }}" rel="stylesheet" type="text/css">

                    <!-- グーグルマップのAPIの読み込み -->
                    <script src="https://maps.googleapis.com/maps/api/js?v=3&libraries=geometry&key=AIzaSyAG3Rgb56sGXTKKIABifXlwM_YHrc3z_5M&callback=initMap&language=en"></script>


                    <p><button type="button" id="but" onclick="pageReload();">更新</button></p>
                    <!-- グーグルマップの表示領域。 -->
                    <div id="map"></div>

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

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
