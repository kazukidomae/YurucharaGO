@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    <!-- javascriptのインポート -->
                    <script type="text/javascript" src="{{ asset('/js/jquery-3.0.0.min.js') }}"></script>
                    <script type="text/javascript" src="{{ asset('/js/mapview.js') }}"></script>
                    <!-- スタイルシートのインポート -->
                    <link href="{{ asset('/css/map.css') }}" rel="stylesheet" type="text/css">
                    <!-- グーグルマップのAPIの読み込み -->
                    <script src="https://maps.googleapis.com/maps/api/js?v=3&libraries=geometry&key=AIzaSyAG3Rgb56sGXTKKIABifXlwM_YHrc3z_5M&callback=initMap&language=en"></script>

                    <!-- 現在地非同期処理 -->
                    <script type="text/javascript">
                        $(function(){
                            getPosition(positionProcessing);
                        });
                    </script>
                    <p><button type="button" id="but" onclick="pageReload();">更新</button></p>
                    <!-- グーグルマップの表示領域。 -->
                    <div id="map"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
