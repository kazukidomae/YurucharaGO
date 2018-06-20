@extends('layouts.app')

@section('content')
    <div class="card">
      <img src="{{ asset('images/wallpaper.png') }}" class="card__img">
      <img src="{{$data[0]->	PrefecturesIcon}}" class="card__mark card__mark--detail">
      <img src="{{$data[0]->CardIllustration}}" class="card__chara">
      <div class="card__name"><h2>{{$data[0]->CardName}}</h2></div>
      <div class="info">
        <div class="info__map">
          <p>生息地：<a href="{{ action('GetDataController@getNavigationData') }}?CardID={{$data[0]->CardID}}">熊本県</a></p>
        </div>
        <div class="info__text">
          <p>{{ $data[0]-> Introduction }}</p>
          <p></p>
        </div>
        <div class="info__images">
          <img src="images/img_profile.png">
          <img src="images/map.png">
          <img src="images/img_profile.png">
          <img src="images/map.png">
        </div>
      </div>
    </div>
@endsection
