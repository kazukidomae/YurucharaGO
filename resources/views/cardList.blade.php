@extends('layouts.app')

@section('content')
    @foreach($data as $cardData)
        {{$obtainFlg = false}}
        @if (isset($cardData->UserID))
            {{$obtainFlg = true}}
        @endif
        <div class="card card--list">
            <a href="{{ action('GetDataController@getDetail') }}?CardID={{$cardData->CardID}}&Obtain={{$obtainFlg}}" class="card__link">
                <img src="{{$cardData->CardDesignPath}}" class="card__img">
                @if (!$obtainFlg)
                    <img src="{{$cardData->CardIllustrationPath}}" class="card__chara__none">
                @else
                    <img src="{{$cardData->CardIllustrationPath}}" class="card__chara">
                @endif
                <div class="textbox">
                    <div class="textbox__name">{{$cardData->CardName}}</div>
                </div>
            </a>
        </div>
    @endforeach
@endsection
