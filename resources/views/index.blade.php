@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">都道府県一覧</div>
                    <div class="card-body">
                        <a href="{{ action('GetDataController@refinePrefectures') }}?Prefectures=25">滋賀</a>
                        <a href="{{ action('GetDataController@refinePrefectures') }}?Prefectures=43">熊本</a>
                        <a href="{{ action('GetDataController@refinePrefectures') }}?Prefectures=13">東京</a>
                        <ul>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
