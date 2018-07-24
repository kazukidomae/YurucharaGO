@extends('layouts.app')

@section('content')
    @foreach($data as $cardData)
        <?php $obtainFlg = false ?>
        @if (isset($cardData->UserID))
            <?php $obtainFlg = true ?>
        @endif
        <div class="card card--list">
            <a href="{{ action('GetDataController@getDetail') }}?CardID={{$cardData->CardID}}&Obtain={{$obtainFlg}}" class="card__link">
                <img src="{{'images/CardDesign/'.$cardData->CardDesignPath}}" class="card__img">
                {{-- シルエット化 --}}
                @if (!$obtainFlg)
                    <img src="{{'images/CharacterImage/'.$cardData->CardIllustrationPath}}" class="card__chara-none">
                @else
                    <img src="{{'images/CharacterImage/'.$cardData->CardIllustrationPath}}" class="card__chara">
                @endif
                <div class="textbox">
                    <div class="textbox__name">{{$cardData->CardName}}</div>
                </div>
            </a>
        </div>
    @endforeach
@endsection
