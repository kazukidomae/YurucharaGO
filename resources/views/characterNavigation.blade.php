@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"></div>

                    <div class="card-body">

                        <!-- javascriptのインポート -->
                        <script type="text/javascript" src="{{ asset('/js/jquery-3.0.0.min.js') }}"></script>
                        <script type="text/javascript" id="script" src="{{ asset('/js/navigate.js') }}"></script>
                        <!-- スタイルシートのインポート -->
                        <link href="{{ asset('/css/map.css') }}" rel="stylesheet" type="text/css">
                        <!-- グーグルマップのAPIの読み込み -->
                        <script src="https://maps.googleapis.com/maps/api/js?v=3&libraries=geometry&key=AIzaSyAG3Rgb56sGXTKKIABifXlwM_YHrc3z_5M&callback=initMap"></script>

                        <script type="text/javascript">
                            lat = @json($data[0]->latitude);
                            lng = @json($data[0]->longitude);
                            CharacterName = @json($data[0]->CardName);
                            CharacterIllustration = @json($data[0]->CardIllustration);
                        </script>

                        <form id="mainform" action="" method="post">
                            <p><input type="button" id="but" value="更新" onclick="pageReload();"></p>
                        </form>

                        <!-- グーグルマップの表示領域。 -->
                        <div id="map"></div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
