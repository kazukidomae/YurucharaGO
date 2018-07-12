@extends('layouts.app')

@section('content')
    {{-- 取得フラグ --}}

    <!-- javascriptのインポート -->
    <script type="text/javascript" id="script" src="{{ asset('/js/navigate.js') }}"></script>
    <!-- スタイルシートのインポート -->
    <link href="{{ asset('/css/navigate.css') }}" rel="stylesheet" type="text/css">
    <!-- グーグルマップのAPIの読み込み -->
    <script src="https://maps.googleapis.com/maps/api/js?v=3&libraries=geometry&key=AIzaSyAG3Rgb56sGXTKKIABifXlwM_YHrc3z_5M&callback=initMap&language=en"></script>

    <script type="text/javascript">
        lat = @json($data[0]->latitude);
        lng = @json($data[0]->longitude);

        // ゆるキャラの各取得スポットの緯度経度を、phpから取得。
        @for ($i=0; $i<count($data); $i++)
            spot_lat.push( parseFloat( @json($data[$i]->latitude) ) );
            spot_lng.push( parseFloat( @json($data[$i]->longitude) ) );
            
        @endfor

        CharacterName = @json($data[0]->CardName);
        CharacterIllustration = @json($data[0]->CardIllustrationPath);
        // カードの取得済み情報を取得。
        alreadyGet = @json($obtain[0]);
    </script>

    <form id="mainform" action="" method="post">
        <p><input type="button" id="but" value="更新" onclick="pageReload();"></p>
    </form>

    <!-- グーグルマップの表示領域。 -->
    <div id="map"></div>
@endsection
