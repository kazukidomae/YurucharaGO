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
                <img src="{{$data[$i]->PRPhotoPath}}">
                <p>{{ $data[$i]->PRDescription }}</p>
            @endfor
        </div>
        <a href="#" id="next" class="slider-btn">＞</a>
        <a href="#" id="prev" class="slider-btn">＜</a>
    </div>
    </div>
    <script>
      $(function(){
        var page = 0;
        var lastPage = parseInt($("#slider img").length-1);
        $("#slider img").css("display","none");
        $("#slider img").eq(page).css("display","block");
        $("#slider p").css("display","none");
        $("#slider p").eq(page).css("display","block");

        function changePage(){
          $("#slider img").fadeOut(1000);
          $("#slider img").eq(page).fadeIn(1000);
          $("#slider p").fadeOut(1000);
          $("#slider p").eq(page).fadeIn(1000);
        }
        $("#prev").click(function(){
          if(page === 0){
            page = lastPage;
            changePage();
          }else{
            page --;
            changePage();
          };
        });
          $("#next").click(function(){
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
