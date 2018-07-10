@extends('layouts.app')

@section('content')
    <div id="map-container"></div>
    <div class="card-body">
        <a href="{{ action('GetDataController@refinePrefectures') }}?Prefectures=25">滋賀</a>
        <a href="{{ action('GetDataController@refinePrefectures') }}?Prefectures=43">熊本</a>
        <a href="{{ action('GetDataController@refinePrefectures') }}?Prefectures=13">東京</a>
    </div>
    <script type="text/javascript" src="{{ asset('/js/topmap.js') }}"></script>
@endsection
