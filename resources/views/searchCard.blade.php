@extends('layouts.app')

@section('content')
{{ $ido1 = 34.701312}}
{{ $ido2 = 35.688263}}
{{ $ido3 = 36.383839 }}
{{ $keido1 = 135.496959}}
{{ $keido2 = 139.693973}}
{{ $keido3 = 140.469818 }}
{{ $id1 = 1}}
{{ $id2 = 2}}
{{ $id3 = 3}}
{{ $name1 = "なにわ君"}}
{{ $name2 = "新宿太郎"}}
{{ $name3 = "ねば～る君" }}
{{ $img1 = "ticon.png"}}
{{ $img2 = "ticon.png"}}
{{ $img3 = "ticon.png"}}
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
                    <script src="https://maps.googleapis.com/maps/api/js?v=3&libraries=geometry&key=AIzaSyAG3Rgb56sGXTKKIABifXlwM_YHrc3z_5M&callback=initMap"></script>

                    <script type="text/javascript">

                        // phpからのゆるキャラの受信データを、配列に追加する。
                        // ゆるキャラ1
                        testdata_lat.push( parseFloat( <?php echo json_encode($ido1); ?>) );
                        testdata_lon.push( parseFloat( <?php echo json_encode($keido1); ?>) );
                        testdata_id.push( parseInt( <?php echo json_encode($id1); ?>) );
                        testdata_charaname.push(<?php echo json_encode($name1); ?>);
                        testdata_icon.push(<?php echo json_encode($img1); ?>);
                        // ゆるキャラ2
                        testdata_lat.push( parseFloat( <?php echo json_encode($ido2); ?>) );
                        testdata_lon.push( parseFloat( <?php echo json_encode($keido2); ?>) );
                        testdata_id.push( parseInt( <?php echo json_encode($id2); ?>) );
                        testdata_charaname.push(<?php echo json_encode($name2); ?>);
                        testdata_icon.push(<?php echo json_encode($img2); ?>);
                        // ゆるキャラ3
                        testdata_lat.push( parseFloat( <?php echo json_encode($ido3); ?>) );
                        testdata_lon.push( parseFloat( <?php echo json_encode($keido3); ?>) );
                        testdata_id.push( parseInt( <?php echo json_encode($id3); ?>) );
                        testdata_charaname.push(<?php echo json_encode($name3); ?>);
                        testdata_icon.push(<?php echo json_encode($img3); ?>);

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
