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
      <p>入手：{{isset($oAttribute["Nature"]->AttributeCount) ? $oAttribute["Nature"]->AttributeCount:0}}</p>
      <p>マスター：{{isset($mAttribute["Nature"]->AttributeCount) ? $mAttribute["Nature"]->AttributeCount:0}}</p>
  </section>
  <section class="trophy">
    <img src="{{ asset('images/trophy__img.jpg') }}" class="trophy__img trophy__img--blank">
    <h2 class="trophy__name">Food</h2>
      <p>入手：{{isset($oAttribute["Food"]->AttributeCount) ? $oAttribute["Food"]->AttributeCount:0}}</p>
      <p>マスター：{{isset($mAttribute["Food"]->AttributeCount) ? $mAttribute["Food"]->AttributeCount:0}}</p>
  </section>
  <section class="trophy">
    <img src="{{ asset('images/trophy_img_blank.jpg') }}" class="trophy__img trophy__img--blank">
    <h2 class="trophy__name">Building</h2>
      <p>入手：{{isset($oAttribute["Building"]->AttributeCount) ? $oAttribute["Building"]->AttributeCount:0}}</p>
      <p>マスター：{{isset($mAttribute["Building"]->AttributeCount) ? $mAttribute["Building"]->AttributeCount:0}}</p>
  </section>
    <section class="trophy">
        <img src="{{ asset('images/trophy_img_blank.jpg') }}" class="trophy__img trophy__img--blank">
        <h2 class="trophy__name">Culture</h2>
        <p>入手：{{isset($oAttribute["Culture"]->AttributeCount) ? $oAttribute["Culture"]->AttributeCount:0}}</p>
        <p>マスター：{{isset($mAttribute["Culture"]->AttributeCount) ? $mAttribute["Culture"]->AttributeCount:0}}</p>
    </section>

  <!--地方トロフィー-->
  <section class="trophy">
    <img src="{{ asset('images/trophy_img_blank.jpg') }}" class="trophy__img trophy__img--blank">
    <h2 class="trophy__name">Hokkaido</h2>
      <p>入手：{{isset($oAttribute["Hokkaido"]->AttributeCount) ? $oAttribute["Hokkaido"]->AttributeCount:0}}</p>
      <p>マスター：{{isset($mAttribute["Hokkaido"]->AttributeCount) ? $mAttribute["Hokkaido"]->AttributeCount:0}}</p>
  </section>
  <section class="trophy">
    <img src="{{ asset('images/trophy__img.jpg') }}" class="trophy__img trophy__img--blank">
    <h2 class="trophy__name">Tohoku</h2>
      <p>入手：{{isset($oAttribute["Tohoku"]->AttributeCount) ? $oAttribute["Tohoku"]->AttributeCount:0}}</p>
      <p>マスター：{{isset($mAttribute["Tohoku"]->AttributeCount) ? $mAttribute["Tohoku"]->AttributeCount:0}}</p>
  </section>
  <section class="trophy">
    <img src="{{ asset('images/trophy_img_blank.jpg') }}" class="trophy__img trophy__img--blank">
    <h2 class="trophy__name">Kanto</h2>
      <p>入手：{{isset($oAttribute["Kanto"]->AttributeCount) ? $oAttribute["Kanto"]->AttributeCount:0}}</p>
      <p>マスター：{{isset($mAttribute["Kanto"]->AttributeCount) ? $mAttribute["Kanto"]->AttributeCount:0}}</p>
  </section>
  <!--３段目-->
  <section class="trophy">
    <img src="{{ asset('images/trophy__img.jpg') }}" class="trophy__img trophy__img--blank">
    <h2 class="trophy__name">Chubu</h2>
      <p>入手：{{isset($oAttribute["Chubu"]->AttributeCount) ? $oAttribute["Chubu"]->AttributeCount:0}}</p>
      <p>マスター：{{isset($mAttribute["Chubu"]->AttributeCount) ? $mAttribute["Chubu"]->AttributeCount:0}}</p>
  </section>
  <section class="trophy">
    <img src="{{ asset('images/trophy_img_blank.jpg') }}" class="trophy__img trophy__img--blank">
    <h2 class="trophy__name">Kansai</h2>
      <p>入手：{{isset($oAttribute["Kansai"]->AttributeCount) ? $oAttribute["Kansai"]->AttributeCount:0}}</p>
      <p>マスター：{{isset($mAttribute["Kansai"]->AttributeCount) ? $mAttribute["Kansai"]->AttributeCount:0}}</p>
  </section>
  <section class="trophy">
    <img src="{{ asset('images/trophy_img_blank.jpg') }}" class="trophy__img trophy__img--blank">
    <h2 class="trophy__name">Chugoku</h2>
      <p>入手：{{isset($oAttribute["Chugoku"]->AttributeCount) ? $oAttribute["Chugoku"]->AttributeCount:0}}</p>
      <p>マスター：{{isset($mAttribute["Chugoku"]->AttributeCount) ? $mAttribute["Chugoku"]->AttributeCount:0}}</p>
  </section>
  <!--４段目-->
  <section class="trophy">
    <img src="{{ asset('images/trophy_img_blank.jpg') }}" class="trophy__img trophy__img--blank">
    <h2 class="trophy__name">Shikoku</h2>
      <p>入手：{{isset($oAttribute["Shikoku"]->AttributeCount) ? $oAttribute["Shikoku"]->AttributeCount:0}}</p>
      <p>マスター：{{isset($mAttribute["Shikoku"]->AttributeCount) ? $mAttribute["Shikoku"]->AttributeCount:0}}</p>
  </section>
  <section class="trophy">
    <img src="{{ asset('images/trophy_img_blank.jpg') }}" class="trophy__img trophy__img--blank">
    <h2 class="trophy__name">Kyushu</h2>
      <p>入手：{{isset($oAttribute["Kyushu"]->AttributeCount) ? $oAttribute["Kyushu"]->AttributeCount:0}}</p>
      <p>マスター：{{isset($mAttribute["Kyushu"]->AttributeCount) ? $mAttribute["Kyushu"]->AttributeCount:0}}</p>
  </section>
</article>
@endsection
