@extends('layouts.app')

@section('content')
    <?php $obtainFlg = false ?>
    @if ($obtain[0])
        <?php $obtainFlg= true ?>
    @endif
    {{$data}}
    {{--<div class="card">--}}
      {{--<img src="{{'images/CardDesign/'.$data[0]->CardDesignPath}}" class="card__img">--}}
         {{--<!-- シルエット化 -->--}}
        {{--@if (!$obtainFlg)--}}
            {{--<img src="{{'images/CardDesign/'.$data[0]->CardIllustrationPath}}" class="card__chara-none card__chara-none--detail">--}}
        {{--@else--}}
            {{--<img src="{{'images/CharacterImage/'.$data[0]->CardIllustrationPath}}" class="card__chara card__chara--detail">--}}
        {{--@endif--}}
      {{--<div class="info__name">--}}
        {{--<h2>{{$data[0]->CardName}}</h2>--}}
        {{--<div class="info__map">--}}
          {{--<a href="{{ action('GetDataController@getNavigationData') }}?CardID={{$data[0]->CardID}}&Obtain={{$obtainFlg}}">--}}
            {{--<img src="{{ asset('images/musimegane.png') }}">--}}
          {{--</a>--}}
        {{--</div>--}}
      {{--</div>--}}
      {{--<div class="info">--}}
        {{--<div class="info__text">--}}
          {{--<p>{{ $data[0]->CardDescription}}</p>--}}
        {{--</div>--}}
           {{--<!-- PR画像 -->--}}
        {{--<div class="info__images" id="slider">--}}
          {{--@for ($i = 0; $i < count($data); $i++)--}}
            {{--<img src="{{'images/PRImage/'.$data[$i]->PRPhotoPath}}">--}}
              {{--<p>{{$data[$i]->PRDescription }}</p>--}}
          {{--@endfor--}}
          {{--<div class="btn">--}}
            {{--<a href="#" id="prev" class="slider-btn">＜</a>--}}
            {{--<a href="#" id="next" class="slider-btn">＞</a>--}}
          {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<script>--}}
      {{--$(function(){--}}
        {{--var page = 0;--}}
        {{--var lastPage = parseInt($("#slider img").length-1);--}}
        {{--$("#slider img").css("display","none");--}}
        {{--$("#slider img").eq(page).css("display","block");--}}
        {{--$("#slider p").css("display","none");--}}
        {{--$("#slider p").eq(page).css("display","block");--}}

        {{--function changePage(){--}}
          {{--$("#slider img").fadeOut(1000);--}}
          {{--$("#slider img").eq(page).fadeIn(1000);--}}
          {{--$("#slider p").fadeOut(1000);--}}
          {{--$("#slider p").eq(page).fadeIn(1000);--}}
        {{--}--}}
        {{--$("#prev").click(function(){--}}
          {{--if(page === 0){--}}
            {{--page = lastPage;--}}
            {{--changePage();--}}
          {{--}else{--}}
            {{--page --;--}}
            {{--changePage();--}}
          {{--};--}}
        {{--});--}}
          {{--$("#next").click(function(){--}}
            {{--if(page === lastPage){--}}
              {{--page = 0;--}}
              {{--changePage();--}}
            {{--}else{--}}
              {{--page ++;--}}
              {{--changePage();--}}
            {{--};--}}
          {{--});--}}
        {{--});--}}
    {{--</script>--}}
@endsection
