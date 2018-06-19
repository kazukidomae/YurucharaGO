@extends('layouts.app')

@section('content')
    {{ $param = 32.806256}}
    {{ $param2 = 130.705838}}
    {{ $name = "くまモン" }}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">

                        <!-- javascriptのインポート -->
                        <script type="text/javascript" src="{{ asset('/js/jquery-3.0.0.min.js') }}"></script>
                        <script type="text/javascript" id="script" src="{{ asset('/js/navigate.js') }}"></script>
                        <!-- スタイルシートのインポート -->
                        <link href="{{ asset('/css/map.css') }}" rel="stylesheet" type="text/css">
                        <!-- グーグルマップのAPIの読み込み -->
                        <script src="https://maps.googleapis.com/maps/api/js?v=3&libraries=geometry&key=AIzaSyAG3Rgb56sGXTKKIABifXlwM_YHrc3z_5M&callback=initMap"></script>

                        <script type="text/javascript">
                            ido = <?php echo json_encode($param); ?>;
                            keido = <?php echo json_encode($param2); ?>;
                            yurucharaName = <?php echo json_encode($name); ?>;
                        </script>
 
                        <h1>テスト</h1>
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
