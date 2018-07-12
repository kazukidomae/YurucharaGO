@extends('layouts.app')

@section('content')
    <div id="map-container"></div>
    <div class="card-body">
      <div class="accordion">
        <p class="accordion__switch accordion__switch--hokkaido" id="1">Hokkaido</p>
        <div class="accordion__container accordion__container--none accordion__container--hokkaido">
          <a href="{{ action('GetDataController@refinePrefectures') }}?Prefectures=1">Hokkaido</a>
        </div>
        <p class="accordion__switch accordion__switch--tohoku" id="2">Tohoku</p>
        <div class="accordion__container accordion__container--none accordion__container--tohoku">
          <a href="{{ action('GetDataController@refinePrefectures') }}?Prefectures=2">Aomori</a>
          <a href="{{ action('GetDataController@refinePrefectures') }}?Prefectures=3">Iwate</a>
          <a href="{{ action('GetDataController@refinePrefectures') }}?Prefectures=4">Miyagi</a>
          <a href="{{ action('GetDataController@refinePrefectures') }}?Prefectures=5">Akita</a>
          <a href="{{ action('GetDataController@refinePrefectures') }}?Prefectures=6">Yamagata</a>
          <a href="{{ action('GetDataController@refinePrefectures') }}?Prefectures=7">Fukushima</a>
        </div>
        <p class="accordion__switch accordion__switch--kanto" id="3">Kanto</p>
        <div class="accordion__container accordion__container--none accordion__container--kanto">
          <a href="{{ action('GetDataController@refinePrefectures') }}?Prefectures=8">Ibaraki</a>
          <a href="{{ action('GetDataController@refinePrefectures') }}?Prefectures=9">Tochigi</a>
          <a href="{{ action('GetDataController@refinePrefectures') }}?Prefectures=10">Gunma</a>
          <a href="{{ action('GetDataController@refinePrefectures') }}?Prefectures=11">Saitama</a>
          <a href="{{ action('GetDataController@refinePrefectures') }}?Prefectures=12">Chiba</a>
          <a href="{{ action('GetDataController@refinePrefectures') }}?Prefectures=13">Tokyo</a>
          <a href="{{ action('GetDataController@refinePrefectures') }}?Prefectures=14">Kanagawa</a>
        </div>
        <p class="accordion__switch accordion__switch--chubu" id="4">Chubu</p>
        <div class="accordion__container accordion__container--none accordion__container--chubu">
          <a href="{{ action('GetDataController@refinePrefectures') }}?Prefectures=15">Nigata</a>
          <a href="{{ action('GetDataController@refinePrefectures') }}?Prefectures=16">Toyama</a>
          <a href="{{ action('GetDataController@refinePrefectures') }}?Prefectures=17">Ishikawa</a>
          <a href="{{ action('GetDataController@refinePrefectures') }}?Prefectures=18">Fukui</a>
          <a href="{{ action('GetDataController@refinePrefectures') }}?Prefectures=19">Yamanashi</a>
          <a href="{{ action('GetDataController@refinePrefectures') }}?Prefectures=20">Nagano</a>
          <a href="{{ action('GetDataController@refinePrefectures') }}?Prefectures=21">Gifu</a>
          <a href="{{ action('GetDataController@refinePrefectures') }}?Prefectures=22">Shizuoka</a>
          <a href="{{ action('GetDataController@refinePrefectures') }}?Prefectures=23">Aichi</a>
        </div>
        <p class="accordion__switch accordion__switch--kinki" id="5">Kinki</p>
        <div class="accordion__container accordion__container--none accordion__container--kinki">
          <a href="{{ action('GetDataController@refinePrefectures') }}?Prefectures=24">Mie</a>
          <a href="{{ action('GetDataController@refinePrefectures') }}?Prefectures=25">Shiga</a>
          <a href="{{ action('GetDataController@refinePrefectures') }}?Prefectures=26">Kyoto</a>
          <a href="{{ action('GetDataController@refinePrefectures') }}?Prefectures=27">Osaka</a>
          <a href="{{ action('GetDataController@refinePrefectures') }}?Prefectures=28">Hyogo</a>
          <a href="{{ action('GetDataController@refinePrefectures') }}?Prefectures=29">Nara</a>
          <a href="{{ action('GetDataController@refinePrefectures') }}?Prefectures=30">Wakayama</a>
        </div>
        <p class="accordion__switch accordion__switch--chugoku" id="6">Chugoku</p>
        <div class="accordion__container accordion__container--none accordion__container--chugoku">
          <a href="{{ action('GetDataController@refinePrefectures') }}?Prefectures=31">Tottori</a>
          <a href="{{ action('GetDataController@refinePrefectures') }}?Prefectures=32">Shimane</a>
          <a href="{{ action('GetDataController@refinePrefectures') }}?Prefectures=33">Okayama</a>
          <a href="{{ action('GetDataController@refinePrefectures') }}?Prefectures=34">Hiroshima</a>
          <a href="{{ action('GetDataController@refinePrefectures') }}?Prefectures=35">Yamaguchi</a>
        </div>
        <p class="accordion__switch accordion__switch--shikoku" id="7">Shikoku</p>
        <div class="accordion__container accordion__container--none accordion__container--shikoku">
          <a href="{{ action('GetDataController@refinePrefectures') }}?Prefectures=36">Tokushima</a>
          <a href="{{ action('GetDataController@refinePrefectures') }}?Prefectures=37">Kagawa</a>
          <a href="{{ action('GetDataController@refinePrefectures') }}?Prefectures=38">Ehime</a>
          <a href="{{ action('GetDataController@refinePrefectures') }}?Prefectures=39">Kochi</a>
        </div>
        <p class="accordion__switch accordion__switch--kyushu" id="8">Kyushu</p>
        <div class="accordion__container accordion__container--none accordion__container--kyushu">
          <a href="{{ action('GetDataController@refinePrefectures') }}?Prefectures=40">Fukuoka</a>
          <a href="{{ action('GetDataController@refinePrefectures') }}?Prefectures=41">Saga</a>
          <a href="{{ action('GetDataController@refinePrefectures') }}?Prefectures=42">Nagasaki</a>
          <a href="{{ action('GetDataController@refinePrefectures') }}?Prefectures=43">Kumamoto</a>
          <a href="{{ action('GetDataController@refinePrefectures') }}?Prefectures=44">Oita</a>
          <a href="{{ action('GetDataController@refinePrefectures') }}?Prefectures=45">Miyazaki</a>
          <a href="{{ action('GetDataController@refinePrefectures') }}?Prefectures=46">Kagoshima</a>
          <a href="{{ action('GetDataController@refinePrefectures') }}?Prefectures=47">Okinawa</a>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="{{ asset('/js/topmap.js') }}"></script>
    <script type="text/javascript">
    </script>
@endsection
