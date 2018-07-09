@extends('layouts.app')

@section('content')
    @foreach($data as $cardData)
        <div class="card card--list">
            {{--<a href="{{ action('GetDataController@getDetail') }}?CardID={{$cardData->CardID}}" class="card__link">--}}
                <img src="{{ asset('images/card_layout.png') }}" class="card__img">
                {{--<img src="{{$cardData->	PrefecturesIcon}}" class="card__mark">--}}
                <img src="{{$cardData->CardIllustrationPath}}" class="card__chara">
                <div class="textbox">
                    <div class="textbox__name">{{$cardData->CardName}}</div>
                </div>
            {{--</a>--}}
        </div>
    @endforeach
@endsection
