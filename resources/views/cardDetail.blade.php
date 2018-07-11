@extends('layouts.app')

@section('content')
    <?php $obtainFlg = false ?>
    @if ($obtain[0])
        <?php $obtainFlg= true ?>
    @endif
    <div class="card">
      <img src="{{$data[0]->CardDesignPath}}" class="card__img">
        {{-- シルエット化 --}}
        @if (!$obtainFlg)
            <img src="{{$data[0]->CardIllustrationPath}}" class="card__chara__none">
        @else
            <img src="{{$data[0]->CardIllustrationPath}}" class="card__chara">
        @endif
      <div class="card__name"><h2>{{$data[0]->CardName}}</h2></div>
      <div class="info">
        <div class="info__map">
          <p>生息地：<a href="{{ action('GetDataController@getNavigationData') }}?CardID={{$data[0]->CardID}}&Obtain={{$obtainFlg}}">kumamoto</a></p>
        </div>
        <div class="info__text">
          <p>{{ $data[0]->CardDescription}}</p>
        </div>
          {{-- PR説明 --}}
          @for ($i = 0; $i < count($data); $i++)
              <p>{{ $data[$i]->PRDescription }}</p>
          @endfor
          {{-- PR画像 --}}
        <div class="info__images">
            @for ($i = 0; $i < count($data); $i++)
                <img src="{{$data[$i]->PRPhotoPath}}">
            @endfor
        </div>
      </div>
    </div>
@endsection
