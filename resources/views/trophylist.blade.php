@extends('layouts.app')

@section('content')
<div class="rate">
  <h1 class="rate--param">XXX%</h1>
  <p class="rate--comp">completed.</p>
</div>

<article class="inner">
  <!--属性トロフィー-->
  <section class="trophy">
    <img src="{{ asset('images/trophy__img.jpg') }}" class="trophy__img trophy__img--blank">
    <h2 class="trophy__name">Nature</h2>
      <p class="get">入手：{{isset($oAttribute["Nature"]->AttributeCount) ? $oAttribute["Nature"]->AttributeCount:0}}</p>
      <p class="master">マスター：{{isset($mAttribute["Nature"]->AttributeCount) ? $mAttribute["Nature"]->AttributeCount:0}}</p>
    <div class="test-circle7">
    </div>
  </section>
  <section class="trophy">
    <img src="{{ asset('images/trophy__img.jpg') }}" class="trophy__img trophy__img--blank">
    <h2 class="trophy__name">Food</h2>
      <p class="get">入手：{{isset($oAttribute["Food"]->AttributeCount) ? $oAttribute["Food"]->AttributeCount:0}}</p>
      <p class="master">マスター：{{isset($mAttribute["Food"]->AttributeCount) ? $mAttribute["Food"]->AttributeCount:0}}</p>
      <div class="test-circle7">
      </div>
  </section>
  <section class="trophy">
    <img src="{{ asset('images/trophy_img_blank.jpg') }}" class="trophy__img trophy__img--blank">
    <h2 class="trophy__name">Building</h2>
      <p>入手：{{isset($oAttribute["Building"]->AttributeCount) ? $oAttribute["Building"]->AttributeCount:0}}</p>
      <p>マスター：{{isset($mAttribute["Building"]->AttributeCount) ? $mAttribute["Building"]->AttributeCount:0}}</p>
      <div class="test-circle7">
      </div>
  </section>
    <section class="trophy">
        <img src="{{ asset('images/trophy_img_blank.jpg') }}" class="trophy__img trophy__img--blank">
        <h2 class="trophy__name">Culture</h2>
        <p>入手：{{isset($oAttribute["Culture"]->AttributeCount) ? $oAttribute["Culture"]->AttributeCount:0}}</p>
        <p>マスター：{{isset($mAttribute["Culture"]->AttributeCount) ? $mAttribute["Culture"]->AttributeCount:0}}</p>
        <div class="test-circle7">
        </div>
    </section>
    <section class="trophy">
        <img src="{{ asset('images/trophy_img_blank.jpg') }}" class="trophy__img trophy__img--blank">
        <h2 class="trophy__name">Rare</h2>
        <p>入手：{{isset($oAttribute["Rare"]->AttributeCount) ? $oAttribute["Rare"]->AttributeCount:0}}</p>
        <p>マスター：{{isset($mAttribute["Rare"]->AttributeCount) ? $mAttribute["Rare"]->AttributeCount:0}}</p>
        <div class="test-circle7">
        </div>
    </section>

  <!--地方トロフィー-->
  <section class="trophy">
    <img src="{{ asset('images/trophy_img_blank.jpg') }}" class="trophy__img trophy__img--blank">
    <h2 class="trophy__name">Hokkaido</h2>
      <p>入手：{{isset($oRegion["Hokkaido"]->RegionCount) ? $oRegion["Hokkaido"]->RegionCount:0}}</p>
      <p>マスター：{{isset($mRegion["Hokkaido"]->RegionCount) ? $mRegion["Hokkaido"]->RegionCount:0}}</p>
      <div class="test-circle7">
      </div>
  </section>
  <section class="trophy">
    <img src="{{ asset('images/trophy__img.jpg') }}" class="trophy__img trophy__img--blank">
    <h2 class="trophy__name">Tohoku</h2>
      <p>入手：{{isset($oRegion["Tohoku"]->RegionCount) ? $oRegion["Tohoku"]->RegionCount:0}}</p>
      <p>マスター：{{isset($mRegion["Tohoku"]->RegionCount) ? $mRegion["Tohoku"]->RegionCount:0}}</p>
      <div class="test-circle7">
      </div>
  </section>
  <section class="trophy">
    <img src="{{ asset('images/trophy_img_blank.jpg') }}" class="trophy__img trophy__img--blank">
    <h2 class="trophy__name">Kanto</h2>
      <p>入手：{{isset($oRegion["Kanto"]->RegionCount) ? $oRegion["Kanto"]->RegionCount:0}}</p>
      <p>マスター：{{isset($mRegion["Kanto"]->RegionCount) ? $mRegion["Kanto"]->RegionCount:0}}</p>
      <div class="test-circle7">
      </div>
  </section>
  <section class="trophy">
    <img src="{{ asset('images/trophy__img.jpg') }}" class="trophy__img trophy__img--blank">
    <h2 class="trophy__name">Chubu</h2>
      <p>入手：{{isset($oRegion["Chubu"]->RegionCount) ? $oRegion["Chubu"]->RegionCount:0}}</p>
      <p>マスター：{{isset($mRegion["Chubu"]->RegionCount) ? $mRegion["Chubu"]->RegionCount:0}}</p>
      <div class="test-circle7">
      </div>
  </section>
  <section class="trophy">
    <img src="{{ asset('images/trophy_img_blank.jpg') }}" class="trophy__img trophy__img--blank">
    <h2 class="trophy__name">Kinki</h2>
      <p>入手：{{isset($oRegion["Kinki"]->RegionCount) ? $oRegion["Kinki"]->RegionCount:0}}</p>
      <p>マスター：{{isset($mRegion["Kinki"]->RegionCount) ? $mRegion["Kinki"]->RegionCount:0}}</p>
      <div class="test-circle7">
      </div>
  </section>
  <section class="trophy">
    <img src="{{ asset('images/trophy_img_blank.jpg') }}" class="trophy__img trophy__img--blank">
    <h2 class="trophy__name">Chugoku</h2>
      <p>入手：{{isset($oRegion["Chugoku"]->RegionCount) ? $oRegion["Chugoku"]->RegionCount:0}}</p>
      <p>マスター：{{isset($mRegion["Chugoku"]->RegionCount) ? $mRegion["Chugoku"]->RegionCount:0}}</p>
      <div class="test-circle7">
      </div>
  </section>
  <!--４段目-->
  <section class="trophy">
    <img src="{{ asset('images/trophy_img_blank.jpg') }}" class="trophy__img trophy__img--blank">
    <h2 class="trophy__name">Shikoku</h2>
      <p>入手：{{isset($oRegion["Shikoku"]->RegionCount) ? $oRegion["Shikoku"]->RegionCount:0}}</p>
      <p>マスター：{{isset($mRegion["Shikoku"]->RegionCount) ? $mRegion["Shikoku"]->RegionCount:0}}</p>
      <div class="test-circle7">
      </div>
  </section>
  <section class="trophy">
    <img src="{{ asset('images/trophy_img_blank.jpg') }}" class="trophy__img trophy__img--blank">
    <h2 class="trophy__name">Kyushu</h2>
      <p>入手：{{isset($oRegion["Kyushu"]->RegionCount) ? $oRegion["Kyushu"]->RegionCount:0}}</p>
      <p>マスター：{{isset($mRegion["Kyushu"]->RegionCount) ? $mRegion["Kyushu"]->RegionCount:0}}</p>
      <div class="test-circle7">
      </div>
  </section>
</article>
<script>

  var test_get = {{isset($oAttribute["Nature"]->AttributeCount) ? $oAttribute["Nature"]->AttributeCount:0}};
  var test_master = {{isset($mAttribute["Nature"]->AttributeCount) ? $mAttribute["Nature"]->AttributeCount:0}};
  console.log(test_get,test_master);

  $(".test-circle7").circliful({
    animation: 1,
    animationStep: 10,
    foregroundBorderWidth: 5,
    backgroundBorderWidth: 5,
    percent: 10,
    replacePercentageByText: '10/100',
    textSize: 28,
    textStyle: 'font-size: 12px;',
    textColor: '#666',

    progressColor: {20: '#CC9487', 40: '#FA6C00', 60: '#FF6C99'}
  });
</script>

@endsection
