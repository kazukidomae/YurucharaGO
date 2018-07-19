@extends('layouts.app')

@section('content')
    @foreach($data as $cardData)
        <div class="card card--list">
          <!--<div class="">
            <input type="test" value="name" placeholder="name"><input type="button" value="search">
            <input type="button" value="attribute">
            <input type="button" value="region">
            <input type="button" value="prefectures ">
          </div>
        -->
            {{--<a href="{{ action('GetDataController@getDetail') }}?CardID={{$cardData->CardID}}" class="card__link">--}}
                <img src="{{'images/CardDesign/'.$cardData->CardDesignPath}}" class="card__img">
                <img src="{{$cardData->CardIllustrationPath}}" class="card__chara">
                <div class="textbox">
                    <div class="textbox__name">{{$cardData->CardName}}</div>
                </div>
            {{--</a>--}}
        </div>
    @endforeach
@endsection
