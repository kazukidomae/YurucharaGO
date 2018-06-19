@extends('layouts.app')

@section('content')
    <div class="card">
        <a href="{{ action('GetDataController@getNavigationData') }}?CardID={{$data[0]->CardID}}" class="card__link">
            <img src="{{ asset('images/card_layout.png') }}" class="card__img">
            <img src="{{$data[0]->	PrefecturesIcon}}" class="card__mark">
            <img src="{{$data[0]->CardIllustration}}" class="card__chara">
            <div class="textbox">
                <div class="textbox__name">{{$data[0]->CardName}}</div>
            </div>
        </a>
    </div>
@endsection
