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
                    <!-- グーグルマップのAPIの読み込み -->
                    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAG3Rgb56sGXTKKIABifXlwM_YHrc3z_5M"></script>
                    

                    <h1>テスト</h1>
                    <form id="mainform" action="" method="post">        
                        <p><input type="button" id="but" value="現在地の緯度・経度を取得" onclick="getIdoKeido();"></p>
                        <p>緯度:<input type="text" id="ido" size="30" readonly="readonly"></p>
                        <p>経度:<input type="text" id="keido" size="30" readonly="readonly"></p>
                        <p>現在地住所:<input type="text" id="address" size="30" readonly="readonly"></p>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
