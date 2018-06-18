@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">都道府県一覧</div>
                    <div class="card-body">
                        <a href="{{ action('GetDataController@refinePrefectures') }}?Prefectures=Shiga">滋賀</a>
                        <a href="{{ action('GetDataController@refinePrefectures') }}?Prefectures=Kumamoto">熊本</a>
                        <ul>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
