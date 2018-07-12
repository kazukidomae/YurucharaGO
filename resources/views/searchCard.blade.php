@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div id="card-body" class="card-body">
                    <!-- javascriptのインポート -->
                    <script type="text/javascript" src="{{ asset('/js/jquery-3.0.0.min.js') }}"></script>
                    <script type="text/javascript" src="{{ asset('/js/mapview.js') }}"></script>

                    <!-- モーダル用javascriptのインポート -->
					<script type="text/javascript" src="{{ asset('/js/jquery.leanModal.min.js') }}"></script>                    

                    <!-- スタイルシートのインポート -->
                    <link href="{{ asset('/css/map.css') }}" rel="stylesheet" type="text/css">

                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css">

                    <!-- グーグルマップのAPIの読み込み -->
                    <script src="https://maps.googleapis.com/maps/api/js?v=3&libraries=geometry&key=AIzaSyAG3Rgb56sGXTKKIABifXlwM_YHrc3z_5M&callback=initMap&language=en"></script>


                    <p><button type="button" id="but" onclick="pageReload();">更新</button></p>
                    <!-- グーグルマップの表示領域。 -->
                    <div id="map"></div>

                    <!-- モーダル用表示領域。 -->
                    <div id="modal" class="modal">
                        <p id="mainText"></p>
                    </div>

                    <!-- 現在地非同期処理 -->
                    <script type="text/javascript">
                        $(function(){                           
                            getPosition(positionProcessing);
                        });
                    </script>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
