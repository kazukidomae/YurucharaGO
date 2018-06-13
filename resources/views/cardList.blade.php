@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">カード一覧</div>
                    <ul>
                        @foreach($data as $d)
                            <li>{{$d->CardName}}</li>
{{--                            <li><a href="{{action('GetDataController@refinePrefectures')}}?Prefectures=Shiga">詳細</a></li>--}}
                            <li>{{$d->PrefecturesName}}</li>
                            <li><img src="{{$d->CardIllustration}}"></li>
                            <li><img src="{{$d->PrefecturesIcon}}"></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
