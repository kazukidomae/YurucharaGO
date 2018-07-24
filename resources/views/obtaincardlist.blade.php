@extends('layouts.app')

@section('content')
    @foreach($data as $cardData)
        <div class="card card--list">
            <a href="{{ action('GetDataController@getDetail') }}?CardID={{$cardData->CardID}}&Obtain=true" class="card__link">
                <img src="{{'images/CardDesign/'.$cardData->CardDesignPath}}" class="card__img">
                <img src="{{'images/CharacterImage/'.$cardData->CardIllustrationPath}}" class="card__chara">
                <div class="textbox">
                    <div class="textbox__name">{{$cardData->CardName}}</div>
                </div>
            </a>
        </div>
    @endforeach
@endsection
