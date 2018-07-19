@extends('layouts.app')

@section('content')
    <?php $obtainFlg = false ?>
    @if ($obtain[0])
        <?php $obtainFlg= true ?>
    @endif
    <div class="card">
      <img src="{{'images/CardDesign/'.$data[0]->CardDesignPath}}" class="card__img">
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
          {{-- PR画像 --}}
        <div class="info__images" id="slider">
            @for ($i = 0; $i < count($data); $i++)
              <div class="pr-img">
                <img src="{{$data[$i]->PRPhotoPath}}">
                <p>{{ $data[$i]->PRDescription }}</p>
              </div>
            @endfor
        </div>
        <p id="next"><a href="#">次へ</a></p>
        <p id="prev"><a href="#">戻る</a></p>
    </div>
    </div>
    <script>
      $(function(){
        var page = 0;
        var lastPage = parseInt($(".pr-img").length-1);
        $(".pr-img").css("display","none");
        $(".pr-img").eq(page).css("display","block");

        function changePage(){
          $(".pr-img").fadeOut(1000);
          $(".pr-img").eq(page).fadeIn(1000);
        }
        $("#prev a").click(function(){
          if(page === 0){
            page = lastPage;
            changePage();
          }else{
            page --;
            changePage();
          };
        });
          $("#next a").click(function(){
            if(page === lastPage){
              page = 0;
              changePage();
            }else{
              page ++;
              changePage();
            };
          });
        });
    </script>
@endsection
